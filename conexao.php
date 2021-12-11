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
  PRIMARY KEY (`usuario_id`));
  
INSERT INTO `usuario` (`usuario`,`senha`) VALUES ('root',md5('MundoLinux'));
 */