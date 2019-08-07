<?php
/*
* 	Descrição do Arquivo
* 	@autor - Luana da costa Maldonado
* 	@data de criação - 05/08/2019
*/

//Inclui as classes controladoras
require_once("../../controller/medico.controller.class.php");
//Parâmetro de filtragem
$paciente = $_GET["paciente"];
//Criando as novas instâncias das classes
$controller = new MedicoController;
//Método de Listagem
$registros 	= $controller->listaMedicoDoPaciente($paciente);
print_r($registros);
?>
<br><br>
<!-- Listagem -->
<?php
if(mysqli_num_rows($registros)>0){
    print_r(mysqli_fetch_array($registros));
    echo "<br><br>";
	while($reg = mysqli_fetch_array($registros)){
        echo $reg['medico']."<br>"; 
	}
}
?>
<!-- Fim da Listagem -->