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

    public function PesquisaDeMedico($expressao){
        $sql = "SELECT * FROM ".$this->tabelafilha."
        INNER JOIN medico AS med ON med.id_usuario = usu.id_usuario
        WHERE med.nome LIKE '".$expressao."'a%'";
        return $this->execute_query($sql);
    }
    
    //Métodos para cadastrar médico

    public function cadastraMedico($p1,$p2,$p3,$p4,$p5){
        $sql = "INSERT INTO " .$this->tabelafilha."
                (
                    id_usuario,
                    nome,
                    telefone,
                    email,
                    celular
                )
                VALUES
                (
                    ".$p1.", 
                    '".$p2."', 
                    '".$p3."', 
                    '".$p4."', 
                    '".$p5."' 
                 
                )
                ";
        return $this->execute_query($sql);  
    }

    //Métodos para editar medicos

    public function editaMedico($p0,$p1,$p2,$p3,$p4,$p5){
        $sql = "UPDATE" .$this->tabelafilha."
                SET
                (
                    id_usuario = ".$p1.",
                    nome = '".$p2."',               
                    telefone = '".$p3."',
                    email = '".$p4."',
                    celular = '".$p5."'
                )
                WHERE
                    id_medico = ".$p0."
                ";    
        return $this->execute_query($sql);
    } 

    //Métodos para excluir medicos
    
    public function excluiMedico($p0){
        $sql = "DELETE FROM ".$this->tabelafilha."
            WHERE id_medico = ".$p0."";
        return $this->execute_query($sql);
    }

    //Método que carrega os dados do médico
    public function carregaMedico($medico){
        $sql = "SELECT * FROM ".$this->tabelafilha."
            WHERE id_medico = ".$medico."";
        return $this->execute_query($sql);
    }
}
?>
