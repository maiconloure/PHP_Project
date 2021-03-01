<?php

require "autoload/autoload.php";

use App\Entity\Pessoa;

$user = new Pessoa($_POST['name'], $_POST['cpf'], $_POST['telefone'], $_POST['endereco']);

require_once "views/user.php";