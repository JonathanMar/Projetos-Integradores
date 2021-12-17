<?php
session_start();
include("conexao.php");

//$usuario       = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$comentario    = mysqli_real_escape_string($conexao, trim($_POST['comentario']));
$identificacao = mysqli_real_escape_string($conexao, trim($_POST['identificacao']));


$sql = "INSERT INTO comentario (comentario, identificacao, data_comentario) VALUES ('$comentario', '$identificacao', NOW())";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: melhores-distribuicoes-linux.php');
exit;
?>