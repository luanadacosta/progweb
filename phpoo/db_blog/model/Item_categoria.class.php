<?php
class Item_categoria {

    // ATRIBUTOS
    private $id_categoria;
    private $id_post;
   

    // MÉTODO CONSTRUTOR
    function __construct($id_categoria,$id_post)
        
    }
    

    // MÉTODOS GETTERS E SETTERS
    
    public function getId_post(){
        return $this->id_post;
    }

    public function setId_post($id_post){
        $this->id_post = $id_post;
    }

    public function getId_categoria(){
        return $this->id_categoria;
    }

    public function setId_categoria($id_categoria){
        $this->id_categoria = $id_categoria;
    }

?>