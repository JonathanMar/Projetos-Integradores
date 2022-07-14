<?php
session_start();

if(!$_SESSION['usuario']) {
	header('Location: index.php');
	exit();
} else if ($_SESSION['usuario'] != 'root') {
	header('Location: conteudo.php');
	exit();
}