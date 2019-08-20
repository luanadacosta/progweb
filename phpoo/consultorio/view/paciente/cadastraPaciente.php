<?php
if(isset($_GET["submit"])){

//Inclui as classes controladoras
require_once("../../controller/Paciente.controller.class.php");

//Criando as novas instancias das classes
$controller = new PacienteController;

//Metodo de listagem
$controller->cadastraPaciente($_GET["p1"],$_GET["p2"],$_GET["p3"],$_GET["p4"],$_GET["p5"]);

//Redireciono para a listagem
header("Location: listadepaciente.php");
}
?>

<form method="get">

    <label for="p1">Nome</label>
    <input type="text" name="p1"placeholder="Informe o nome"><br>

    <label for="p2">Telefone</label>
    <input type="text" name="p2"placeholder="Informe o telefone"><br>

    <label for="p3">E-mail</label>
    <input type="text" name="p3"placeholder="Informe o e-mail"><br>

    <label for="p4">Celular</label>
    <input type="text" name="p4"placeholder="Informe o celular"><br>
    
    
    <label for="p5">Convênio</label>
    <input type="text" name="p5"placeholder="Informe o usuário"><br>
    <input type="submit" name="submit" value="Cadastrar"> 

</form>