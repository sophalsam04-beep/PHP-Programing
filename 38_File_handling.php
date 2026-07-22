<?php
    // File handling
        // fopen -> check for failure
        $file = "https://10.151.232.130";
    $handle = fopen("data.txt", "r");
        if(!$handle){
            die("unable to open a file...!");
        }

        // fread -> read file from the file open
        $content = fread($handle, filesize("data.txt"));

            fclose($handle);
        echo $content;


        // fwrite
        $handle = fopen("data.txt", "w");
            fwrite($handle, "Hello Programing\n");
            fwrite($handle, "Welcome to Learning Mobile Apps");
            fwrite($handle, "Backend connect with Flutter Apps", 5);
            fclose($handle);

        
        // append text to file
            $handle = fopen("data.txt", "a");
            fwrite($handle, "Flutter Apps...!");
            fclose($handle);

        // read it back
    $handle = fopen($file, "r");
        $contents = fread($handle, filesize($file));
    fclose($handle);



?>