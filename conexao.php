<?php
// Reportar todos os erros do PHP
error_reporting(E_ALL);

//Muda a confuguração inicial para reportar os erros;
ini_set('error_reporting', E_ALL);

// Muda a configuracao para exibir todos os erros
ini_set("display_erros", 1);
//Define o padao de caracteres que irao para p banco de dados (acenruacao)
mysqli_set_charset($con, "utf8");

$con = mysqli_connect("localhost","root","","PROJETO-INTEGRADOR");
?>