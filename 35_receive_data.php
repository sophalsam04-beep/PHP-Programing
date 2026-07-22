<?php
    // Receive data as GET / POST in PHP
        // GET DATA
    $value = $_GET(['param1']) ?? null;

    // POST DATA
    $value = $_POST(['name']) ?? null;

    // POST raw Json body
        $json = file_get_contents('php://input');
        $data = json_decode($json, true);
        $name = $data['name'] ?? null;




?>