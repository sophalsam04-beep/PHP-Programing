<?php
    // string functions
        // 1- strlen()
        $text = "PHP Programing";
        echo strlen($text);
        echo "\n";

        // 2 - strtoupper
        echo strtoupper($text);

        // 3 - strtolower
        echo "\n";
        echo strtolower($text);

        // 4 - str-replace
        echo "\n";
        $txt = "Hello PHP";
        echo str_replace("PHP", "Laravel",$txt);

        // Substr
        $tx = "Programing";
        echo substr($tx, 0.7);

        // strpos
        $tp = "Welcome";
        echo strpos($tp , "PHP");

        $h = 3;
        $numbee = "Hello world";
        $isStudent = true;
        echo $h;
        echo "\n";
        echo $numbee;
        echo "\n";
        echo $isStudent;


?>