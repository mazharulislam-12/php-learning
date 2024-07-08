<?php

    //Arithmetic operator

    $a = 10;
    $b = 20;
    echo $a + $b;
    echo "<br>";
    echo $b - $a;
    echo "<br>";
    echo $a*$b;
    echo "<br>";
    echo $a / $b;
    echo "<br>";
    echo $a % $b;
    echo $b**$a;

    // assignment operator
    $c = 12;
    $c = $c + 10;

    // short hand
    $c +=10;
    echo $c;

    echo "<br>";
    
    // compaeison operator
    $aa = 10;
    $ab = 20;

    if ($aa == $ab) {
        echo "A and B Similar";
    }
    else {
        echo "Not Similar";
    }

    echo "<br>";

    if ($aa == $ab) {
        echo "A and B Similar";
    }
    else {
        echo "Not Similar";
    }

    echo "<br>";

    //not equal
    if ($aa != $ab) {
        echo "A and B Similar";
    }
    else {
        echo "Not Similar";
    }

    // geter then
    if ($aa > $ab) {
        echo "A and B Similar";
    }
    else {
        echo "Not Similar";
    }

    echo "<br>";

    // less then
    if ($aa < $ab) {
        echo "A and B Similar";
    }
    else {
        echo "Not Similar";
    }

    echo "<br>";
    echo "<br>";

    //logical and 

    $x = 30;
    $y = 40;
    $z = 50;

    if ($x > $y && $x > $z) {
        echo "Large X";
    }
    elseif ($y > $z && $y > $z ) {
        echo "Large Y";
    }
    else {
        echo "Large Z";
    }





?>
