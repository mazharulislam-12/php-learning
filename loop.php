<?php

    // for loop
    // print 1 to 100

    for($i = 1; $i<=100; $i++){
        echo $i."<br>";
    }

   for ($i=0; $i <=100 ; $i +=2) { 
    echo $i. "<br>";
   }

   for ($i=1; $i <100 ; $i++) { 
    if ($i % 2 !=0) {
        echo $i."<br>";
    }
   }


//    while loop
    $x = 1;
    while ($x <= 100) {
        echo $x . '<br>';
        $x++;
    }


    // do-while loop
    $y = 1;
    do {
        echo $y . "<br>";
        $y++;
    } while ($y <= 100);
 
?>