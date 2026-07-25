<?php
    // methods overloading in php -> __call()
        class MathOperation{
                // using to __call
                public function __call($name, $arguments)
                {
                    if($name === 'caculate'){
                        $count = count($arguments);
                    
                        if($count === 2){
                            return $arguments[0] + $arguments[1];  // add 1
                        }elseif($count === 3){
                            return $arguments[0]+$arguments[1]+$arguments[2]; // add 3
                        }else{
                            return array_sum($arguments);  // add all

                        }
                    }

                    throw new BadMethodCallException("Method $name doesn't exist...!\n");
                }
        }

        $math = new MathOperation();


                // usage
            echo $math->caculate(5,10) . "\n";
            echo $math->caculate(5,10,20). "\n";
            echo $math->caculate(1,2,3,4,5)."\n";









?>