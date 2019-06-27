<?php
try
{
//Conexão Local Xamp
$host = 'localhost';
$banco = '';
$usuario = 'root';
$senha = '';

$conexao = new PDO("mysql:host=$host;dbname=$banco;charset=utf8" , $usuario, $senha);

$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo"Uhul to conectado";
}
catch(PDOException $e)
{

    echo"Opa, algo de errado não está certo.";
}
?>