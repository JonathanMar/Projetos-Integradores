<?php session_start(); ?>

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
     <link rel = "stylesheet" href = "..\css\styles.css">

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
        <h2  class = "title"> Login  </h2>
        <div class = "grid">

<form action = "bd_login.php" method = "POST" class = "form login" _lpchecked = "1">
  
    <?php
      if(isset($_SESSION['nao_autenticado'])): 
    ?>
                    
    <div class = "is-danger">
      <p>ERRO: Usuário ou senha inválidos.</p>
    </div>
                    
    <?php
      endif;
      unset($_SESSION['nao_autenticado']);
    ?>
  
  

  <div   class = "form__field">
  <label for   = "login__email"><img class = "icon" src  = "..\assets\img\email.png"><span class = "hidden">Email</span></label>
  <input id    = "login__email" type       = "text" name = "usuario" class                    = "form__input" placeholder = "E-mail" required = "" style = "background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
  </div>

  <div   class = "form__field">
  <label for   = "login__password"><img class = "icon" src      = "..\assets\img\password.png"><span class = "hidden">Senha</span></label>
  <input id    = "login__password" type       = "password" name = "senha" class                         = "form__input" placeholder = "Senha" required = "" style = "background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
  </div>

  <div   class = "form__field">
  <input type  = "submit" value = "Login">
  </div>

</form>

<p class = "text--center"> Não tem uma conta? <a href = "create_account.php"> Criar conta </a> </p>

</div>
</div>
</div>

        <!-- Rodapé -->
        <?php
                include("copyright.php")
        ?>
</body>
</html>