<?php
class categoria {
    //atributos
    private $id_categoria;
    private $nome;

    //metodos contrutor
    function __construct($p1,$p2){

        $this->setId_categoria($p1);
        $this->setNome($p2);

        return $this;
    }

    //metodos getters e setters

    public function getId_Categoria(){
        return $this->id_categoria;
    }
    
    public function setId_Categoria($id_categoria){
        $this->id_categoria = $id_categoria;
    }
    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }  
}
?>