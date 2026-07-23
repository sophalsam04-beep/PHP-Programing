<?php
    // OOP Concepts
        // class
    class Car{
        // propertie
        public $brand;
        public $color;
        public $year;

    }


    // create object that instance of the class
    $car1 = new Car();
    $car1 -> brand = "Mazda";
    $car1 -> color = "Red";
    $car1 -> year = 2026;


    $car2 = new Car();
    $car2 -> brand = "Toyota";
    $car2 -> color = "Black";
    $car2 -> year = 2025;

    echo $car1->brand."-". $car1->color. "-". $car1->year."\n";
    echo $car2->brand. "-". $car2->color. "-". $car2->year;



?>