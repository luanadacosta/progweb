<?php
class Tipo {

    // ATRIBUTOS
    private $id_tipo;
    private $nome;
    private $descricao;
    private $ativo;

    // MÉTODO CONSTRUTOR
    function __construct($p1,$p2,$p3,$p4) {

        $this->setId_tipo($p1);
        $this->setNome($p2);
        $this->setDescricao($p3);
        $this->setAtivo($p4);

        return $this;
    }

    // MÉTODOS GETTERS E SETTERS
    
    public function getId_tipo(){
        return $this->id_tipo;
    }

    public function setId_tipo($id_tipo){
        $this->id_tipo = $id_tipo;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getAtivo(){
        return $this->ativo;
    }

    public function setAtivo($ativo){
        $this->ativo = $ativo;
    }
}
?>
