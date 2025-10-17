<?php
if(isset($_POST['joketext'])){
    try{
        include 'includes/DatabaseConnection.php';
        
        // Handle image upload
        $img_name = '';
        if(isset($_FILES['img']) && $_FILES['img']['error'] == 0){
            $img_name = time() . '_' . $_FILES['img']['name'];
            $target_dir = "img/"; // Thay đổi từ images/ thành img/
            move_uploaded_file($_FILES['img']['tmp_name'], $target_dir . $img_name);
        }

        // Add joke and image to database
        $sql = 'INSERT INTO joke SET
        joketext = :joketext,
        img = :img,
        jokedate = CURDATE()';
        
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':joketext', $_POST['joketext'], PDO::PARAM_STR);
        $stmt->bindValue(':img', $img_name, PDO::PARAM_STR);
        $stmt->execute();
        
        header('Location: jokes.php');

    }catch (PDOException $e){
        $title = 'An error has occurred';
        $output = 'Error adding joke: ' . $e->getMessage();
    }
}else{
    $title = 'Add a new joke';
    ob_start();
    include 'templates/addjoke.html.php';
    $output = ob_get_clean();
}
include 'templates/layout.html.php';