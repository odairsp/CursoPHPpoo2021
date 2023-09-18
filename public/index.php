<?php

declare(strict_types=1);

// header('Content-type:aplication/json');

require '../vendor/autoload.php';


use app\classes\{Crud, Login};
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
echo "<br>";
echo "<br>";
echo "Constructs xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
echo "<br>";
echo "<br>";
require './constructPaiFilha.php';
echo "<br>";
echo "<br>";
echo "Propriedades e Métodos staticos xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
echo "<br>";
echo "<br>";
require './instanciaMetodosStaticos.php';
