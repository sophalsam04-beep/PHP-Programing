<?php
    // variable scope
        // 1- local scope
    function caculate(){
            // local scope
            $number1= 12;
    }
    caculate();


        // 2- Global scope
        function resultTask(){
            global $website;
            echo $website;
        }

        // 3- static scope
        function trackvisit(){
            static $counter = 0;
            $counter++;

            return $counter;
        }

    echo trackvisit();
    echo trackvisit();
    echo trackvisit();


?>