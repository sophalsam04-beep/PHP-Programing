<?php
        // polymorphism with interfaces and implements
        interface Pay{
                // function store as abstract functions
            public function pay(float $amount): string;
        }


        class CreaditCard implements Pay{
                public function pay(float $amount): string{
                        return "Paid $amount using to credit card...!\n";
                }
        }


        class Paypal implements Pay{
                public function pay(float $amount): string
                {
                    return "Paid $amount using to Paypal...!\n";
                }
        }


        class Biil implements Pay{
                public function pay(float $amount): string
                {
                        return "Paid $amount using to bills...!\n";
                }
        }

        
        // function checkout
        function checkout(Pay $pay, float $amount): void{
            echo $pay->pay($amount); // call parameter to pay for payments
        }


            // usage
        checkout(new CreaditCard(), 200);
        checkout(new Paypal(), 50);
        checkout(new Biil(), 30);






?>