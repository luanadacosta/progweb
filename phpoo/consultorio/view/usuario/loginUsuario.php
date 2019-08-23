<?php
if(isset($_POST["submit"])){
    //Inclui as classes controladoras
    require_once("../../controller/Usuario.controller.class.php");
    //Criando as novas instâncias das classes
    $controller = new UsuarioControlller;
    $retorno = $controller->loginDoUsuario($_POST["p1"],$_POST["p2"]);

    echo "Aquii: ". $retorno;

}
?>

<h1>Login</h1>
    <form method="post">
        <label for="p1">Usuario (e-mail)</label>
        <input type="text" name="p1"placeholder="Informe o e-mail"><br>
        <label for="p2">Senha</label>
        <input type="text" name="p2"placeholder="Informe o senha"><br>
        <input type="submit" name="submit" value="Logar"> 
    </form>