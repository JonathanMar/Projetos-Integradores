<?php
session_start();
include("conexao.php");
$usuario_cm = $_SESSION['usuario_cm'];

$comentario = mysqli_real_escape_string($conexao, trim($_POST['comentario']));
$identificacao = mysqli_real_escape_string($conexao, trim($_POST['identificacao']));
$usuario_cm = mysqli_real_escape_string($conexao, trim($_POST['usuario']));


$sql = "INSERT INTO comentario (comentario, identificacao, usuario_cm, data_comentario) VALUES ('$comentario', '$identificacao', '$usuario_cm', NOW())";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: melhores-distribuicoes-linux.php');
exit;
?>