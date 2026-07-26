<?php
    require __DIR__ . '/vendor/autoload.php';

        use App\User;
        use App\Service\Mailer;

        // class autoloading
    $user = new User("Un virak","sophalsam04@gmail.com");
    $mailer = new Mailer();


        echo $user-> greet("Welcome to Learning Composer in PHP")."\n";
        $mailer->send($user, "I Love Programing...!\n");


            echo format_currency(1234.5). "\n";





?>