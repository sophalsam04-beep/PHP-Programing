<?php

    // parent class
        class Vehicle{
            // propertie
        public string $brand;

            public function __construct(string $brand)
            {
                $this->brand=$brand;
            }

            public function honk(): string{
                return "Beep beep...!\n";
            }

    }
    

        // child class
    class Bicycle extends Vehicle{
            public int $door = 4;

    }
        
        // usage
    $obj = new Bicycle("Khmer DODO");
    $obj->brand;
    $obj->honk();

    echo "{$obj->brand} {$obj->honk()}";

    echo "=========================\n";


?>