<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', 'Mnejet15+EenIF');
define('DB', 'login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');



/*
    - Comandos para a criação do banco de dados - 

CREATE DATABASE login;
USE login;

CREATE TABLE `login`.`usuario` (
  `usuario_id` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(200) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  `data_cadastro` DATETIME NOT NULL,
  PRIMARY KEY (`usuario_id`));

INSERT INTO `usuario` (`usuario_id`,`usuario`,`senha`, `nome`, `data_cadastro`) VALUES (1,'root','MundoLinux', 'ADM', '2019-01-11 19:42:12');

select *from usuario
  
 */