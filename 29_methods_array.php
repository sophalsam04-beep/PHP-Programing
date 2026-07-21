<?php
    // methods array in php
        // 1- array_merge
    $array1 = ["color"=> "green", 2 ,4];
    $array2 = ["color"=>"red", "shape"=> "rectangle"];

        $result = array_merge($array1, $array2);
    print_r($result);




        // 2- array push
    $fruit = ["orange","mango"];
        array_push($fruit, "Apple","banana","cherry","lettuce");
        print_r($fruit);



        // 3- array pop
    $name = ["un virak","chheng neang","kongkea"];
        $last_name = array_pop($name);
            echo $last_name;
        print_r($name);
            



        // 4- array shift
        $user=["bopha","roth","keo","chheng"];
            $first_elements = array_shift($user);
            echo $first_elements;

        print_r($user);




        // 5 - array unshift
        $a = [3,7];
            array_unshift($a, 5,10);
        print_r($a);

        // espisode 2
            $g= ["dara","mony"];
        array_unshift($g, "pheak","roth","phal");
            print_r($g);




        // 6- array fliter
        $tr = [4,5,1,2,3];
        $even_number = array_filter($tr, function ($b) {
                return $b % 2 ===0;
        });

        print_r($even_number);




        // 7 - array map
    $u = [1,4,3,2,5,6];
        $answer = array_map(function ($a) {
            return $a * $a;
        }, $u);

        print_r($answer);

        // espisode 2
        $na = ["dara","mony","pheak","vy"];
            $format = array_map(fn($na) => ucfirst($na), $na);

            print_r($format);




        // 8 - array reduces
            //espisode 1

        $a1 = [10,20,30,40];
            $num_reduce = array_reduce($a1, function ($a, $b) {
                    return $a+ $b;
            }, 0);

            echo $num_reduce;  // result output : 100



        // espisode 2
            // multidimensional array
    $matrix = [[1,2],[3,4],[5,6]];
        $flat = array_reduce($matrix, function ($x, $y) {
                return $x + $y;
        }, []);
        
        var_dump($flat);


            // 9 - in array
        $animal = ["dog","cat","rooster","woorm","panda"];
    if(in_array('dog', $animal)){
            echo "Found it...!";
    }

                echo "\n";
            // case sensitive
        $fa = ["HR","Manager","Senior","Junior"];
            var_dump(in_array('HR', $fa));


            $ids = [1,2,4,3,6];
        var_dump(in_array('1', $ids));
        var_dump(in_array('3', $ids));



        // 10-explode array
        $pizza = "piece1,piece2,piece3,piece4";
        $pieces = explode(',', $pizza);
        
            print_r($pieces);

            // espisode2
        $txt = "I Love programing...!";
    $al = explode(" ", $txt);
        print_r($al);


        $email = "sam@gmail.com";
    $search = explode("gmail", $email);

    echo $search[0];
    echo "\n";
    echo $search[1];

    $date = "21-07-2026";
        echo "\n";
        $gets = explode("-", $date);
            echo "Day : " . $gets[0];
            echo "\n";
            echo "Month " . $gets[1];
            echo "\n";
            echo "Year : ". $gets[2];

    $php = "PHP-Laravel-MongoDB-Database";
        $ral = explode('-', $php,2);

    print_r($ral);

    

        // 11- implode
    $character = ["A","B","C","D"];
        $Result = implode(', ', $character);
    
        echo $Result;

        echo "\n";

    $letters = ["P","H","I","A"];
           echo implode(" ", $letters);
        

        

?>