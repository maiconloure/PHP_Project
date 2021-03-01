<?php

if (isset($_GET['cadastrante'])) {
    $cadastrante = $_GET['cadastrante'];
} else {
    $cadastrante = 'Visitante';
}


require_once "views/main.php";