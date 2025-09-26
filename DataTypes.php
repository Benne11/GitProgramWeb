<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $myString = "This is a string";
    $myInt = 56;
    $myNull = null;
    $myFloat = 6.23;

    echo "String data is $myString <br>";
    echo "Integer data is $myInt <br>";
    echo "Null data is $myNull <br>";
    echo "Float data is $myFloat <br>";
    
    function tester(){
    echo "this is my first function which i am going to call twice<br>";
    }
    tester();
    ?>
    <p>************* Here is some HTML **************</p>
    <p>*** And now I will use PHP function again***</p>
    <?php
    tester();
    ?>
    <?php
    function addNumbers($a, $b, $c){
        $total = $a + $b + $c;
        echo ("$a+$b+$c = $total<br>");
    }
    addNumbers(5, 12, 15);
    ?>
    <?php
    $txt1= "Hello world!<br>";
    $txt2= "What a nice day!<br>";
    echo $txt1." ".$txt2;
    ?>
    <?php
    $theDay= date("l");
    echo "the day is $theDay<br/>";
    $theMoth = date("F");
    echo "the month is $theMoth<br/>";
    $t= date("H");
    
    if ($t<1){
        echo "Good morning to you";
    } else{
        echo "Good afternoon to you";
    }
    ?>
</body>
</html>