<?php
    // Array have 3 type
        // index array
    $list_array = [1,2,3,4,5,6];
        echo $list_array[0]. "\n";
        echo $list_array[1]. "\n";
        echo $list_array[2]. "\n";
        echo $list_array[3]. "\n";
        echo $list_array[4]. "\n";
        echo $list_array[5]. "\n";

        // associative array
        $person = [
            "name"=> "Un virak",
            "age"=> 25,
            "email"=> "dara221@gmail.com",

        ];
            echo $person["name"]. "\n";
            echo $person["age"]. "\n";
            echo $person["email"]. "\n";

        // multidimensional array
            $user = [
                ["name"=> "dara","age"=> 22,"role" => "Mobile Apps developer"],
                ["name"=> "yean daroth", "age"=> 25, "role"=> "Web development"],
                ["name"=> "Leakhana","age"=> 24, "role"=> "IT Officer"],
            ];
        
        echo $user[1]["name"]."\n";
        echo $user[0]["name"]."\n";
        echo $user[2]["role"]."\n";
        echo $user[1]["age"]."\n";

        

?>