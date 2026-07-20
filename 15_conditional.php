<?php
    // Conditional statements

        // 1 - if statement
    $isStudent = true;
        if($isStudent){
            echo "Welcome to PHP Programing...!\n";
        }

        // 2- if-else statement
    $age = 18;
        if($age >= 18){
            echo "you can vote the eligible...!\n";
        }else{
            echo "you can't vote the eligible...!\n";
        }


        // 3 - if-else-if statement

        $score = 92;
    if($score >=90){
        echo "Grade A";
    }elseif ($score >=80){
        echo "Grade B";
    }elseif ($score >=70){
        echo "Grade C";
    }elseif ($score >=60){
        echo "Grade D";
    }elseif ($score >=50){
        echo "Grade E";
    }else{
        echo "Grade F";
    }


        // switch
        $color_favorite = "red";
    switch ($color_favorite) {
        case 'blue':
            echo "I line blue...!";
            break;
            case 'red':
                echo "I like red...!";
                break;
            case 'green':
                echo "I like green...!";
                break;

        default:
            echo "Invalidate error...!";
            break;
    }


?>