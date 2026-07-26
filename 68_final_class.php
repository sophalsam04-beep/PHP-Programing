<?php
        // final class in php
        // declare final class

            // used final class it mean that the class cannot inherited from other class

    final class DatabaseConnection{
        // access modifier
        public $connectionStatus;

        public function __construct()
        {
            $this->connectionStatus = "Connection database succesfully...!\n";
        }

        public function getStatus(){
            return $this->connectionStatus;
        }
    }

    // usage
    // create object for used
        $db = new DatabaseConnection();
            echo $db->getStatus();


    final class API{

            // access modifier
        public $respone;

        // constructor
            public function __construct()
            {
                $this->respone = "API Respone successfully...!\n";
            }

            public function getRequest(){
                return $this->respone;
            }
    }

        // usage
    $api = new API();
    echo $api->getRequest();



    






?>