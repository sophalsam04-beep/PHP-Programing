<?php
    // array function
        // 1. count array
    $fruits = ["apple","banana","cherry","mango"];
        echo count($fruits);
    echo "\n";
    $name = ["un virak","mom sreykhouch","dara virak","chea reaksmey","kakada"];
        echo count($name);



        // 2 . sort array
    $vetable = ["lettuce","papaya","cocount","carrot"];
        sort($vetable);
        print_r($vetable);


        // 3 . rsort array
    $scores = [85,95,92,50];
    rsort($scores);
        print_r($scores);

        // 4. asort array
    $n = [3,5,3,5,9];
        asort($n);  // associative sort
        print_r($n);
    
        sort($n);
        print_r($n);


        // 5. ksort
        $ri = [
            "c"=>"apple",
            "d"=>"candy",
            "a"=>"dark",
        ];
        
        ksort($ri);
            print_r($ri);

            


?>