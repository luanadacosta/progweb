<form method="GET" action="ex02.php">
    <input type="number" name="numero" placeholder="Digite um numero">
    
</form>

<?php
if(isset($_GET["numero"])){
    $numero = $_GET["numero"];

if($numero>=0){

    if(($numero%2)==0){}
    echo $numero="Este numero".$numero" não é positivo e Par";
}else{
    echo $numero="Este numero ".$numero" é positivo e Impar";
}

?>