<?php
require_once("cabecalho.view.php");
?>    
<section id="conteudo">
    <?php
    if(isset($_SESSION["logado"])){
     echo "<p>Olá</p>";
    ?>   
        <?php
            }else{  
            ?>
                <h1>Login</h1>
                    <form method="post">
                    <label for="p1">E-mail</label>
                    <input type="text" name="p1"placeholder="Informe o e-mail"><br>

                    <label for="p2">Senha</label>
                    <input type="password" name="p2"placeholder="Informe a senha"><br><br>
                    <input type="submit" name="submit" value="Logar">
          
            </form>
        <?php
        }
        ?>
    </section>
<?php
require_once("rodape.view.php");
?>