<form method="POST" action="ex03.php">
    <input type="text" name="salario" placeholder="Digite o salario">
    <input type="text" name="financiamento" placeholder="Digite o financiamento pretemdido">
    <input type="submit" value="Calcular">
</form>

<?php
if(isset($_POST["salario"]) and insset($_GET["financiamento"])){
  
    $salario       = $_floatval["salario"];
    $financiamento = $floatval["financiamento"];

    if($financiamento<=($salario*5)){
    echo "Financiamento Concedido<br>";
}else{
    echo "Financiamento Negado!<br>";
}
    echo "Obrigado por nos conseultar";


}else{
    echo"O valor informado nao é um numero válido";
}   

}else{
    echo"Informe o salario e o financiamento nos campos acima!";
}