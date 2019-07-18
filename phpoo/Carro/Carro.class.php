<?php
abstract class Carro{
    //Atributos
    //Caractteristicas da classe representada
    private $marca;
    private $anodefabricacao;
    private $modelo;
    private $cor;
    private $ligado;
    private $velocidade;
    private $velocidademaxima;
    //Métodos
    //Comportamentos (ações) da classe representada
    //Aqui pucha a parte de cima (atributos)
    function __construct($p1,$p2,$p3,$p4,$p5,$p6,$p7){
        echo "Criando o Carro<br>";
       
        //Criando nosso carro
        $this->setMarca($p1);
        $this->setAnoDeFabricacao($p2);
        $this->setModelo($p3);
        $this->setCor($p4);
        $this->setLigado($p5);
        $this->setVelocidade($p6);
        $this->setVelocidadeMaxima($p7);
        //exibindo o estado inicial do carro
        echo "Marca: ".$this->getMarca(). "<br>";
        echo "Fabricação: ".$this->getAnoDeFabricacao(). "<br>";
        echo "Modelo: ".$this->getModelo(). "<br>";
        echo "Cor: ".$this->getCor(). "<br>";
        echo "Ligado: ".$this->getLigado(). "<br>";
        echo "Velocidade: ".$this->getVelocidade(). "<br>";
        echo "Velocidde Máxima: ".$this->getVelocidadeMaxima(). "<br>";
    }
    
    //Getters
    public function getMarca(){
        return $this->marca;
    }
    public function getAnoDeFabricacao(){
        return $this->anodefabricacao;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function getCor(){
        return $this->cor;
    }
    public function getLigado(){
        return $this->ligado;
    }
    public function getVelocidade(){
        return $this->velocidade;
    }
    public function getVelocidadeMaxima(){
        return $this->velocidademaxima;
    }
    //Setters
    public function setMarca($marca){
        $this->marca;
    }
    public function setAnoDeFabricacao($anodefabricacao){
        $this->setanodefabricacao=$anodefabricacao;
    }
    public function setModelo($modelo){
        $this->modelo=$modelo;
    }
    public function setCor($cor){
        $this->cor=$cor;
    }
    public function setLigado($ligado){
        $this->ligado=$ligado;
    }
    public function setVelocidade($velocidade){
        $this->velocidade=$velocidade;
    }
    public function setVelocidadeMaxima($velocidademaxima){
        $this->velocidademaxima=$velocidademaxima;    
    }
    
    //Ligar e Desligar
    
    public function ligaredesligar(){
        echo "INICIANDO A IGNIÇÃO <br>";
        echo "Status atual: " .$this->ligado. "<br>";
        if($this->ligado==false){
            $this->ligado=true;
            echo "Ligando o carro..." .$this->ligado."<br>";
        }else{
            $this->ligado=false;
            echo "Desligando o carro...".$this->ligado."<br>";
        }
        echo "FINALIZANDO A IGNIÇÃO<br>";
        echo "========================================<br><br>";
    }
    //Acelerar
    public function acelerar(){
        echo "INICIANCDO ACELERAÇÃO<br>";
        echo "Velocidade atual: ".$this->velocidade. "<br>";
        echo "Velocidade máxima: ".$this->velocidademaxima. "<br>";
        if($this->ligado==true){
            while($this->velocidade<=$this->velocidademaxima){
                echo "Acelerando...".$this->velocidade. "<br>";
                $this->velocidade++;
            }
        }else{
            echo "O carro está desligado <br>";
        }
        echo "FINALIZANDO ACELERAÇÃO<br>";
        echo "========================================<br><br>";
    }
}
?>