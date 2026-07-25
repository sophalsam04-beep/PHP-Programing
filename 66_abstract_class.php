<?php
        // abstract class
    // Abstract -> used hiding implemental detail 
        // -> abstract class
        // interface
    abstract class Person{
            // abstract methods
            abstract public function action();

            public function sleep(){
                echo "people is sleeping well...!\n";
            }
            
    }

    class Unvirak extends Person{
            public function action(){
                echo "people is Singing...!\n";
            }
    }



        // usage
        $v = new Unvirak("Singing...!\n");
        $v->action();
        echo "\n=======================\n";
        $v->sleep();







?>