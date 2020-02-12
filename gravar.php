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
	echo "<script language=javascript>alert( 'Cliente Cadastrado com Sucesso!' );</script>";
}else{
	echo "<script language=javascript>alert( 'Erro ao Gravar!' );</script>";
}
mysqli_close($con);
?>

<html>
<head>
<title>window.location</title>
<script type="text/javascript">
	alert("Você será redirecionado");
	window.location="http://localhost/projeto/Projeto-integrador/treineconosco.php";
	window.location= "http://localhost/projeto/Projeto-integrador/contato.php";
</script>
</head>
<body>
</body>
</html>