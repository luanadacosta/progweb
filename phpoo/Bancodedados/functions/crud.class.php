<?php
/*
*Descrição do Arquivo
@author  - Luana da costa Maldonado
@date - 01/10/1996
@description = Classe de conexã com o bd utilizando mysqli inicialmente 
*/

//Importar as classes
require_once("../../functions/connection.class.php");

abstract class crud {

    //Atributos
    private $tabela;

    //Contrutor
    public function __costruct($tabela){
        $this->tabela = $tabela

    //Métodos  de seleção das tabelas 
    public function select(){
        $sql = "select * from".$this->tabela.";";
    }
    
//Métodos de execução das consultas
public function execute_query($sql){
    $conn = new Connection;
    $conn->openConnection();
    $executed = mysqli_query(
                $conn->getConnection(),
                $sql)
                or die("Erro: ". mysqli_error($conn->getConnection())."na query". $sql);
    $conn->closeConnection();
    return $executed;                
}
}
?>