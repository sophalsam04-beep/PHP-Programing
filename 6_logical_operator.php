<?php
    // Logical operator
        // High priority
        $result1 = true && false;  // false

        // Low priority
        $result2 = true and false;  // true

        // example
    $islogin = true;
    $isAdmin = false;
    $subscription = true;

        if($islogin && ($isAdmin || $subscription)){
                echo "Access grant to premium from it";
        }else{
                echo "Access denied...!";
        }

    $age = 22;
       if($age >=18 && $age<=30){
            echo "Un virak";
       }


?>