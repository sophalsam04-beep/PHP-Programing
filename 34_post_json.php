<?php
    // POST AS JSON
    $links = "https://10.151.232.130";
        // jsonEncoded
        $data = json_encode(["name"=>"Sam sophal","email"=>"sophalsam04@gmail.com","role"=>"IT Instructor"]);
    $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $links);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-Type : applications/json",
            "Content-Length" . strlen($data)
        ]);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
        
        echo $result;
        






?>