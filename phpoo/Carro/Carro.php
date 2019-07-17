<?php

//Importar a classe
require_once 'CarroTradicional.class.php';

//Instânciando o objeto
//a partir da classe
$carro =  new CarroTradicional("Volkswagen","2018","Gol","Branca",false,0,200,"340 litros",false,0);

$carro->acelerar();
$carro->ligaredesligar();
$carro->acelerar();

?>