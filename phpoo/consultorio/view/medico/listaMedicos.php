<?php
//Icluindo as classes controladoras
require_once("../../controller/Medico.controller.class.php");

//Criando as novas intancias das classes
$controller = new MedicoController;

//Método de listagem
$registros = $controller->select();
?>

<!--listagem-->
<?php
if(mysqli_num_rows($registros) > 0){
?>
    <h1>Listagem da Tabela de Médicos</h1>
    <table border="1">
        <tr>
            <th>Cod</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Celular</th>
            <th>Email</th>
        </tr>   
    <?php
    while($reg = mysqli_fetch_array($registros)){
    ?>
        <tr>
            <td><?php echo $reg['id_medico'];?></td>
            <td><?php echo $reg['nome'];?></td>
            <td><?php echo $reg['telefone'];?></td>
            <td><?php echo $reg['celular'];?></td>
            <td><?php echo $reg['email'];?></td>
        </tr>
    <?php
    }
    ?>
    </table>
<?php
}else{
    echo "<h1>Sua busca não retornou nenhum resultado<h1>";
}
?>
<!--Fim da Listagem-->

        