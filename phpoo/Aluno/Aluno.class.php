<?php

 class Aluno {

     //Atributos
    //Caractteristicas da classe representada
    private $nome;
    private $sobrenome;
    private $email;
    private $telefone;
    private $datadenascimento;
    private $cidade;
    private $estado;

    //Construtor
    function __construct($p1,$p2,$p3,$p4,$p5,$p6,$p7){
        echo "Dados do Aluno<br>";

        $this->setNome($p1);
        $this->setSobrenome($p2);
        $this->setEmail($p3);
        $this->setTelefone($p4);
        $this->setDataDenascimento($p5);
        $this->setCidade($p6);
        $this->setEstado($p7);

        //exibindo dados do Aluno
        echo "Nome: ".$this->getNome(). "<br>";
        echo "Sobrenome: ".$this->getSobrenome(). "<br>";
        echo "Email: ".$this->getEmail(). "<br>";
        echo "Telefone: ".$this->getTelefone(). "<br>";
        echo "Data de Nascimento: ".$this->getDataDeNascimento(). "<br>";
        echo "Cidade: ".$this->getCidade(). "<br>";
        echo "Estado: ".$this->getEstado(). "<br>";
    }

    //Getters
    public function getNome(){
        return $this->nome;
    }      
    public function getSobrenome(){
        return $this->sobrenome;
    }    
    public function getEmail(){
        return $this->email;
    }
    public function getTelefone(){
        return  $this->telefone;
    }   
    public function getDataDeNascimento(){
        return $this->datadenascimento;
    }
    public function getCidade(){
        return $this->cidade;
    }    
    public function getEstado(){
        return  $this->estado;
    }   

    //Setters
    public function setNome($nome){
        $this->nome=$nome;
    }
    public function setSobrenome($sobrenome){
        $this->sobrenome=$sobrenome;
    }
    public function setEmail($email){
       $this->email=$email;
    }
    public function setTelefone($telefone){
        $this->telefone=$telefone;
    }  
    public function setDataDenascimento($datadenascimento){
       $this->datadenascimento=$datadenascimento;
    } 
    public function setCidade($cidade){
        $this->cidade=$cidade;
    }
    public function setEstado($estado){
        $this->estado=$estado;
    }  

    public function aniversario(){

        $data = $_GET["nascimento"];
        list($ano,$mes,$dia) = explode('-',$data);
        
        $hoje =mktime(0, 0, 0, date('m'), date('d'), date('Y'));
        
        $nascimento= mktime(0, 0, 0, $mes, $dia, $ano);
        
        $idade= floor((((($hoje - $nascimento) /60) /60) /24) /365.25);
        
        if(date('m')==$mes and date('d')==$dia){
            $niver="Parabéns, hoje é seu aniversário";
    }
}
?>