<?php
/*
* 	Descrição do Arquivo
* 	@autor - Luana Maldonado
* 	@data de criação - 09/08/2019
*/

//Inclui a classe genérica CRUD
require_once("../../functions/crud.class.php");
class MedicoController extends Crud {

    // ATRIBUTOS
    private $tabelafilha = "medico";

    //Método construtor
    public function __construct() {

    //Passa como parâmetro a tabela
    parent::__construct($this->tabelafilha);
    }

    //Pesquisa de médicos por nome
    public function pesquisaDeMedicos($expressao){
        $sql = "SELECT * FROM ".$this->tabelafilha."
                WHERE nome LIKE '".$expressao."%'";
        return $this->execute_query($sql);
    }

    //Quantidade de médicos cadastrados
    public function contaMedicos(){
        $sql = "SELECT COUNT(*) AS total FROM ".$this->tabelafilha."";
        return $this->execute_query($sql);
    }

    public function pesquisaDeMedicos($expressao){
    $sql = "SELECT * FROM ".$this->tabelafilha."
    INNER JOIN medico AS med ON med.id_usuario = usu.id_usuario
    WHERE med.nome LIKE '".$expressao."'a%'";
    return $this->execute_query($sql);
    
}
?>
