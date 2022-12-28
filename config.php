<?php


define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('BASE', 'cadastro');

//AQUI SERÃO PASSADOS OS PARAMETROS NECESSARIOS PARA A CONEXÃO
$conexão = new MySQLi(HOST, USER, PASSWORD, BASE);
