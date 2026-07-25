<?php
        // Multiple inheritences
    // 1 - Using to interface + implement keywords

        // + parent class
    interface canFly{
        public function fly();
    }

    interface canSwim{
        public function swim();
    }

    interface canRun{
        public function run();
    }


    class Duck implements canFly, canSwim, canRun{
        public function fly(){
            echo "Duck is flying...!\n";
        }

        public function swim(){
            echo "Duck is swimming...!\n";
        }

        public function run(){
            echo "Duck is running...!\n";
        }

}

    // usage
        echo "\n===========Result========\n";
    $ducks = new Duck();
    $ducks->fly();
    $ducks->swim();
    $ducks->run();

        echo "\n========================\n";


    // 2 - Using to traits
    trait walkable{
        public function walk(){
            echo "Walking...!\n";
        }
    }

    trait Running{
        public function run(){
            echo "running...!\n";
        }
    }

    trait eating{
        public function eat(){
            echo "eating food...!\n";
        }
    }

        trait sounding{
            public function sound(){
                echo "woow woow...!\n";
            }
        }

    class Elephant{
        // using to keyword 'use' for 
        use walkable, Running, sounding, eating; 
    }   

        // usage
        $elephant = new Elephant();
        $elephant->walk();
        $elephant->run();
        $elephant->sound();
        $elephant->eat();


?>