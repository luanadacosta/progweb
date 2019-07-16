<?php

//Importar a classe
require_once 'Carro.class.php';

//Instânciando o objeto
//a partir da classe
$carro =  new Carro();

//Criando o nosso carro
$carro->setMarca("Volkswagen");
$carro->setAnoDeFabricacao("2018");
$carro->setModelo("Gol");
$carro->setCor("Branca");
$carro->setLigado(false);
$carro->setVelocidade(0);
$carro->setVelocidadeMaxima(200);

echo "CARRO: ".$carro->getModelo()."<br><br>";

$carro->acelerar();
$carro->ligaredesligar();
$carro->acelerar();
?>