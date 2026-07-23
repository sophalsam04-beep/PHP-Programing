<?php
    // custom validate in php
    class invalidAgeException extends Exception{
            public function __construct($age)
            {
                return parent::__construct("invalid age Provided $age");
            }
    }


    function setAge($age){
            if($age < 0){
                throw new invalidAgeException($age);
            }
            
        return $age;
    }

    // using to try-catch for handle exceptions
        try{
            setAge(-5);
        }catch(invalidAgeException $e){
            echo "Invalid age exceptions : ".$e->getMessage();
        }


?>