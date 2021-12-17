<?php 
session_start(); 
include("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Mundo Linux</title>

     <!-- Information -->
     <meta content="Jonathan Marcon" name="author">
     <meta content="Index, Follow" name="keywords">
     <meta content="Aprendizado de sistemas Linux" name="description">
     <meta name="mobile-web-app-capable" content="yes">
 
    <!-- Viewport -->
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Icons -->
     <link href="assets\favicon.jpg" rel="icon">
     <link href="assets\favicon.jpg" rel="apple-touch-icon">

     <!-- Css -->
     <link rel="stylesheet" href="css\styles.css">

     <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">



</head>
<body>
        <!-- Menu -->
        <?php
                include("navbar.php")
        ?>
        
        <!-- Cabeçalho -->
        <div class="content">
            <div class="titulo">title</div>
            <div class="info-titulo">
            <p>Publicado: x</p>  <p>Última actualização: x</p>
            </div>

            <p>text</p>

            <img class="content-img" src="assets\img\imagens\X">


                <!-- Comentário -->
            <form action="cadastrar.php" method="POST" class="form login">

            <div class="form__field">
                <textarea type="text" name="mensagem" placeholder="Deixe sua mensagem" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;"></textarea>
            </div>

  <div class="form__field">
    <input type="submit" value="Login">
  </div>

</form>

<p class="text--center"> Já tem uma conta? <a href="login.php"> Fazer Login </a> </p>

</div>
</div>
</div>
        <?php
        $sql = mysql_query("SELECT * FROM comentarios_tb");
        $row = mysql_num_rows($sql);
        if ($row > 0) {
                while ($linha = mysql_fetch_array($sql)) {
                        $comentario = $linha['comentario'];
                        echo $comentario;
                }
        } else {
                echo "Ainda não existe comentários. Seja o primeiro a comentar!";
        }
        ?>

        </div>
        <!-- 
        <?php
                include("copyright.php")
        ?>
        -->
</body>
</html>
