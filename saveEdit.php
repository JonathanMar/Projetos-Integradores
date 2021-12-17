<?php
include("conexao.php");

    if(isset($_POST['update'])) {
        
        $nome    = mysqli_real_escape_string($conexao, trim($_POST['nome']));
        $usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
        $senha   = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
        
        $sqlInsert = "UPDATE usuario SET usuario='$usuario', nome='$nome', senha='$senha' WHERE usuario_id = '$usuario_id'";
        $result = $conexao->query($sqlInsert);
    }
    header('Location: painel.php');

?>