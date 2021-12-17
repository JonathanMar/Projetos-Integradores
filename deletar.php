<?php 
include("conexao.php");

    if(!empty($_GET['usuario_id']))
    {

        $usuario_id = $_GET['usuario_id'];

        $sqlSelect = "SELECT *FROM usuario WHERE usuario_id=$usuario_id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete    = "DELETE FROM usuario WHERE usuario_id=$usuario_id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: painel.php');
   
?>