<?php
class produto{

    //Atributos
    private $id_produto;
    private $nome;
    private $descricao;
    private $sku;
    private $ean;
    private $valorunitario;
    private $id_categoria;

    //Métodos costrutor
    function __construct($p1,$p2,$p3,$p4,$p5,$p6,$p7){
        
        $this->setId_produto($p1);
        $this->setNome($p2);
        $this->setDescricao($p3);
        $this->setSku($p4);
        $this->setEan($p5);
        $this->setValorunitario($p6);
        $this->setId_Categoria($p7);

        return $this;
    }

    //Métodos getters e settes
    public function getId_produto(){
        return $this->id;
    }

    public function setId_produto($id_produto){
        $this->id_produto = $id_produto;
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
    public function getSku(){
        return $this->sku;
    }

    public function setSku($sku){
        $this->sku = $sku;
    }
    public function getEan(){
        return $this->ean;
    }

    public function setEan($ean){
        $this->ean = $ean;
    }
    public function getValorunitario(){
        return $this->valorunitario;
    }

    public function setValorunitario($valorunitario){
        $this->valorunitario = $valorunitario;
    }
    public function getId_Categoria(){
        return $this->id_categoria;
    }

    public function setId_Categoria($id_categoria){
        $this->id_categoria = $id_categoria;
    }

}