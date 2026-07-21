<?php
    // HTTP Methods
        // GET and POST
    
        $name = $_GET['name'] ?? "unknown";
    $age = $_GET['age'] ?? 0;

    // display
    echo "Name : ". $name . "\n";
    echo "Age : ". $age . "\n";

    $role = $_GET["role"] ?? "Mobile Apps development";
    $salary = $_GET["salary"] ?? 400;

    echo $salary . "". "$\n" ;
    echo $role . "\n";


    // POST Methods
    $fruit = $_POST["fruit"] ?? "Banana";
    $address = $_POST["address"] ?? "pp";
    
    echo $address. "\n";
    echo $fruit. "\n";
    
  





?>