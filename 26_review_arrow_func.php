<?php
    $arr = [1,2,3,4,5];
        // arrow function 
            // fn(element_list)=> expression

    // anonymous function
        $double = function($n){
            return $n*2;
        };

        // arrow function
    $double = fn($n)=> $n*2;

    echo $double(5);   // output : 10

    echo "\n";
    $numbers = fn($a)=> $a * 4;
    echo $numbers(3);

    echo "\n";

        $tax = 0.50;

    $priceTax = function($price) use ($tax){
        return $price + ($price * $tax);
    };

        // arrow function
    $priceTax = fn($price)=> $price + ($price * $tax);

    echo $priceTax(40);
    echo "\n";
    echo $priceTax(100);



;

?>