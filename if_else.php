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
    // If Condition
    $a = 15;
    $b = 20;
    if($a > $b){
        echo "$a is Greater Than $b <br>";
    }
    if($a < $b){
        echo "$a is Smaller Than $b<br>";

    }
    if($a != $b):
        echo "$a is not Equal to $b <br>";
    
    endif;
    ?>
    <?php
    // logical Operators
    /*
    1.&&
    2.||
    3.!
    4.xor
     */


    // &&
    $a = 15;
    if($a < 25 && $a == 15){
        echo "$a is Smaller Than 20 and is equal to $a <br>";
    }
    // ||
    if($a > 10 || $a < 10){
        echo '$a' . " is equal to $a<br> ";
    }
    // !
    if(!($a <= 12)){
        echo "$a is <= 15<br>";
    }
    // xor 
    if($a < 10 xor $a === 15){
        echo "$a is greater than 10 and is equal to 15 <br>";
    }
    ?>
    <?php
    // If Else Statement
    $marks = 30;
    if($marks > 45){
        echo "The Marks Are greater than 45 you are passed. <Br>";

    }else{
        echo "you are Fail. Your Marks Are Less Than 45. <br>";
    }
    ?>
    <?php
    // If Else IF Statement
    $percentage = 80;
    if($percentage >= 90 && $percentage <= 100){
        echo "You Scored A<sup>+</sup> Grades <br>";
    }else if($percentage >= 80 && $percentage < 90){
        echo "You Scored A<sup></sup> Grades <br>";
    }elseif($percentage >= 70 && $percentage < 80){
        echo "You Scored B<sup>+</sup> Grades <br>";
    }elseif($percentage >= 60 && $percentage < 70){
        echo "You Scored B<sup></sup> Grades <br>";
    }elseif($percentage >= 50 && $percentage < 60){
        echo "You Scored C<sup></sup> Grades <br>";
    }elseif($percentage >= 40 && $percentage < 50){
        echo "You Scored D<sup></sup> Grades <br>";
    }else{
        echo "You Are Fail";
    }
    
    
    ?>
    <?php
    // Ternary Operator
    $a = 25;
    $a < 30 ? $a = "$a is Smaller" : $a = "$a is Greater";
    echo $a;
    
    
    ?>
</body>
</html>
