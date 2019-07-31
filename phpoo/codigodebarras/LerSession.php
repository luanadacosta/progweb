<?php
//Arquivo para recuperar dados da session

session_start();

echo "VALOR RECUPERADO DA SESSION NOME = ".$_SESSION["nome"]."<br>";
echo "VALOR RECUPERADO DA SESSION VALOR = ".$_SESSION["valor"]."<br>";

echo "<br>======================================================<br><br>";

echo "VALOR RECUPERADO DA VARIAVEL NOME = ".$nome["nome"]."<br>";
echo "VALOR RECUPERADO DA VARIAVEL VALOR = ".$valor["valor"]."<br>";
?>