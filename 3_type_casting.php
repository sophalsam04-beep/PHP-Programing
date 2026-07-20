<?php
    // Type casting in php
        // syntax : (type)$variablename
        // 1 - string to integer

        $num = "123";
        $intNum = (int)$num;

        echo $num;
        echo gettype($intNum);

        
        // 2 - float to integer
          $balance = 33.4;
          $intBalance = (int)$balance;

          echo $balance;
          echo gettype($intBalance);

        
        // 3 - integer to string
        $age = 25;
        $strAge = (string)$age;

        echo $age;
        echo gettype($strAge);

        // 4 - Integer to boolean
        $x = 10;
        $xbool = (bool)$x;
        
        echo $x;
        var_dump($xbool);
        echo gettype($xbool);

         // 5 - String to float
         $firstname = "un virak";
         $floatvalue = (float)$firstname;

         echo $firstname;
         echo $floatvalue;
         var_dump($floatvalue);


        // 6 - Array to object
        $arr = ["id"=> 101, "name" => "Sam sophal", "age" => 22];
        $obj = (object)$arr;

        echo $obj -> id;
        echo $obj -> name;
        echo $obj -> age;

        // Implicit type conversion
    $a = "1.2";
    $b = 3.2;
    echo $a + $b;

    $t = "1.1";
    $g = "4.3";
    echo $t + $g;


?>