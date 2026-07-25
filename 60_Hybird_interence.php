<?php
    // Hybird interences
        // Multiple interence + Hirerachical interences
    
            // Hirerachical
    class Animal{
        public function eat(){
            echo "This animal is eating...!\n";
        }

    }

    class Dog extends Animal{
            public function bark(){
                echo "This dog is woof woof...!\n";
            }
    }

    // Multiple interences
    interface canSwim{
        public function swim();
    }

    interface canFetch{
        public function fetch();
    }


    class Puppy extends Dog implements canSwim, canFetch{   

            public function swim()
            {
                echo "The puppy can swim...!\n";
            }


            #[Override]
            public function fetch()
            {
                echo "The poppy can fetch...!\n";
            }

            public function play(){
                echo "The poppy can play...!\n";
            }
    }


        // usage
        $p = new Puppy("Labobo",10, "female");
        $p->bark();
        $p->eat();
        $p->fetch();
        $p->sleep();
        $p->swim();



?>