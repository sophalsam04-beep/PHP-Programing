<?php
    // interface of abstract
        interface Shape{
            public function caculateArea(): float;
            public function caculatePerimeter(): float;
            public function getName(): string;


        }

        // implement interface in class
        
    class Circle implements Shape{
            // access modifier
            private float $radius;
            public function __construct(float $radius)
            {
                $this->radius = $radius;
            }


            public function caculateArea(): float
            {
                return pi() * $this->radius ** 2;
            }

            public function caculatePerimeter(): float
            {
                return 2* $this->radius * pi();
            }

            public function getName(): string
            {
                return "Circle";
            }


    }

    class Rectangle implements Shape{
            private float $width;
            private float $height;

            public function __construct(float $width, float $height)
            {
                $this->width=$width;
                $this->height=$height;
            }


            public function caculateArea(): float
            {
                return $this->width * $this->height;
            }

            public function caculatePerimeter(): float
            {
                    // width + height * 2
                return ($this->width + $this->height) * 2;
            }

            public function getName(): string
            {
                return "Rectangle...!\n";
            }
    }


    function printShapeInfo(Shape $shape): void{
            printf(
                $shape->getName(),
                $shape->caculateArea(),
                $shape->caculatePerimeter(),
            );
    }

        // usage
        $shape = [ new Circle(5), new Rectangle(10,2) ];

        foreach ($shape as $sh) {
            printShapeInfo($sh);
        }








?>
