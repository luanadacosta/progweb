<?php
//Icluindo as classes controladoras
require_once("../../controller/Paciente.controller.class.php");
//Criando as novas intancias das classes
$controller = new PacienteController;

if(isset($_GET["submit"])){

    //Cadastra o paciente usando o método de cadastro
    $controller->editaPaciente($_GET["p0"],$_GET["p1"],$_GET["p2"],$_GET["p3"],$_GET["p4"],$_GET["p5"]);
    //Redireciono para a listagem 
    header ("Location: listadepaciente.php");

}else{

    //listar os dados do paciente selecionado
    $dadosdopaciente = $controller->carregaPaciente($_GET["paciente"]);
    $regpaciente = mysqli_fetch_array($dadosdopaciente);

?>
<form method="get">
    <input type="hidden" name="p0" value="<?php echo $_GET["paciente"];?>">
    
    <label for="p1">Nome</label>
    <input type="text" name="p1"placeholder="Informe o nome" value="<?php echo $regpaciente["nome"]?>"><br>

    <label for="p2">Telefone</label>
    <input type="text" name="p2"placeholder="Informe o telefone"value="<?php echo $regpaciente["telefone"]?>"><br>

    <label for="p3">E-mail</label>
    <input type="text" name="p3"placeholder="Informe o e-mail"value="<?php echo $regpaciente["email"]?>"><br>

    <label for="p4">Celular</label>
    <input type="text" name="p4"placeholder="Informe o celular"value="<?php echo $regpaciente["celular"]?>"><br>
    
    <label for="p5">Convênio</label>
    <input type="text" name="p5"placeholder="Informe o convênio" value="<?php echo $regpaciente["convenio"]?>"><br>
    <input type="submit" name="submit" value="Salvar">
</form>
<?php
}
?>