<?php

declare(strict_types=1);

require '../vendor/autoload.php';

// public  - na classe, classes filhas, instancias
// protected - na classe, classes filhas
// private - na classe

class Person
{
    public string $name = 'Odair';
    protected int $age = 45;
    private $address = 'myaddress';


    public function walk()
    {
        return 'walking';
    }
    protected function eat()
    {
        return 'eating';
    }
    private function fly()
    {
        return 'flying';
    }
}