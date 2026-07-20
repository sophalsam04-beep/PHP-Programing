<?php
    // function in php
        // 1- Anatomy function standard for input and return outut
    function greet(string $name): string {
        return "Hello : " . $name;
    }

        // 2 - Parameter - argunments
        function setStatus(string $usr , string $status = "Active"): string{
                // default parameter & default value 
                return "$usr is currently $status\n";
        }

        // display
        echo setStatus("Un virak");
        echo setStatus("Sam sophal", "Dark mode\n");


        // 3- Named argunemts 
                // not used return
        function configureinteface(int $width, int $heigh, bool $debug = false): void{
                echo "$width $heigh, $debug";
        }

        // orderd passing value argunments
    configureinteface(1080, 50,true);
    echo "\n";

       // example2
        // used return
    function authentication(string $username, string $password, int $age=25): string{
            return "$username, $password, $age";
    }

        echo authentication("Un virak","12345",22);

?>