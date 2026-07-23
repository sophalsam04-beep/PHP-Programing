<?php
    // Upload file in php
        $source = "temp/image.jpg";
        $destination = "upload/image.jpg";

            // checking validate upload file
        if(file_exists($source)){
                copy($source, $destination);
                    echo "Upload file succesfully...!\n";
        }else{
            echo "File not found...!";
        }






?>