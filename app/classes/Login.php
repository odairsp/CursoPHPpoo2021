<?php

namespace app\classes;

class Login
{

    // public $email;
    // public $password;

    public function auth(string $email, string $password): string | int
    {
        return "Logando... {$email}:{$password}.";
    }
}
