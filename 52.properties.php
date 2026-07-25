<?php
    // propertie
    class Car{
        // propertie
            public $brand;
            public $model;
            public $speed;

            // constructor -> when call that object is created
        public function __construct(string $brand, string $model)
        {
            $this->brand = $brand;
            $this->model = $model;

                echo "Car object is created {$brand} and {$model}\n";
        }

            // caculate speed : methods
        public function accelerate(int $amount) : void{
            $this->speed += $amount;

                echo "{$this->brand} is driving to speed {$this->speed}km/h \n";
        }

        // find brake : Methods
        public function brake(int $amount):void{
           $this->speed = max(0, $this->speed - $amount);
              echo "{$this->brand} is slowly down on {$this->speed} km/h\n";
        }

        // display
        public function display() : string {
            return "{$this->brand} {$this->model} current speed {$this->speed}km/h\n";

        }

        // Destructor
    public function __destruct()
    {
       echo "Car object is detroyed...!\n";
    }

        
    }

    // usage
    $myCar = new Car("Toyota", "Tesla");
    $myCar -> accelerate(50);
    $myCar -> accelerate(30);
    $myCar -> brake(20);
        echo $myCar -> display(). "\n";


            //trigger destroy
        unset($myCar);
    echo "End of script\n";





?>