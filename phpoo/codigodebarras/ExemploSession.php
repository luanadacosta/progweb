<?php
//Arquivode exemplo de session

session_start();
$_SESSION["nome"] = "Aula Teste";
$_SESSION["valor"] = 10;

echo "SESSION NOME = ".$_SESSION["nome"]. "<br><br>";
echo "SESSION VALOR = ".$_SESSION["valor"]. "<br><br>";

echo"=====================================================<br><br>";

$nome = "Aula Teste";
$valor = 10;

echo "VARIAVEL COMUM NOME = ".$nome. "<br><br>";
echo "VARIAVEL COMUM VALOR = ".$valor. "<br><br>";
?>