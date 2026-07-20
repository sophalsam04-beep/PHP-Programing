<?php
    // Array have 3 type
        // - Index array
        // - Associatve array
        // - Multidimensional array
    $name = ["Vutha","Un virak","Borey","Nouen","kakada"];
    echo $name[0];
    echo "\n";
    echo $name[1];
    echo "\n";
    echo $name[2];
    echo "\n";
    echo $name[3];
    echo "\n";
    echo $name[4];

    //2 - Associative array
        // (key => value)
    $banker = ["name" => "Kakada", "age" => 25, "price"=>500];
    foreach ($banker as $key => $value) {
            echo "$key : $value";
    }


    // 3- Multidimensional array
    $data = [
        ["name"=> "API", "qty"=> 5, "token"=>7],
        ["name"=> "Mongo DB", "qty"=> 10,"token"=> 9],
    ];


    echo "\n";
    // heredoc
    $txt = <<<EOD
        Hello my name is Sam sophal,I'm 22 year old I like programing... 
    EOD; 

    echo $txt;

    



?>
