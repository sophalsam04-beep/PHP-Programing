<?php
    // magic methods
        
    // 1- __construct and __destruct
    class User{
        public $name;
            // create construct -> for create object
            public function __construct($name)
            {
                $this->name= $name;
                echo"\n====================\n";
                echo "Hello! Object for $name is created...!\n";
            }

            // destruct -> for delete object
            public function __destruct()
            {
                echo"\n====================\n";
                echo "remove object for $this->name succesfully!\n";
            }

    }

    $user = new User("Kanha");



            // __get() and __set() for manage data

    class Product{
            // access modifier
                // data member
        private $data = [];

            // set used for put value
        public function __set($name, $value)
        {
            $this->data[$name] = $value;
            echo "data save $name = $value \n";
        }


            // get used for retrive value
        public function __get($name)
        {
            if(array_key_exists($name, $this->data)){
                    return $this->data[$name];
            }
            
            return "have not propertie $name \n";
        }

    }


        // usage
        $prod = new Product();
        $prod->price = 200;  // is setter
            echo $prod->price;




        // __call() and __callstatic()

    class Helper{
            // method simple
                public function __call($name, $arguments)
                {
                    echo "you call method $name with data...!\n" . implode(', ', $arguments) . "\n";
                }

                public static function __callStatic($name, $arguments)
                {
                    echo "you call static $name with data...!" . implode(', ', $arguments). "\n";
                }
            
    }

    // usage
        $obj = new Helper();
        $obj-> __call('data1','data2');  // call 

        // callStatic
        Helper::__callStatic("code afia1","code afia2");
            







?>