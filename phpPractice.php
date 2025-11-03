<?php

    
    //Echo, Variables, Data type
    echo("<hr>Lesson 1: Echo, Variables, and Datatypes<br>");
    $strg = "Strings";
    $wNum = 21;
    $float = 2.3;
    $char = "&";
    $bool = true;
    $bool2 = false;
    $total = null;

    echo("<hr>This echo prints:
    <br>{$strg}, 
    <br>Integers = {$wNum}, 
    <br>Floats = {$float},
    <br> Characters = {$char};
    <br>even display dollar sign and percentage \${$float}%<br>");

    $total = $wNum * $float;
    echo("\$$total<br><br><hr>");

    echo("Lesson 2: Aritmetic, Increment/Decrement, and Operator Precedence<br><hr>");
    //Arithmetic Operators
    $x = 10;
    $y = 2;
    $z = null;

    $z1 = $x + $y;
    $z2 = $x - $y;
    $z3 = $x * $y;
    $z4 = $x / $y;
    $z5 = $x ** $y;
    $z6 = $x % $y;
    echo("<hr>Aritmetics: <br><hr>");
    echo("This is the result of (+) operator = {$z1}<br>");
    echo("This is the result of (-) operator = {$z2}<br>");
    echo("This is the result of (*) operator = {$z3}<br>");
    echo("This is the result of (/) operator = {$z4}<br>");
    echo("This is the result of (**(raised to the power of...) operator = {$z5}<br>");
    echo("This is the result of (%(modulus)) operator = {$z6}<br>");

    //Increment/Decrement Operators
    echo("<br><hr>Increments/Decrements: <br><hr>");
    $a = 0;
    $inc = $a++;
    $dec = $a--;
    echo("Original Value 0 and the result of (++) operator = $inc<br>");
    echo("Original Value 0 and the result of (--) operator = $dec<br>");

    //Operator Precedence
    $op = $z1 + $z2 - $z3 * $z4 / $z5 ** $z6;
    echo("<br><hr>Operator Precedence(PEMDAS):<hr>");
    echo("\$z1 = 12, <br>\$z2 = 8, <br>\$z3 = 20, <br>\$z4 = 5, <br>\$z5 = 100, <br>\$z6 = 0<br>");
    echo("{$z1} + {$z2} - {$z3} * {$z4} / {$z5} ** {$z6} = $op");

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <input type="Reset" name="reset" id="reset">
    <input type="Submit" name="submit" id="submit">
</body>
</html>