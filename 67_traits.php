<?php
    // Traits in php
        // Trait = create + used
    
            // initialize traits
    trait Logger{
            public function logMessage($message){
                    echo "[Un virak] :". $message . "\n";
            }

    }


    // traits reused to class using to keyword use
    class User{
        // call keyword use -> logger into here
        use Logger;

        public function createAcc(){
                // read account name you want to create
                $this->logMessage("Account Banking create succesfully...!\n");
        }
    }


        // usage
        $usr = new User();
        echo "\n";
        $usr->createAcc(); // output result





?>