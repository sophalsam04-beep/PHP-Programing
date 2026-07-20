<?php
    // closure in php
    $message = "Helllo";
        // injection parent scope from the parent variable
        $greet =function($name) use ($message){
            return "$message , $name";
        };

            // changing the new parent message
        $message = "Good bye";
            echo $greet("Un virak\n");

    $sms = "Welcome";
        // injection the parent message
    $text = function($name) use($sms){
        return "$sms : $name";  
    };

        echo $text("Un virak");





?>