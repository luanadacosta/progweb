<?php
/*
* 	Descrição do Arquivo
* 	@autor - Luana da costa Maldonado
* 	@data de criação - 05/08/2019
*/

//Inclui as classes controladoras
require_once("../../functions/crud.class.php");
class receitaController extends Crud {

    //ATRIBUTOS
    private $tabela= "receita";

    //METODOS
    public function __construct(){
    //PASSA COMO PARAMETRO A TABELA
        parent::__construct($this->tabela);
    }
}
?>