<?php
    // Multi level in php class D -> class C -> class B -> from class A
    class Animal{
        protected string $name;

        public function __construct(string $name) {
            $this->name=$name;
        }

        public function eat(){
            echo "{$this->name} is eating...!\n";
        }

    }

    class Monkey extends Animal{
            public function walk(): string{
                return "{$this->name} is walking...!\n";
            }
    }

    class Cat extends Monkey{
        public function sleep():string{
                return "{$this->name} is sleeping...!\n";
        }
    }


        // usage display
           $cat = new Cat("Meow");
           echo $cat->walk();
           echo $cat->sleep();



?>