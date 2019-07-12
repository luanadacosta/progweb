<?php

// Declarando os valores das variáveis

$valorA = 15;
$valorB = 8;

 

?>

<h2>Adição</h2>

<p>

<?php
echo $valorA + $valorB;

?>

</p>

<h2>Subtração</h2>

<p>

<?php

 

echo $valorA - $valorB;

 

?>

</p>

<h2>Multiplicação</h2>

<p>
<?php
echo $valorA * $valorB;
?>

</p>

<h2>Divisão</h2>

<p>

<?php

 

echo $valorA / $valorB;

 

?>

</p>

<h2>Módulo(resto da divisão)</h2>

<p>

<?php

 

echo $ValorA % $valorB;

 

?>

</p>





<?php
if(isset($_POST["submit"])){
$valorA = $_POST["valorA"];
$valorB = $_POST["valorB"];

$somar       $valorA+$valorB
$subtrair    $valorA-$valorB
$multiplicar $valorA*$valorB
$dividir     $valorA/$valorB


}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
   <title>Exercicio</title>
</head>
<body>
    
<div id="formulario">
        <form id="text.php" method="post">
            <h1>ValorA</h1> 
            <label for="valor">Informe um numero</label>
            <input type="text" name="valor">
          
            <input type="submit" name="submit" value="Calcular">
</form> 
<div>
<?php
if(isset($_POST["submit"])){
    ?>
    <div id="resultado">
        <?php echo  $valoraA=15 * $valorB=7 ; ?>
       
        
       



</body>
</html>