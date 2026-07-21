<?php
    // array function in php demo project Student list

        // 1- create an array
        $students = [
            "sok",
            "dara",
            "bopha",
            "sophal",
            "virak",
        
        ];

        // 2 - displaying all students
    echo "\n====Display all student====\n";
        foreach ($students as $student) {
            echo $student . "\n";
        }


        // array func
    // count
    echo "\n===count===/n";
    $counter = count($students);
    echo $counter . "\n";


    // sort -> small to big
    echo "\n===Sort===\n";
    $sorted = sort($students);
    foreach ($students as $student) {
        echo $student . "\n";
    }


    // rsort -> big to small
    echo "\n===rsort===\n";
    $reverse_sorted = rsort($students);
        foreach ($students as $student) {
            echo $student . "\n";
        }


    // array push
    echo "\n===array push===\n";
    $arr_push = array_push($students, "Viphou Edoc");
        print_r($students);


    
    // array pop
    echo "\n===Array pop===\n";
    $arr_pop = array_pop($students);
        print_r($students);

    
    // array unshift
    echo "\n===Array unshift===\n";
    array_unshift($students,"yyy");
    print_r($students);


    // array shift
    echo "\n===Array shift===\n";
    array_shift($students);
    print_r($students);

    
    // array search 
    echo "\n===in array===\n";
        if(in_array("virak",$students)){
            echo "student found...!\n";
        }else{
            echo "student not found...!\n";
        }


    // array search
    echo "\n===array search===\n";
       echo array_search("dara", $students);


    // array reverse
    echo "\n===Array reverse===\n";
    $reversed = array_reverse($students);
    print_r($reversed);



    // array implode. -> converting array to string
    echo "\n===Array implode===\n";
    $imploded = implode('/ ', $students);
        print_r($imploded);


    // explode -> convert string to array
    echo "\n===Array explode===\n";
    $list = "Apple, Banana, mango";
    explode(' ', $list);
    print_r($list);
        






?>