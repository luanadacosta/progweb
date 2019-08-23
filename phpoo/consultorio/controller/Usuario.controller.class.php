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
    public function loginDeUsuario($email,$senha){
        $sql = ".." 
        $resultado = $this->execute_query($sql);
        $linhas = mysqli_num_rows($resultado);
        if($linhas>0){ 
            return true;
        }else{
            return false;
        }
    }
}
?>