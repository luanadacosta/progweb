<?php
//Importar a classe
require_once 'Carro.class.php';

class CarroTradicional extends Carro{

    //Atributos
    //Caracteristicas da classe representada
    private $portamalas;
    private $sensordoportamalas;
    private $angulodaportadoportamalas;

    //Métodos
    //Comportamentos (ações) da classe representada
    function __construct($p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$p10){
        parent::__construct($p1,$p2,$p3,$p4,$p5,$p6,$p7);
        echo "Criando o Carro Tradicional a partir do Carro<br>";

        //Criando nosso carro
        $this->setPortaMalas($p8);
        $this->setSensorDoPortaMalas($p9);
        $this->setAnguloDoSendorDoPortaMalas($p10);

        echo "Porta Malas: ".$this->getPortaMalas(). "<br>";
        echo "Sensor do Porta Malas: ".$this->getSensorDoPortaMalas(). "<br>";
        echo "Angulo do Sensor do Porta Malas: ".$this->getAnguloDaPortaDoPortaMalas(). "<br>";
    }

 
    //Getters
    public function getPortaMalas(){
        return $this->portamalas;
    }

    public function getAnguloDaPortaDoPortaMalas(){
        return $this->angulodaportadoportamalas;
    }

    public function getSensorDoPortaMalas(){
        return $this->sensordoportamalas;
    }
    
    //Setters
    public function setPortaMalas($portamalas){
        return $this->portamalas = $portamalas;
    }

    public function setSensorDoPortaMalas($sensordoportamalas){
        return $this->sensordoportamalas = $sensordoportamalas;
    }

    public function setAnguloDoSendorDoPortaMalas($angulodosensordoportamalas){
        return $this->angulodosensordoportamalas = $angulodosensordoportamalas;
    }

    //Abertura do Porta Malas

public function abrirPortaMalas(){
    echo "INICIANDO A ABERTURA DO PORTA MALAS<br>";
    if($this->sensordoportamalas ==false){
        $this->sensordoportamalas =true;
        $this->angulodosensordoportamalas = 80;
        echo "Abrindo o porta malas em ".$this->angulodaportadoportamalas. "°<br>";
    }else{
        $this->sensordoportamalas = false;
        $this->angulodoportamalas = 0;
        echo "Fechando o porta malas em ".$this->angulodaportadoportamalas."°<br>";
    }
    echo "FINALIZANDO A ABERTURA DO PORTA MALAS<br>";
    echo "========================================<br><br>";
}

}
?>