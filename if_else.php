<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.html">Home</a>
    <br>
    <?php
    $a = 15;
    $b = 20;
    if($a > $b){
        echo "$a is Greater Than $b <br>";
    }
    if($a < $b){
        echo "$a is Smaller Than $b<br>";

    }
    if($a != $b){
        echo "$a is not Equal to $b <br>";
    }

    
    
    ?>
</body>
</html>