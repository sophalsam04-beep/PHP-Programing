<?php
    // single inheritences
    class Animal{
        protected $name;
            public function __construct($name)
            {   
                $this->name=$name;
            }

            public function __sleep()
            {
                echo "{$this->name} is sleeping...!\n";
            }

            public function __eat(){
                echo "{$this->name} is eating...!\n";
            }


    }


    class Dog extends Animal{
            public function bark(){
                    echo "{$this->name} is barking...!\n";
            }

    }
        $dog = new Dog("ReachNa",5,"fgegre");
        $dog->__eat();
        $dog->__sleep();
        $dog->bark();

        echo "\n================\n";



?>