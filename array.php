<?php
// ইনডেক্সড অ্যারে
$city = array["Dhaka", "Mymenshingh", "Tangil", "Gazipur"];

print_r($city);
echo "<br>";
echo $city[1]; 
echo "<br>";


// // অ্যাসোসিয়েটিভ অ্যারে
    $run = array["Shakib" => 55, "Asif" => 58, "Rakib"=> 45];
    echo $run["Asif"];

//     // মাল্টিডাইমেনশনাল অ্যারে
    $student = array (
        array("Asif", 45),
        array("Asif", 45),
        array("Asif", 45),
    )

    $fruits = array('Apple', 'Mango', 'Orange');

    foreach ($fruits as $key => $fruit) {
        echo $fruit. "<br>";
    }

    



?>
