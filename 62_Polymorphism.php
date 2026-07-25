<?php
    // Polymorphims Method overriding
    abstract class Shape{  // shape class abstract

        // method function
            abstract public function area(): float;
        public function describe(): string{
                return "This shape is an area...!\n" . $this->area();
        }

    }

        // Circle
    class Circle extends Shape{
            // construct
            public function __construct(private float $radius)  // access modifier -> private
            { }

                // caculate PI
            public function area(): float{
                return pi() * $this->radius ** 2;
            }
    }


        // Rectangle
    class Rectangle extends Shape{
            public function __construct(private float $width, private float $height) { }

            public function area(): float{
                return $this-> width * $this-> height;
            }
    }



        // usage
        $shapes = [new Circle(5), new Rectangle(4,5)];

        // foreach loop
      foreach ($shapes as $shape) {
            echo $shape->describe() . PHP_EOL;
      }


?>