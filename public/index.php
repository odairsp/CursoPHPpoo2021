<?php

require '../vendor/autoload.php';

use app\classes\Crud;
use app\classes\Login;
use app\models\User;

$login = new Login;
$crud = new Crud;
$user = new User;

echo $login->logar();
echo "<br>";
echo $crud->read();
echo "<br>";
echo $user->read();
echo "<br>";
echo helper();
