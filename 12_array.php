<?php
    // Array in PHP
        // 1-Index array (integer array)
    $color = ['red','green','blue','yellow'];
    echo $color[2];
    echo "\n";
    echo $color[1];
    echo "\n";
    echo $color[0];
    echo "\n";
    echo $color[3];

       // 2-Associative array (key => value)
       $user = [
            "username" => "Un virak",
            "age" => 22,
            "address" => "Phnom Penh",

       ];

       // 3-Mutidimensional array
       $fruit = [
        ["name" => "apple", "price" => 500],
        ["name" => "banana", "price" => 300],

       ];

        // display associative
    foreach ($fruit as $key => $value) {
        echo "$key : $value\n";
    }

    foreach ($user as $key => $value) {
        echo "$key : $value\n";
    }






?>