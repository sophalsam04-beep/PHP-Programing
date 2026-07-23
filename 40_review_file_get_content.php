<?php
    // review
    $url = "https://10.151.232.130";
        $create = file_get_contents("https://10.151.232.130", true, filesize(10));

    // create httpheader
        $https = [
            "https"=>[
                "header"=> "applications/json : Bearer TOKEN\r\n", $create
            ]
        ];

        var_dump($https);



?>