<?php
    // Constructor chainging
    class Animal{
        protected string $name;
            // use constructor
            public function __construct(string $name) {
                $this->name=$name;
            }

        
    }


    class Mammal extends Animal{
        protected int $leg;

        //constructor
        public function __construct(string $name, int $leg)
        {
            return parent::__construct($name);
            $this->leg=$leg;
        }


        
    }

    class Dog extends Mammal{
        private string $breed;

            // constructor
        public function __construct(string $name, int $leg, string $breed)
        {
            return parent::__construct($name, $leg);
            $this->breed=$breed;
        }

        public function detail(): string{
            return "{$this->name} is a {$this->breed} of {$this->leg}\n";
        }
    }


                // usage
        $dogs = new Dog("Kiki",4,"labrador");
        echo $dogs->detail();





?>