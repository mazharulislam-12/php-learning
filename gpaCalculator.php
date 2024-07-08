<?php
    $marks = 65;

    if ($marks >= 80 && $marks <=100) {
        echo "A+";
    }
    elseif ($marks >= 70 && $marks <=79) {
        echo "A";
    }
    elseif ($marks >= 60 && $marks <=69) {
        echo "A-";
    }
    elseif ($marks >= 50 && $marks <=59) {
        echo "B";
    }
    elseif ($marks >= 40 && $marks <=49) {
        echo "B";
    }
    elseif ($marks >= 33 && $marks <=39) {
        echo "C";
    }
    elseif ($marks >= 0 && $marks <=32) {
        echo "F";
    }
    else {
        echo "Invalid number";
    }
    
?>