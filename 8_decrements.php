  <?php
        // Decrements
    // pre-Decrement
    $x = 2;
    echo --$x;
    echo "\n";
    $age = 23;
    echo --$age;

    echo "\n";
    // post-Decrement
        $b = 10;
        echo $b--;

        echo "\n";
        $y = 3;
        echo $y--;

    $count = 1;
        while($count <=5){
            echo "count increment:". $count ."\n";

            ++$count;
        }

            $countdown = 1;
        while($count <=5){
            echo $countdown . "...";

            $countdown--;
        }

        echo "life out...!";
  
  ?>