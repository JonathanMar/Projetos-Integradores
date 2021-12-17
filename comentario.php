<?php 
include("conexao.php"); 

$comentario=$_POST['comentario'];

$insert = "INSERT INTO comentarios_tb(comentario) VALUES ('$comentario');

$query = mysql_query($insert);