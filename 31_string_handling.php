<?php
    // string manipulations in php
        // 1-strlen
        $txt = "I Love Programing...!";
    $len = strlen($txt);
        echo $len;

        // 2- substr
    echo substr("Welcome to programing\n", 0.5);

        // 3- strpos
        $text = "Hello world";
    if(strpos($text, "world") !== false){
        echo "found it...!\n";
    }else{
        echo "not found...!\n";
    }

    
        // 4 - str_replace
    $texts = "I Love Programing";
        $result = str_replace("Programing","Laravel","Mongo DB", $texts);
        echo $result;

        // espisode2
    $searchvalue = ["apple","banana\t"];
    $replacevalue = ["mongo db","java\t"];
    $phasevalue = "Welcome to learning java\t";

    $re_p = str_replace($searchvalue, $replacevalue, $phasevalue);
    echo $re_p;
    
    echo "\n";
    echo strtolower($txt);

    echo "\n";
    echo strtoupper($txt);


        // trim
    $tr = "    Java    ";
    $trimed = trim($tr);

    echo "\n";
    var_dump($trimed);


?>