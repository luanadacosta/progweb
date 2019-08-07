<?php
/*
* 	Descrição do Arquivo
* 	@autor - João Ricardo Gomes dos Reis
* 	@data de criação - 05/08/2019
*/

//Inclui as classes controladoras
require_once("../../controller/medico.controller.class.php");
//Parâmetro de filtragem
$medico = $_GET["medico"];
//Criando as novas instâncias das classes
$controller = new MedicoController;
//Método de Listagem
$registros 	= $controller->listaPacienteComMedico($medico);
?>

<!-- Listagem -->
<?php
if(mysqli_num_rows($registros)>0){
	while($reg = mysqli_fetch_array($registros)){
        echo $reg['nome']."<br>"; 
	}
}
?>
<!-- Fim da Listagem -->