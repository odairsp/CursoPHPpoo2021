<?php

declare(strict_types=1);

// header('Content-type:aplication/json');

require '../vendor/autoload.php';

use app\classes\Crud;
use app\classes\Login;
use app\models\User;

$login = new Login;
$crud = new Crud;
$user = new User;

echo $login->auth("email@email", "senha");
echo "<br>";
echo $crud->read();
echo "<br>";
echo $user->read();
echo "<br>";
echo helper();
echo helper2();
