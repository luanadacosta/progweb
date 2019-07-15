<?php
//Importar a classe
require_once 'Usuario.class.php';

//Instância o objeto (usuarioDoTotem)
//a partir da classe (Usuario)
$usuarioDoTotem = new Usuario();

$usuarioDoTotem->setNome("Luana");
$usuarioDoTotem->setSobrenome("Maldonado");

echo "O usuario" . $usuarioDoTotem->getNome(). $usuarioDoTotem->getSobrenome() ."vai sair para o almoço";
?>
