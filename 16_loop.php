<?php
    //1- For loop
        for($i = 0;$i<5;$i++){
            echo "I love you...!\n";
        }
    
    // 2- While loop
        $fuel = 100;
        while ($fuel > 0) {
            echo "Driving...!\n";
            $fuel -=20;
        }

        // 3-Do while loop
    $count = 1;
    do {
        echo "Counter number...!\n";
        $count++;
    } while ($count <=5);

        $n = 1;
    do {
        echo "Loving Programing...!\n";
        $n++;
    } while ($n <= 7);


    // Foreach have two type
        // index array foreach
            $fruit = ["Apple","Banana","Cherry","Mango"];
        foreach ($fruit as $fruits) {
            echo "I Love $fruits\n";
        }

        // associative array foreach
            $users = [
                "name"=> "Un virak",
                "age" => 42,
            ];

            foreach ($users as $u) {
                echo "I Love $u\n";
            }




?>