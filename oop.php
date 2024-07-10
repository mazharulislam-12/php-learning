<?php

    Class MyClass{
        public $x, $y, $z;

        public function mySum(){
            $this -> z = $this -> x + $this -> y;
            return $this -> z;
        } 
    }

    $asib = new MyClass();
    $asib -> x = 100;
    $asib -> y = 410;

    echo $asib -> mySum();

?>