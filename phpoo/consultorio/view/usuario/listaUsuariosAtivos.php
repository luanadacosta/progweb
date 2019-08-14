<?php
/*
* 	Descrição do Arquivo
* 	@autor - João Ricardo Gomes dos Reis
* 	@data de criação - 09/08/2019
*/

//Inclui as classes controladoras
require_once("../../controller/Usuario.controller.class.php");
//Criando as novas instâncias das classes
$controller = new UsuarioController;
//Método de Listagem
$registros 	= $controller->pesquisaUsuariosAtivos();
?>

<!-- Listagem -->
<?php
if(mysqli_num_rows($registros) > 0){
?>
    <h1>Listagem da Tabela de Usuario</h1>
    <table border="1">
        <tr>
            <th>Cod</th>
            <th>Senha</th>
            <th>Status</th>
           
        </tr>
    <?php
	while($reg = mysqli_fetch_array($registros)){
    ?>
        <tr>
            <td><?php echo $reg['id_usuario'];?></td>
            <td><?php echo $reg['senha'];?></td>
            <td><?php echo $reg['status'];?></td>
       
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