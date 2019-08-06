<?php
/*
* 	Descrição do Arquivo
* 	@autor - Luana da costa Maldonado
* 	@data de criação - 05/08/2019
*/

//Inclui as classes controladoras
require_once("../../controller/atributo.controller.class.php");

//CRIANDO NOVAS INSTÂNCIAS
$controller = new atributocontroller;

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
                <th>Cod</th>
                <th>Nome</th>
                <th>Grupo</th>
                <th>Ativo</th>
            </tr>
        <?php
        while($reg = mysqli_fetch_array($registros)){
        ?>
            <tr>
                <td><?php echo $reg ['id_atributo'];?></td>
                <td><?php echo $reg ['nome'];?></td>
                <td><?php echo substr ($reg ['grupo'],0,10);?>...</td>
                <td><?php echo $reg ['ativo'];?></td>
            </tr>
            <?php 
            }
            ?>
            </table>
            <?php
            }else{
                echo "<h1>Sua busca não tretornou nenhum resultado</h1>";
            }
            ?>
            <!--Fim da listagem-->
                