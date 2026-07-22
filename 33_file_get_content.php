<?php
    // file get content with stream context
        // GET REQUEST
    $file = file_get_contents("https://10.151.232.130");

    // POST
      $data = http_build_query(["name"=>"Viphou"]);
    $option = [
        "http"=>[
            "methods"=> "POST",
            "header"=> "Content-Type: application/x-www-form-urlencoded\r\n",
            "content"=> $data,
        ]
    ];

    // call into stream_context_create
        $context = stream_context_create($option);
        $result = file_get_contents("https://10.151.232.130", false, $context);

        echo $result;





?>