<form method="GET" action="ex17.php"> 
    <input type="text" name="palavra" placeholder="Informe uma palavra"><br>
    <input type="text" name="qtd" placeholder="Informe a quantidade"><br>
    <input type="submit" value="calcular">
</form>

<?php
if(isset($_GET["palavra"]) and isset($_GET["qtd"])){

    $palavra    = $_GET["palavra"];
    $qtd        = $_GET["qtd"];
    $frase      = $palavra;
    $novafrase  = $palavra;
    for($x=0;$qtd;$x++){
        echo $frase."<br>";
    $novafrase = $frase."<br>".$novafrase;
    }
    echo $novafrase;
}else{
    echo"Informe os campos acima!";
}