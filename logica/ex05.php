<form method="POST" action="ex05.php">
    <input type="text" required name="nome" placeholder="Informe a nome">
    <input type="text" required name="nome" placeholder="Informe seu Salário">
    <input type="submit" value="Calcular">
</form>

<?php
if(isset($_POST["salario"]) and insset($_GET["financiamento"])){
  
    $nome      = $_floatval["nome"];
    $salario   = $floatval["salario"];

    if($salario<=400){
        echo "Nome: ".$nome."| Aumento 15% | Sal. Atual:".$salario." | Sal. Novo: ".($salario+($salrio*0.15)) 
    }elseif($salario>400 and $salario <= 701){
        echo "Nome: ".$nome."| Aumento 12% | Sal. Atual:".$salario." | Sal. Novo: ".($salario+($salrio*0.12))
    }elseif($salario>700 and $salario <= 1001){
        echo "Nome: ".$nome."| Aumento 10% | Sal. Atual:".$salario." | Sal. Novo: ".($salario+($salrio*0.10))
    }elseif($salario>1000 and $salario <= 1801){
        echo "Nome: ".$nome."| Aumento 7% | Sal. Atual:".$salario." | Sal. Novo: ".($salario+($salrio*0.7))
    }elseif($salario>1800 and $salario <= 2501){
        echo "Nome: ".$nome."| Aumento 4% | Sal. Atual:".$salario." | Sal. Novo: ".($salario+($salrio*0.4))
    }elseif{
        echo "Nome: ".$nome."| Aumento 0% | Sal. Atual:".$salario." | Sal. Novo: ".($salario+($salrio*0))
    }

}else{
    echo "Informe o nome e o salário a cima"
}
    