<?php
if(!isset($_POST['val1'])){
    include 'form.html.php';

}
else{
    $val1= $_POST['val1'];
    $val2= $_POST['val2'];
    $calc= $_POST['calc'];
    if(!is_numeric($val1) || !is_numeric($val2)){
        $output = "Error: Please enter numeric values only.";
        include 'fauls.html.php';
        exit();
    }

    switch ($calc){
        case "add": $result = $val1 + $val2; break;
        break;
        case "sub": $result = $val1 - $val2; break;
        break;
        case "mul": $result = $val1 * $val2; break;
        case "div": $result = $val1 / $val2; break;

    }
    $output = "calculation result:" . $result;
    include 'result.html.php';
}
?>