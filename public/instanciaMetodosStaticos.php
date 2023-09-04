<?php

declare(strict_types=1);

require '../vendor/autoload.php';

class User
{

    public static string $name;

    public static function userInfo()
    {
        self::$name = 'Outro';
        return 'Teste metodo statico ' . __CLASS__;
    }
    public static function teste()
    {
        return self::userInfo() . ' ' . __METHOD__;
    }
}

User::$name = 'Odair';
echo User::userInfo() . ' ' . User::$name;

echo "<br>";
echo "<br>";

// utiliza-se métodos staticos quando o método é muito simples
// quando não se referencia obejetos externos, propriedades ou outros métodos


class UserOutro extends User
{
    public static function userInfo()
    {
        return __CLASS__;
    }
}

// echo User::userInfo();
echo UserOutro::teste();
// echo User::teste();