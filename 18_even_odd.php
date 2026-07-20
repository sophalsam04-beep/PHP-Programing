<?php
    // Check even odd in php
        // modular operator
    function checkEvenOdd($number){ // parameter
        if($number % 2 == 0){
            return "$number is even...!";
        }else{
            return "$number is odd...!";
        }
    }

    // input value
    // displaying
        checkEvenOdd(5);
        checkEvenOdd(2);
        checkEvenOdd(7);
        checkEvenOdd(8);
        checkEvenOdd(-3);


        // checking evenoddwithbitwise
    function checkEvenOddwithBitwise($n){
            if($n & 1){
                return "$n is odd...!";
            }else{
                return "$n is even...!";
            }
    }

?>