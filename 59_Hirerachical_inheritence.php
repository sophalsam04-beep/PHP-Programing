<?php
    // Hirerachical in php
        class Animal{
            protected string $name;
                public function __construct(string $name)
                {
                    $this->name=$name;
                }
                public function eat(){
                    echo "{$this->name} is eating...!\n";
                }

                public function sleep(){
                    echo "{$this->name} is sleeping...!\n";
                }

        }


        // child 1
    class Dog extends Animal{
            public function bark(){
                echo "{$this->name} is woof woof...!\n";
            }
    }

    // child 2
    class Cat extends Animal{
            public function meow(){
                echo "{$this->name} is meow meow...!\n";
            }
    }

    class Bird extends Animal{
        public function fly(){
            echo "{$this->name} is flying...!\n";
        }
    }


        // usage
        echo "\n======================\n";
        $dog = new Dog("Lulu","rice","woof woof");
        $dog->eat();
        $dog->bark();

        // cat
        echo "\n======================\n";
        $cat = new Cat("Kanha");
        $cat->meow();
        $cat->eat();
        $cat->sleep();

        //bird
        echo "\n======================\n";
        $bird = new Bird("huly");
        $bird->fly();
        $bird->sleep();
        $bird->eat();



?>