<?php

/*
    Gravar os dados no banco
	
	1- resgatar os dados do formulário
	2- montar o SQL para gravar os dados no banco
	3- abrir conexão com o banco de dados
	4- gravar os dados no banco 
*/



// 1 - resgatar os dados do formulário 
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

//2 - montar o sql para gravar os dados no banco
//insert into cliente values
//(null, "adrielle", "adri@hotmail.com",20,"solteira");

$sql = "insert into cliente values(null,'".$nome."','".$telefone."','".$email."','".$mensagem."')";

//3 - abrir conexão com o banco de dados 

//con = mysqli_connect(servidor,usuario,senha,banco);
$con = mysqli_connect("localhost","root","","projeto");

//4- gravar os dados no banco 
//mysqli-query grava numa conexão os dados 
if(mysqli_query($con,$sql)){
    echo "Cliente cadastrado com sucesso!";
}else{
   echo" Erro ao gravar";
}
mysqli_close($con);






?>