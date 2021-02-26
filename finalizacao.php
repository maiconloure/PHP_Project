<?php

require "autoload/autoload.php";

use App\Entity\Pessoa;

$user = new Pessoa($_POST['name'], $_POST['cpf'], $_POST['telefone'], $_POST['endereco']);

$userData = $user->getUserData(); // Aplicando encapsulamento, acessando propriedades privadas;

require_once "views/user.php";