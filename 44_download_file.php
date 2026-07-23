<?php
    // download file in php
    $file = "upload/image.jpg";

        // checking result
    if(file_exists($file)){
            // 3 type of header
        header("Content-Type : applications/octet-stream");
        header("Content-Disposition : attachment; filename=".basename($file));
        header("Content-Length : ".filesize($file));
        
        readfile($file);    // file is read


    }else{
            echo "file not found...!";
    }


    $folder = "upload/image.jpg";
        if(file_exists($folder)){
                header("Content-Type : applications/octet-stream");
                header("Content-Disposition : attractment, filename=".basename($folder));
                header("Content-Length : ".filesize($folder));

                readfile($folder);

                echo "download file succesfully...!";
        }else{
                echo "file not found...!";
        }



?>