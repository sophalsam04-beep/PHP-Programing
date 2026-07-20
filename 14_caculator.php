<?php
    // building project php
    // checking if run on commind line tools

        if(php_sapi_name() !== "cli"){
                die("This script can only run on from the command line tools.\n");
            
        }

        echo "====PHP Command line=====\n";

        // get the first number
        echo "Enter number 1 :";
        $num1 = trim(fgets(STDIN));

            // validate first input
        if(!is_numeric($num1)){
            die("Error : This is not validate number !\n");
        }

        // get the first operator
        echo "Enter operator (+,-,x,/) : ";
        $operator = trim((fgets(STDIN)));

        echo "Enter second number : ";
        $num2 = trim(fgets(STDIN));

            // validate second input
        if(!is_numeric($num2)){
                die("Error This is not validate number...!\n");
        }

    $result = 0;

        // switch perform the task
    switch ($operator) {
        case '+':
            $result = ($num1 + $num2);
            break;
        case '-':
            $result = ($num1 - $num2);
            break;
        case 'x':
            $result = ($num1 * $num2);
            break;
        case '/':
            if($num2 == 0){
                    die("Error! Devide by zero not allow...!");
            }
        $result = ($num1 / $num2);
        default:
            die("Invalid Operator...! (+,-,*,/)!");
            break;
    }



    // displaying the result
        echo "=====================\n";
        echo "Result : $num1 $operator $num2 = $result\n";
        echo "=====================";









?>