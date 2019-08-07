<?php
/*
* 	Descrição do Arquivo
* 	@autor - Luana da costa Maldonado
* 	@data de criação - 05/08/2019
*/

//Inclui as classes controladoras
require_once("../../controller/receita.controller.class.php");
//CRIANDO NOVAS INSTÂNCIAS
$controller = new receitaController;
 //METODOS
 $registros = $controller->select();
 ?>

  <!--LISTAGEM-->
    <?php
    if(mysqli_num_rows($registros)>0){
    ?>
        <h1>Tabela de Tipos com Ordenação</h1>
        <table border="1">
            <tr>
            <th>Id_consulta</th>
            <th>Datadaconsulta</th>
            <th>Id_medio</th>
            <th>Id_receita</th>
            <th>Id_paciente</th>
            </tr>
        <?php
        while($reg = mysqli_fetch_array($registros)){
        ?>
            <tr>
                <td><?php echo $reg ['id_consulta'];?></td>
                <td><?php echo $reg ['datadaconsulta'];?></td>
                <td><?php echo substr ($reg ['id_medio'],0,10);?>...</td>
                <td><?php echo $reg ['id_receita'];?></td>
                <td><?php echo $reg ['id_paciente'];?></td>
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
            <!--Fim da listagem-->
                