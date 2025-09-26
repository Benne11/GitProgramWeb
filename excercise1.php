<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    //task1
    function helloworld(){
        echo "Hello, World!<br>";
    }
    helloworld();
    ?>
    <?php
    //task2
    $month = date("n");
    if ($month == 8){
        echo "It's August, so it's really hot.<br>";
    } else{
        echo "Not August, so at least not in the peak of the heat.<br>";
    }
    ?>
    <?php
    //task3
    function calculateRectangleArea(){
        $length = 6;
        $width = 4;
        $area = $length * $width;
        echo "A rectangle with a length of $length and a width of $width has an area of $area.<br>";
    }
    calculateRectangleArea();
    ?>
</body>
</html>
