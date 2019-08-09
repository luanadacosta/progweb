<?php
/*
* 	Descrição do Arquivo
* 	@autor - Luana Maldonado
* 	@data de criação - 09/08/2019
*/

//Inclui a classe genérica CRUD
require_once("../../functions/crud.class.php");
class PacienteController extends Crud {

    // ATRIBUTOS
    private $tabelafilha = "paciente";

    //Método construtor
    public function __construct() {
    //Passa como parâmetro a tabela
        parent::__construct($this->tabelafilha);
    }

}
?>
