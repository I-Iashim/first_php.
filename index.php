<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Php</title>
</head>
<body>
    <?php
    echo "Hello World..!<br>";
    echo 'Hello World..!<br>';
    echo "hello" , "World..!<br>";
    echo "hello" . "World..!<br>";
    echo "<h1>This is Heading 1</h1><br>";
    echo "<b>This text is Bold</b><br>";
    echo "<sup>This is super script</sup><br>";
    ?>
    <?php
    // Variables
    $firstValue = "hello world <br>";
    $secondValue = "How Are You..? <br>";
    echo "$firstValue";
    echo $secondValue;
    ?>
    <?php
    // Data Types

    // String
    $str = "This is a string <br>";
    // Integer 
    $intg = 123;
    // Float
    $float = 1.23;
    // Bolean
    $bolean = true;
    // Null
    $null = null;
    // array
    $arr = array("Physics","Computer","Maths");
    // object
    // $obj = new firstClass();
    echo $str . "<br>";
    echo $intg . "<br>";
    echo $float . "<br>";
    echo $bolean . "<br>";
    echo $null . "<br>";
    echo $arr[0] . "<br>";
    var_dump($str);
    var_dump($intg);
    var_dump($float);
    var_dump($bolean);
    var_dump($null);
    var_dump($arr);
    ?>
    <?php
    // Constant Variables
    define("value1",500);
    define("value2",800);
    echo "<br>" . value1 . "<br>";
    echo value2 . "<br>";
    ?>
    <?php
    // Arithmetic Operators
    $a = 10;
    $b = 15;
    $c = $a + $b;
    echo "$a + $b = $c <br>";
    $c = $a - $b;
    echo "$a - $b = $c <br>";
    $c = $a * $b;
    echo "$a * $b = $c <br>";
    $c = $a ** $b;
    echo "$a ** $b = $c <br>";
    $c = $a % $b;
    echo "$a % $b = $c <br>";
    $c = $a / $b;
    echo "$a / $b = $c <br>";
    
    
    ?>
    
    
</body>
</html>
    
    
