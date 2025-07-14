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
    $secondValue = "How Are You..?";
    echo "$firstValue";
    echo $secondValue;
    ?>
    <?php
    $name = "Physics Book";
    $read = true;
    if($read = true){
        echo"you have read"." ".$name;
    }
    ?>

    
    
</body>
</html>