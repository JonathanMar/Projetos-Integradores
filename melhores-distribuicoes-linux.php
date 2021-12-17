<?php 
include("conexao.php");
session_start();

$usuario = $_SESSION['usuario'];




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
        
        <!-- Cabeçalho -->
        <div class = "content">
        <div class = "titulo"> Melhor distribuição para começar no linux </div>
        <div class = "info-titulo">
            <p>Publicado: Setembro 8, 2020</p>  <p>Última actualização: Outubro 26, 2021</p>
            </div>

            <div class = "box-img">
            <img class = "content-img" src = "assets\img\imagens\Melhor distribuição para começar no linux.jpg">
            </div>

            <p>Tal pergunta que é frequentemente feita por pessoas que querem iniciarem nesse mundo das distribuições linux, não tem uma resposta muito clara, já que cada pessoa tem suas preferencias e facilidades, mas vamos tentar ser o mais sucintos possíveis e tentar responder essa pergunta.</p>

            <p> Os principais pontos que devem serem levados em conta é as preferencias e facilidades do usuário, assim como foi citado acima, sendo diferencas mais relevantes entre as distros o seu objetivo.</p>

            <p><strong> Compatibilidade com softwares: </strong></p>
            <p> A compatibilidade com os softwares que se usa no dia a dia é uma coisa essencial na escolha da distro, já que alguns programas não são compativeis, assim podendo atrapalhar funções do seu trabalho ou lazer.
            </p>

            <p><strong> Interface gráfica: </strong></p>
            <p> Algumas distribuições tem um foco em servidores, e não tem interface gráfica, assim podendo ser usado somente por meio de linhas de código.</p>

            <p><strong> Comunidade: </strong></p>
            <p> Quando surgirem dívidas ou erros você vai ter que procurar a solução por meio de vídeos na internet ou fóruns, tais coisas que são produzidas pela comunidade que usam a distribuição em questão e já passam por esse problema, então é de extrema importancia se observar a comunidade da distro que você está pensando em instalar.<p>

            <p><strong > ZorinOS </strong></p>
            <div class = "box-img">
            <img class = "content-img" src = "assets\img\imagens\zorionOS.jpg" height = "500px" width = "750px">

            </div>
            <p> Tendo em vista todos os pontos ressaltados, a distro que nos do mundo linux mais recomendamos é a ZorinOS, pois a mesma foi feita com base no conhecido Ubuntu e tem a sua interface gráfica inteiramente feita para atender tanto pessoas que estão acostumadas com o Windows ou MacOS, também tendo diversas versões para atender computadores mais antigos e estudantes. </p>
            
            <!-- Comentário -->
  <div  class  = "comentario">
  <form action = "bd_comentario.php" method = "POST" class = "form login">

                    <div      class = "form__field">
                    <textarea type  = "text" name = "comentario" placeholder = "Deixe sua mensagem" class = "content-input" style = "background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;"></textarea>
                    </div>
        
                    <input type = "hidden" name = "identificacao" value = "Melhor-distribuição-para-começar-no-linux">
                    <!--<input type = "hidden" name = "usuario" value = "<?php echo $usuario; ?>">-->
        
          <div   class = "form__field">
          <input id    = "comentar" type = "submit" value = "Comentar">
          </div>
        
        </form>
        <div class="form__field">
        <p class = "text--center"> Não tem uma conta? <a href = "create_account.php"> Criar conta </a> </p>
        </div>
        
                <div class = "coment">
                <?php
                $sql = "SELECT * FROM comentario WHERE identificacao ='Melhor-distribuição-para-começar-no-linux' ORDER BY comentario_id desc";
                $sql = mysqli_query($conexao, $sql);
                $row = mysqli_num_rows($sql);
                        if ($row > 0) {
                                while ($linha = mysqli_fetch_array($sql)) {
                                        $comentario = $linha['comentario'];
                                        echo '<div class="linha-coment">
                                                <p><strong>' . $usuario . '</strong>' . ' - ' . date('d/m/Y', strtotime($linha['data_comentario'])) .'</p> </p>' . $comentario . '</p></div>';
                                }
                        } else {
                                echo "Ainda não existe comentários. Seja o primeiro a comentar!";
                        }
                        ?> 
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
