<?php
include("conexao.php");

    if(!empty($_GET['usuario_id'])) {
        $usuario_id = $_GET['usuario_id'];
        $sqlSelect  = "SELECT * FROM usuario WHERE usuario_id=$usuario_id";
        $result     = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result)) {
                $usuario = $user_data['usuario'];
                $nome    = $user_data['nome'];
                $senha   = $user_data['senha'];
            }
        } else {
            header('Location: painel.php');
        }
    }
    else
    {
        header('Location: painel.php');
    }
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
        
        <!-- Conteudo -->
        <div class = "conteudo">
        <h2  class = "title"> Editar Conta  </h2>
        <div class = "grid">

<form action = "saveEdit.php" method = "POST" class = "form login">

  <div   class = "form__field">
  <label for   = "login__email"><img class = "icon" src  = "assets\img\email.png"><span class = "hidden">Email</span></label>
  <input id    = "login__email" type       = "text" name = "usuario" class                    = "form__input" placeholder = "E-mail" value = <?php echo $usuario ?> style = "background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 
18px; background-position: 98% 50%; cursor: auto;">
</div>

  <div   class = "form__field">
  <label for   = "login__name"><img class = "icon" src  = "assets\img\email.png"><span class = "hidden">Nome</span></label>
  <input id    = "login__name" type       = "text" name = "nome" class                       = "form__input" placeholder = "Nome" value = <?php echo $nome ?> style = "background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
  </div>

  <div   class = "form__field">
  <label for   = "login__password"><img class = "icon" src      = "assets\img\password.png"><span class = "hidden">Senha</span></label>
  <input id    = "login__password" type       = "password" name = "senha" class                         = "form__input"  maxlength = "30" minlength = "8" placeholder = "Senha" value = <?php echo $senha ?> style = "background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
  </div>

  <div   class = "form__field">
  <input type  = "hidden" name="usuario_id" value = <?php echo $usuario_id; ?>>
  <input type  = "submit" placeholder = "LOGIN"  name      = "update" id = "update">
  </div>

</form>

<p class = "text--center">  <a href = "painel.php"> Voltar </a> </p>


</div>
</div>
</div>

        <!-- Rodapé -->
        <?php
                include("copyright.php")
        ?>
</body>
</html>