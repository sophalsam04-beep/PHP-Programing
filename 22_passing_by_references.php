<?php
    // passing by references
    $counter = 1;
        // Modifying the variable outer passing it
        $increment = function() use (&$counter){  // using to (&) passing by references
                $counter++;
        };

        $increment();
        $increment();
        $increment();
        $increment();
        

        echo $counter;

        
?>