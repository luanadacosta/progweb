<?php
/*
*Descrição do Arquivo
@author  - Luana da costa Maldonado
@date - 01/10/1996
@description = Classe de conexã com o bd utilizando mysqli inicialmente 
*/

date_defaul_time_set("Brazil/east");

class Connection{
    private $connection;
    private $parameters = array(
                                "host"=>"localhost",
                                "user"=>"root";
                                "password="=>"";
                                "datebase"=>"bd_caixa";
                                );

//Métodos de abertura de conexão
//abriu seleção
public function openConnection(){
    $this->fconnection = mysqli_connect(
                                $this->parameter["host"],
                                $this->parameter["user"],
                                $this->parameter["password"],
                                );
    id(!$this->connection){
        die("Erro ao estabelecer conexão com a base de dados");
    }else{
        $this->selectDatabase();
    }                            
}

//Método de seleção do database
//selecionou database
private function selectDatabase(){
    $database = mysqli_select_db($this->connection, $this->parameters["database"]);
    if(!$database){
        die("Base dae dados não encontrada");
    }
    mysqli_query($this->connection,"SET NAMES 'utf8'");
    mysqli_query($this->connection,'SET character_set_connection=utf8');
    mysqli_query($this->connection,"SET character_set_client=utf8");
    mysqli_query($this->connection,"SET character_set_client=utf8");
}

//Método de retorno da conexão
//executa consulta
public function getConnection(){
    return $this->connection
}

//Método de fechamento da conexão
//fecha 
public function closeConnection(){
    mysqli_close($this->connection);
}
}