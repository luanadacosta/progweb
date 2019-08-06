<?php
/*
* 	Descrição do Arquivo
* 	@autor - Luana da costa Maldonado
* 	@data de criação - 05/08/2019
*/

//Inclui as classes controladoras
require_once("../../functions/crud.class.php");
class atributocontroller extends Crud {

    //ATRIBUTOS
    private $tabelafilha= "atributo";

    //METODOS
    public function __construct(){
    //PASSA COMO PARAMETRO A TABELA
        parent::__construct($this->tabelafilha);
    }
}
?>