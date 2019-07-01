<?php

if(isset($_POST["submit"])){

    $nome       =$_POST["nome"];
    $nascimento =$_POST["datadenascimento"];
    $doador     =$_POST["doador"];
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Html com If em PHP</title>
<head>
<body>

<div id="formulario">
    <form action="html_if.php" method="post">
    <label for="nome">Nome</label> 
    <input type="text" name="nome" placeholder ="Informe sua data de nascimento"><br>
    <label type="data" name="doadors" placeholder ="doadors">
    <input type="radio" name="doadorn" placeholder ="doadorn">




<?php
if(isset($_POST["submit"])){
?>
    <div id="resultado">
        <h3>Obrigado por preencher o seu cadastro!</h3>
        <h5>Confirme seus dados abaixo:</h5>
        <p>
            Nome: <?php echo $nome; ?><br>
            Nascimento: <?php echo date("d/m/Y", strtotime($nascimento)); ?><br>
            <?php 
            if($doador=="s"){
                echo "Você é um doador de órgãos!";
        
            }
            ?>
        </p>
    </div>
<?php
}
?>
<!--Restante da estrutura html-->
</body>