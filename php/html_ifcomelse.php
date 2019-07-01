<?php
//if simples
if(isset($_GET["submit"])){
    //if com else
    if($_GET["idade"]=="mais"){
        header("Location: https://www.uol.com.br/");
    }else{
        header("Location: https://g1.globo.com/");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Html com If e Else em PHP</title>
<head>
<body>
<!--restante da estrutura html-->

<div id="formulario">

    <h1>Você tem mais de 18 anos?</h1>
    <form>
        <input type="radio" name="idade" value="mais">sim
        <input type="radio" name="idade" value="menos">não<br>
        <input type="submit" name="submit" value="Entrar">
    </form>
</div>
<!--restante da estrutura html-->
</body>
</html>