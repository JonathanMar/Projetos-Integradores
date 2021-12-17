<form action = "bd_comentario.php" method = "POST" class = "form login">
                    

                    <div      class = "form__field">
                    <textarea type  = "text" name = "comentario" placeholder = "Deixe sua mensagem" class = "content-input" style = "background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;"></textarea>
                    </div>
        
                    <input type = "hidden" name = "identificacao" value = "defalt.php">
        
          <div   class = "form__field">
          <input id    = "comentar" type = "submit" value = "Comentar">
          </div>
        
        </form>
        
        <p   class = "text--center"> Não está logado? <a href = "login.php"> Login </a> </p>
        <div class = "coment">
               <?php
               $sql = "SELECT * FROM comentario WHERE identificacao ='defalt.php' ORDER BY comentario_id desc";
               $sql = mysqli_query($conexao, $sql);
               $row = mysqli_num_rows($sql);
        
                if ($row > 0) {
                        while ($linha = mysqli_fetch_array($sql)) {
                                $comentario = $linha['comentario'];
                                echo '<br>' . $comentario . ' - ' . date('d/m/Y', strtotime($linha['data_comentario'])) . '</br>';
                        }
                } else {
                        echo "Ainda não existe comentários. Seja o primeiro a comentar!";
                }
                ?> 
        
                </div>