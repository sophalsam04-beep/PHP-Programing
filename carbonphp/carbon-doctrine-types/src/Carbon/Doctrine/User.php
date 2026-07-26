<?php
    namespace App;

    class User{
        // constructor
        public function __construct(public string $name, public string $email)
        {}

        public function greet($name): string{
                return "Hello ! {$this->name} !\n";
        }
    }




?>