<?php
    //1- Anonymouse function
        // assignment with variable
    $greet = function($name){
        return "Hello " . $name;
    };

    echo $greet("Un virak\n");
    echo $greet("Sam sophal");


    // array call back
    $number = [1,2,3,4,5];
    $squared = array_map(function ($n) { // parameter
        return $n * $n;
    }, $number);

        print_r($squared);

        $integer = [1,2,3,4,5];
            $sq = array_map(function ($t) {
                return $t * 2;
            }, $integer);
            
            print_r($sq);


        $convertlowertxt = function(string $txt){
            return strtolower($txt);
        };
    
        echo $convertlowertxt("UN VIRAK");

        $convertuppertxt = function(string $t){
            return strtoupper($t);
        };

        echo $convertuppertxt("Sam sophal");



?>