<?php

    // Mailer using to Sending email
    namespace App\Service;

    use App\User;

        class Mailer{
            public function send(User $user, string $message): void{
                    echo "Sending {$user->email} to {$message}\n";
            }
        }











?>