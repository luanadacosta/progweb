<?php
class Usuario{

    //Atributos 
    //Caracteristicas da classe representada
    private $email;
    private $nome;  
    private $senha;
    private $sobrenome;
    private $ativo;

    //Métodos
    //Comportamentos (ações) de classe representada
    
    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }
    public function getSenha(){
        return $this->senha;
    }    
    public function setSenha($senha){
        $this->senha = $senha;
    }
    public function getNome(){
        return $this->nome;
    }    
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getSobrenome(){
        return $this->sobrenome;
    }    
    public function setSobrenome($sobrenome){
        $this->sobrenome = $sobrenome;
    }
    public function getAtivo(){
        return $this->ativo;
    }
    public function setAtivo($ativo){
        $this->ativo = $ativo;
    }    
   
    


}
?>