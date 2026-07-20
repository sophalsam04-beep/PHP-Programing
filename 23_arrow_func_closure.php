<?php
    // arrow function in short closure
        $modifier = 2;
        $numbers = [1,2,3,4,5];
    // variable auto capsture
        // initialize new variable
    $sclaed = array_map(fn($n) => $n * $modifier, $numbers);

    print_r($sclaed);

    // arrow func using to closure array callback
    $count = 4;
    $num = [1,2,3,4,5];
        $sc = array_map(fn($t) => $t * $count, $num);

        print_r($sc);

        // arrow func using closure but used integer
            $factor = 2;
        $mutiplier = fn($n)=> $n * $factor;

        echo $mutiplier(5);
?>