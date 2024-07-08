<?php
    echo "Hello world";

    // line beak
    echo "<br>";

    // variable
    $message = "hello student";

    // Output the variable
    echo $message;
    echo "<br>";

    $tk = 500;
    echo $tk;


    // data type

    $one = "hello"; //string
    $two = 123; // integer
    $three = 12.5; // float 
    $four = true; //boolean
    $five = array(123, 'shakib');  //array
    $six = null; //null

    //data type check 
    echo var_dump($one);
    echo var_dump($two);
    echo var_dump($three);
    echo var_dump($four);
    echo var_dump($five);
    echo var_dump($six);

    echo "<br>";
    echo "<br>";


    // if else

    $asifAge = 20;
    $shakibAga = 21;

    if($asifAge > $shakibAga){
        echo "Asif Older";
    }
    else{
        echo "Shakib Older";
    }
     
    echo "<br>";
    echo "<br>";
    echo "<br>";


    // task 1: 
    // Find the largest number between three 

    $firstNumber = 454;
    $secondNumber = 50;
    $thirdNumber = 41114;

    if ($firstNumber > $secondNumber && $firstNumber > $thirdNumber) {
        echo "Largest Number is First Number: $firstNumber";
    } elseif ($secondNumber > $firstNumber && $secondNumber > $thirdNumber) {
        echo "Largest Number is Second Number: $secondNumber";
    } else {
        echo "Largest Number is Third Number: $thirdNumber";
    }

    
    


?>
