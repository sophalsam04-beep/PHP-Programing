<?php
    // methods overriding
    class Animal{
        public function Sounds(){
            return "Some animal make a sound...!\n";
        }
    }

    class Dog extends Animal{
        public function Sounds()
        {
            return "woof woof...!\n";
        }
    }

    class Cat extends Animal{
            public function Sounds()
            {
                return "Meow Meow...!\n";
            }
    }

    $animals = [new Dog("Lucky","lulu","monkey"), new Cat("Elephant","wiwi","iwtr")];

        echo "\n====| Methods overriding |=========\n";
    foreach ($animals as $animal) {
        echo $animal->Sounds(). "\n";
    }




?>