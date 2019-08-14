<div id="formulario">
    <form method="post">
        <label for="nome">Nome do Médico</label>
        <input type="text" name="nome" placeholder="Digite"><br>
        <input type="submit" name="submit" value="Calcular">
    </form>
</div>

<?php
if(isset($_POST["submit"])){
?>

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
$registros 	= $controller->pesquisaUsuarios($_POST["nome"]);
?>





<!-- Listagem -->
<?php
if(mysqli_num_rows($registros) > 0){
?>
    <h1>Listagem da Tabela de Medicos</h1>
    <table border="1">
        <tr>
            <th>Cod</th>
            <th>Nome</th>
            <th>Celular</th>
            <th>Email</th>
            <th>Senha</th>
           
        </tr>
    <?php
	while($reg = mysqli_fetch_array($registros)){
    ?>
        <tr>
            <td><?php echo $reg['id_medico'];?></td>
            <td><?php echo $reg['nome'];?></td>
            <td><?php echo $reg['celular'];?></td>
            <td><?php echo $reg['email'];?></td>
            <td><?php echo $reg['senha'];?></td>
       
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

<?php
}else{
    echo "<h1>Informe o nome pesquisado</h1>";
}
?>
