<?php
/*
* 	Descrição do Arquivo
* 	@autor - João Ricardo Gomes dos Reis
* 	@data de criação - 05/08/2019
*/

//Inclui as classes controladoras
require_once("../../controller/paciente.controller.class.php");
//Criando as novas instâncias das classes
$controller = new PacienteController;
//Método de Listagem
$registros 	= $controller->selectWithOrderBy('nome');
?>
<?php
if(mysqli_num_rows($registros)>0){
?>
    <h1>Tabela de Produtos com Ordenação</h1>
    <table border="1">
        <tr>
            <th>Id_paciente</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Celular</th>
            <th>Email</th>
            <th>Convenio</th>
        </tr>
    <?php
	while($reg = mysqli_fetch_array($registros)){
    ?>
        <tr>
            <td><?php echo $reg['id_paciente'];?></td>
            <td><?php echo $reg['Nome'];?></td>
            <td><?php echo substr($reg['Telefone'],0,10);?>...</td>
            <td><?php echo $reg['Celular'];?></td>
            <td><?php echo $reg['Convenio'];?></td>
           
        </tr>
    <?php
    }
    ?>
    </table>
<?php
}else{
    echo "<h1>Nenhum Dado</h1>";
}
?>
<!-- Fim da Listagem -->