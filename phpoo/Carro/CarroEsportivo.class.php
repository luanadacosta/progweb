<?php 
//Importar a classe
require_once 'Carro.class.php';
class CarroEsportivo extends Carro{
    //ATRIBUTOS
    //Caracteristicas da classe representada
    private $turbo;
    private $sensordoturbo;
    //METODOS
    //Comportamento (ações) da classe representada
    public function getTurbo(){
        return $this->turbo;
    }
    public function getSensorDoTurbo(){
        return $this->sensordoturbo;
    //Setters
    public function setTurbo($turbo){
        return $this->turbo = $turbo; 
    }
    
    public function setSensorDoTurbo($sensordoturbo){
        return $this->turbo = $sensordoturbo;
    }
    //Adicionar Turbo
    public function adicionamentoDoTurbo(){
        if (parent::$this->velocidade>120;{
            echo "Turbo ativo...".$this->sensordoturbo. "<br";
        }else{
            $this->setsensordoturbo =false;
            echo "Turbo desativado...".$this->sensordoturbo. "<br>";
        }
    }
}
}