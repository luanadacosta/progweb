<?php
/*
* 	Descrição do Arquivo
* 	@autor - Luana Maldonado
* 	@data de criação - 09/08/2019
*/

//Inclui a classe genérica CRUD
require_once("../../functions/crud.class.php");
class UsuarioController extends Crud {

    // ATRIBUTOS
    private $tabelafilha = "usuario";

    //Método construtor
    public function __construct() {
    //Passa como parâmetro a tabela
        parent::__construct($this->tabelafilha);
    }
     //Pesquisa Usuarios Ativos
    public function pesquisaUsuariosAtivos(){
        $sql = "SELECT * FROM ".$this->tabelafilha." 
               WHERE status = 1 ";
        return $this->execute_query($sql);
    }

    public function pesquisaUsuarios($expressao){
        $sql = "SELECT * FROM usuario AS usu
        INNER JOIN medico AS med ON med.id_usuario = usu.id_usuario
        WHERE med.nome LIKE '%".$expressao."%'";
        return $this->execute_query($sql);
    }


}
?>