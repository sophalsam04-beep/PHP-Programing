<?php
    // HTTP Methods
        // GET Request -> read all data 
    $url = "https://example.com/api?param1=value1&param2=value2";
        $ch = curl_init();
        // part1
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, $url);

        // part2
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $respone = curl_exec($ch);
        

        // espisode2
         $urls = "https://example.com/api?param1=value1&param2=value2";
         
            // initialize
        $chs = curl_init();
            curl_setopt($chs, CURLOPT_RETURNTRANSFER, $urls);
            curl_setopt($chs, CURLOPT_RETURNTRANSFER, true);

            $results = curl_exec($chs);
        echo $results;

    echo $respone;


        // POST Methods -> create data
    $links = "https://example.com/api/submit";
    $data = [
        "name"=> "Un virak",
        "age"=> 44,
        "address"=> "IT Programing",
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $links);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // respone
        $respones = curl_exec($ch);

        echo $respone;


    $https = "https://example.com/api/submit";
    $sh = curl_init();

    $elements = [
        "id"=>101,
        "name"=>"Sam sophal",
        "role"=> "IT Instructor",
    ];

        curl_setopt($sh, CURLOPT_URL, $https);
        curl_setopt($sh, CURLOPT_POST, true);
        curl_setopt($sh, CURLOPT_POSTFIELDS, http_build_query($elements));
        curl_setopt($sh, CURLOPT_RETURNTRANSFER, true);

        $executed = curl_exec($sh);
        
        echo $executed;








?>