<?php
class Categoria {

    // ATRIBUTOS
    private $id_categoria;
    private $nome;
  

    // MÉTODO CONSTRUTOR
    function __construct($id_categoria,$nome)
        
    }
    

    // MÉTODOS GETTERS E SETTERS
    
    public function getId_categoria(){
        return $this->id_categoria;
    }

    public function setId_categoria($id_categoria){
        $this->id_categoria = $id_categoria;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }


?>