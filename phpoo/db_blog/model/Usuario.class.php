<?php
class Usuario {

    // ATRIBUTOS
    private $id_usuario;
    private $nome;
    private $email;
    private $senha;
    private $privilegio;
    private $status;

    // MÉTODO CONSTRUTOR
    function __construct($id_usuario,$nome,$email,$senha,$privilegio,$status)
        
    }
    

    // MÉTODOS GETTERS E SETTERS
    
    public function getId_usuario(){
        return $this->id_usuario;
    }

    public function setId_usuario($id_usuario){
        $this->id_usuario = $id_usuario;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

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

    public function getPrivilegio(){
        return $this->privilegio;
    }

    public function setPrivilegio($privilegio){
        $this->privilegio = $privilegio;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($status){
        $this->status = $status;
    }

?>