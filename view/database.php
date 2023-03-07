<?php

//DECLARANDO UMA CONSTANTE PARA O ACESSO DEO BANCO DE DADOS

define("SERVER_LOCAL","localhost");
define("SERVER_USER","root");
define("SERVER_PASSWORD","11171100952");
define("DATABASE_NAME","db_restaurante_tessin");


$conexao = mysqli_connect(SERVER_LOCAL,SERVER_USER,SERVER_PASSWORD,DATABASE_NAME);



/*


define("SERVER_LOCAL","localhost");
define("SERVER_USER","root");
define("SERVER_PASSWORD","");
define("DATABASE_NAME","si_ads_2period");

$conexao = mysqli_connect(SERVER_LOCAL,SERVER_USER,SERVER_PASSWORD,DATABASE_NAME);

*/





?>
