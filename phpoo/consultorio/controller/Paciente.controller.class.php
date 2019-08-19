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
    
    //Métodos para cadastrar paciente

    public function cadastraPaciente($p1,$p2,$p3,$p4,$p5){
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

    public function editaPaciente($p0,$p1,$p2,$p3,$p4,$p5){
        $sql = "UPDATE " .$this->tabelafilha."
        SET
        
            id_usuario = ".$p1.",
            nome = '".$p2."',               
            telefone = '".$p3."',
            email = '".$p4."',
            celular = '".$p5."'
        
        WHERE
            id_paciente= ".$p0."
        ";    
        return $this->execute_query($sql);
        
    }

    //Métodos para excluir paciente

    public function excluiPaciente($p0){
        $sql = "DELETE FROM ".$this->tabelafilha."
            WHERE id_paciente = ".$p0."";
        return $this->execute_query($sql);
        
    }

    //Método que carrega os dados do paciente

    public function carregaPaciente($paciente){
        $sql = "SELECT * FROM ".$this->tabelafilha."
            WHERE id_paciente = ".$paciente."";
        return $this->execute_query($sql);
        
    }

}
?>
