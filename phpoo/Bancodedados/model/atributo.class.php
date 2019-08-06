<?php
class Tipo {

    // ATRIBUTOS
    private $id_atributo;
    private $nome;
    private $grupo;
    private $ativo;

    // MÉTODO CONSTRUTOR
    function __construct($p1,$p2,$p3,$p4) {

        $this->setId_atributo($p1);
        $this->setNome($p2);
        $this->setGrupo($p3);
        $this->setAtivo($p4);

        return $this;
    }

    // MÉTODOS GETTERS E SETTERS
    
    public function getId_atributo(){
        return $this->id_tipo;
    }

    public function setId_atributo($id_atributo){
        $this->id_atributo = $id_atributo;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getGrupo(){
        return $this->grupo;
    }

    public function setGrupo($grupo){
        $this->grupo = $grupo;
    }

    public function getAtivo(){
        return $this->ativo;
    }

    public function setAtivo($ativo){
        $this->ativo = $ativo;
    }
}
?>
