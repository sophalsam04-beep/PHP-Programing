<?php
    class Bank{
        // acess modifier
        private float $balance;
        private string $accountHolder;

            // constructor
            public function __construct(string $accountHolder, float $initialBalance = 0)
            {
                $this->accountHolder = $accountHolder;
                $this->balance = $initialBalance;
            }


            // safe deposit
        public function deposit(float $amount):void{
            if($amount > 0){
                    $this->balance +=$amount;    
                }else{
                    echo "Insufficient Balance cannot deposit...!\n";
                }
        }


        // withdraw money
        public function withdraw(float $amount): void{
                // checking withdraw
            if($amount > $this->balance){
                echo "Insufficient balance...!\n";
            }elseif($amount <= 0){
                    echo "Withdraw amount must be positive...!\n";
            }else{
                $this->balance -=$amount;
            }
        }

            // controlles get balance
        public function getBalance(): float{
            return $this->balance;
        }

    }

        // usage
    $acc = new Bank("Un virak", 1300);
    $acc->deposit(200);
    $acc->withdraw(1000);

        // display
        echo "Currently Money : ".$acc->getBalance(). "$"."\n";





?>