<?php
class Postagem {

    // ATRIBUTOS
    private $id_post;
    private $data;
    private $titulo;
    private $conteudo;
    private $video_destaque;
    private $imagem_destaque;
    private $id_usuario;
    private $status;

    // MÉTODO CONSTRUTOR
    function __construct($id_post,$data,$titulo,$conteudo,$video_destaque,$imagem_destaque,$id_usuario,$status)
        
    }
    

    // MÉTODOS GETTERS E SETTERS
    
    public function getId_post(){
        return $this->id_post;
    }

    public function setId_post($id_post){
        $this->id_post = $id_post;
    }

    public function getData(){
        return $this->nome;
    }

    public function setData($data){
        $this->data = $data;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }


    public function getConteudo(){
        return $this->senha;
    }

    public function setConteudo($conteudo){
        $this->conteudo = $conteudo;
    }

    public function getVideo_destaque(){
        return $this->video_destaque;
    }

    public function setVideo_destaque($video_destaque){
        $this->video_destaque = $video_destaque;
    }
    public function getImagem_destaque(){
        return $this->imagem_destaque;
    }

    public function setImagem_destaque($imagem_destaque){
        $this->imagem_destaque = $imagem_destaque;
    }
    public function getId_usuario(){
        return $this->id_usuario;
    }

    public function setId_usuario($id_usuario){
        $this->id_usuario = $id_usuario;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($status){
        $this->status = $status;
    }
?>