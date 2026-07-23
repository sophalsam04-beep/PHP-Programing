<?php
    // Try exceptions handling
        try{
            // code that may Throw exceptions
            $result = 10 / 2;   // Division by zero

        }catch(Exception $e){
            echo "Error : ". $e->getMessage();
        }


        // step2
        try{
            echo "\n===step1===\n";
            throw new Exception("I Love Programing");
            echo "===step2====\n";
        }catch(Exception $e){
                echo "Caught : ". $e->getMessage();
        }

        // Nested try
    try{

        try{
            throw new Exception("\ninner problem!");
        }catch(TypeError $e){
            // code that may be execute
        }
    }catch(Exception $e){
            echo "outer problem : ". $e->getMessage();
    }






?>