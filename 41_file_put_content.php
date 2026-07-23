<?php
    // file put content

        // basic write to a file write by default and create file
    $data = "Welcome to Loving Programing...!\n";
    $files = "data.txt";


    // call into result
    $result = file_put_contents($files, $data);

        // checking result
        if($result != false){
            echo "Write $result bytes to $files\n";
        }else{
            echo "Fail to write file...!";
        }

        // Append instead of overwrite
        file_put_contents($files, "Aditional Line! I Love Programing...!\n", FILE_APPEND);


           // Lock file for write
        file_put_contents($files, $data, LOCK_EX);


    $content = "Hello I Love Programing...!";
        file_put_contents("message.txt", $content);

            echo "Succesfully file created...!";


        $news = "\nTry to Learning Programing Every You will clelver...!";
            file_put_contents("message.txt", $news, FILE_APPEND);

        echo "\nData append...!";

        $value = "\nRepeat code everyday spend time only 2h for lerning \n";

           $results = file_get_contents("message.txt");
        if($results !=false){
            echo "write $value adding to succesfully...!";
        }else{
            echo "invalidate adding...!";
        }





?>