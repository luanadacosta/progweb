<?php
//Inclui as classes controladoras
require_once("../../controller/Paciente.controller.class.php");
//Criando as novas instâncias das classes
$controller = new PacienteController;
?>

<?php   
if(isset($_GET["paciente"])){
    $controller->excluiPaciente($_GET["paciente"]);
    echo "<h3>O Paciente de código ".$_GET["paciente"]." foi excluído com sucesso!</h3>";
}
//Método de listagem
$registros = $controller->select();
?>

   <!--Listagem-->
    <a href="cadastrapaciente.php">Cadastrar Novo Paciente</a>
    <br><br>
    <?php
    if(mysqli_num_rows($registros) > 0){
    ?>
     <h1>Listagem da Tabela de Pacientes</h1>
    <table border="3">
        <tr>
            <th>Cod</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Celular</th>
            <th>E-mail</th>
            <th>Convenio</th>
        </tr>
    <?php
	while($reg = mysqli_fetch_array($registros)){
    ?>
        <tr>
            <td><?php echo $reg['id_paciente'];?></td>
            <td><?php echo $reg['nome'];?></td>
            <td><?php echo $reg['telefone'];?></td>
            <td><?php echo $reg['celular'];?></td>
            <td><?php echo $reg['email'];?></td>
            <td><?php echo $reg['convenio'];?></td>
            <td><a href="editapaciente.php?paciente=<?php echo $reg['id_paciente'];?>">Editar</a></td>
            <td><a href="?paciente=<?php echo $reg['id_paciente'];?>">Excluir</a></td>
       
        </tr>
    <?php
    }
    ?>
    </table>
<?php
}else{
    echo "<h1>Sua busca não retornou nenhum resultado</h1>";
}
?>
<!-- Fim da Listagem -->