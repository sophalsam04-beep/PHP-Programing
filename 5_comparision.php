<?php
    // Comparision
        $number_a = 20;   // integer
        $number_b = "20";  // string

    // Loose comparision : converting string to integer
    if($number_a == $number_b){
        echo "This is true...!";
    }

    // strict comparision : check value both value AND the type
        if($number_a === $number_b){
            echo "Cannot print the result...!";
        }else{
            echo "This is false because type don't match...!";
        }


        // checking type of casting
        var_dump($number_a);
        var_dump($number_b);

        echo gettype($number_a);
        echo gettype($number_b);
        echo "\n";

        // Spacesship operator
            // return 0;
        echo 5 <=>5;
        echo "\n";
            // return 1;
        echo 10 <=> 5;
        echo "\n";
            // return 1;
        echo 5 <=> 6;

        var_dump($number_a == $number_b);
        echo "\n";
        var_dump($number_a === $number_b);


?>