<?php

declare(strict_types=1);

require '../vendor/autoload.php';

class UserPai
{

    public function __construct(public string $name, public int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getUserInfo()
    {
        return $this->name . " " . $this->age;;
    }
}

class User2 extends UserPai
{
    public function __construct(string $name, int $age)
    {
        parent::__construct($name,$age);
    }
}

$user2 = new User2('odair', 44);
echo $user2->getUserInfo();