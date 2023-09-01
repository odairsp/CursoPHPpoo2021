<?php

namespace app\classes;

class Products
{
    public string $name;
    public string $descripton;



    public function info()
    {
        return "{$this->name} - {$this->descripton}";
    }
}
