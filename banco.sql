    -- entrar no mysql
mysql  -u root

    -- criar banco de dados
create database projeto;

    -- visualizar o banco de dados criado
show databases;

    -- conectar um banco em específico
use projeto;

    -- criar tabela para receber o dados da tela 
create table cliente(
    idcliente int PRIMARY KEY AUTO_INCREMENT,
	nome varchar (30),
	telefone int,
	email varchar (50),
	mensagem varchar (200)
);