<?php 
include("conexao.php");
$consulta = "SELECT * FROM usuario";
$con      = $conexao->query($consulta) or die($mysqli->error);

?>
<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <meta charset = "UTF-8">
    <title>Mundo Linux</title>

     <!-- Information -->
     <meta content = "Jonathan Marcon" name               = "author">
     <meta content = "Index, Follow" name                 = "keywords">
     <meta content = "Aprendizado de sistemas Linux" name = "description">
     <meta name    = "mobile-web-app-capable" content     = "yes">
 
    <!-- Viewport -->
    <meta content    = "width=device-width, initial-scale=1.0" name = "viewport">
    <meta http-equiv = "X-UA-Compatible" content                    = "IE=edge">
    <meta name       = "viewport" content                           = "width=device-width, initial-scale=1.0">

     <!-- Icons -->
     <link href = "assets\favicon.jpg" rel = "icon">
     <link href = "assets\favicon.jpg" rel = "apple-touch-icon">

     <!-- Css -->
     <link rel = "stylesheet" href = "css\styles.css">

     <!-- Fonts -->
     <link rel  = "preconnect" href                                                                    = "https://fonts.googleapis.com">
     <link rel  = "preconnect" href                                                                    = "https://fonts.gstatic.com" crossorigin>
     <link href = "https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel = "stylesheet">



</head>
<body>
        <!-- Menu -->
        <?php
                include("navbar.php")
        ?>
        

    <!-- Conteúdo -->
<div class = "painel">
    <?php include('verifica_login.php'); ?>

    <h2>Olá, <?php echo $_SESSION['usuario']; ?></h2>
    <h2><a href = "logout.php">Sair</a></h2>
    
    <div class = "conteudo-painel">
    <div class = "registro">
        <h1> Usuários Cadastrados </h1>

        <table>
            <tr class = "titulos-tabela">
                <td>ID</td>
                <td>Usuário</td>
                <td>Nome</td>
                <td>Senha</td>
                <td>Data</td>
                <td>Editar</td>
                <td>Deletar</td>
            </tr>

            <?php while($dado = $con->fetch_array()) { ?> 
                <tr> 
                <td><?php echo $dado['usuario_id']; ?></td>
                <td><?php echo $dado['usuario']; ?></td> 
                <td><?php echo $dado['nome']; ?></td> 
                <td><?php echo $dado['senha']; ?></td> 
                <td><?php echo date('d/m/Y', strtotime($dado['data_cadastro'])); ?></td> 
                <td>
                        <a class = 'botao botao-editar' href = 'editar.php' title = 'Editar'>

                            <svg  xmlns = 'http://www.w3.org/2000/svg' width = '16' height = '16' fill = 'currentColor' viewBox = '0 0 16 16'>
                            <path d     = 'M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg>
                            </a> 
                            </td> 
                            
                            <td> 
                            
                            <a class = 'botao botao-deletar' href = '$dado[usuario_id]' title = 'Deletar' onclick = "return confirm('Tem certeza que deseja excluir?')">

                                <svg  xmlns = 'http://www.w3.org/2000/svg' width = '16' height = '16' fill = 'currentColor' viewBox = '0 0 16 16'>
                                <path d     = 'M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                </svg>
                            </a>
                            </td>
                
                        
                </td> 
                </tr> 
                
            <?php } ?> 

            </table>

        </div>
    </div>
</div>
        <!-- 
        <?php
                include("copyright.php")
        ?>
        -->
</body>
</html>
