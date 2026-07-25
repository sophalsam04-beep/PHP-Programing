<?php
        // reviews
    // class
    class Person{
       public $id;
       public $name;
       public $salary;


    }

    // calling using to object
        $p1 = new Person();
        $p1 -> id = 101;
        $p1 -> name = "Un virak";
        $p1 -> salary = 500;

        $p2 = new Person();
        $p2 ->id = 102;
        $p2 -> name = "Sam sophal";
        $p2 -> salary = 400;

    // display

    echo $p1->id. "-".$p1->$name. "-". $p1->salary. "$ "."\n";
    echo "==========||===============\n";
    echo $p2->id. "-". $p2->name. "-". $p2->salary. "$"."\n";


?>