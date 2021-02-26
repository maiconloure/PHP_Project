<?php

$queryString = filter_input(INPUT_SERVER, 'QUERY_STRING');

parse_str($queryString, $parseQueryString);

$cadastrante = $parseQueryString? $parseQueryString['cadastrante'] : 'Usuário'; 

require_once "views/main.php";