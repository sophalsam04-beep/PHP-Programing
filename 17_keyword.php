<?php
    // keyword in php

        // break keyword
    $number = [1,2,3,4,5,6];
    foreach ($number as $n) {
        if($n === 4){
            break;
        }
        echo $n . " ";
        
    }

        // break keyword

    $fruit = ["Apple","Banana","Cherry","Mango"];
        foreach ($fruit as $f){
            if($f === "Cherry"){
                    break;
            }
            echo $f . " \n";
            echo "\n";
        }

        // continuous keyword

        $users = ["un virak","kakada","romnang","sith"];
    foreach ($users as $u) {
            if($u === "kakada"){
                    continue;
            }
            echo $u . " \n";
    }

        // return keyword
    function checkAccess($age){
            if($age < 18){
                return "Access Denied...!";
            }
        
        return "Access granted...!";
    }

    echo checkAccess(20);





?>