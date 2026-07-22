<?php
    // file get content -> read file as text into a string
              // read on a file name
        $content = file_get_contents('data.txt');
    if($content == false){
        die("fail to read file...!");
    }

    echo $content;


    // read from a html urls
        $html = file_get_contents("https://10.151.232.130");

    // reading with context as httpheader
    $context = stream_context_create([
        "http"=>[
            "Header"=> "Authorization : Bearer TOKEN\r\n"
        ]
        ]);

        // display
    $data = file_get_contents("https://10.151.232.130", false, $context);
    

        // read file as httpHeader
    $tr = stream_context_create([
        "https"=>[
            "Header" => "Authorization Bearer TOKEN\r\n",
        ]
        ]);




?>