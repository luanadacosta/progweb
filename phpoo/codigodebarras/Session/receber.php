<?php
//Arquivo para recuperar dados d
session_start();

echo "ID = ".$_SESSION["id"]."<br>";
echo "NOME = ".$_SESSION["nome"]."<br>";
echo "DESCRICAO = ".$_SESSION["descricao"]."<br>";
echo "SKU = ".$_SESSION["sku"]."<br>";
echo "EAN = ".$_SESSION["ean"]."<br>";
echo "VALORUNITARIO = ".$_SESSION["valorunitario"]."<br>";
echo "CATEGORIA = ".$_SESSION["id_categoria"]."<br>";

echo "<br>======================================================<br><br>";

?>