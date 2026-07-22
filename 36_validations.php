<?php
    // validated data
        // Email validation

    $email = "sophal@gmail.com";
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "valid email\n";
        }else{
            echo "invalid email\n";
        }

        // Integer validation
    $age = 25;
        if(filter_var($age, FILTER_VALIDATE_INT) != false ){
            echo "valid integer...!\n";
        }else{
            echo "invalid integer...!\n";
        }


        // URL validations
    $urls = "https://10.151.232.130";
        if(filter_var($urls, FILTER_VALIDATE_URL)){
            echo "validate URL\n";
        }


        // custom validate with regex
    function validateUsername($username){
        return preg_match("/^[a-zA-Z0-9_]{3,20}$/", $username) === 1;
    }

        // Range validations
    function validateAge($age){
        return filter_var($age, FILTER_VALIDATE_INT, [
            "option" => 
            [
                "min-range"=>0,
                "max-range"=>200,
            ]
        ]) != false;
    }





?>