<?php
if(isset($_POST["submit"])){
$valorA   = $_POST["valor"];
$valorB = $_POST["valor"];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Documento</title>
</head>
<body>
    <div id="formulario">
        <form action="exercicio_contas.php" method="POST">
        <label for="valorA">valor A</label>
        <input type="text" name="valorA">
        <label for="valorB">valor B</label>
        <input type="text" name="valorB">
        <input type="submit" name="submit" value="Calcular">

    </form>
    </div>

    <?php 
    if (isset($_POST["submit"])){
    ?>    
    <div id="resultado">
    <?php
    echo "O resultado da soma de ".$valorA." + ".$valorB." é: ".$somar."<br>";
    echo "O resultado da subtração de ".$valorA." - ".$valorB." é: ".$subtrair."<br>";
    echo "O resultado da divisão de ".$valorA." / ".$valorB." é: ".$dividir."<br>";
    echo "O resultado da multiplicação de ".$valorA." * ".$valorB." é: ".$multiplicar."<br>";
    ?>
    </div>
    <?php
    } 
    ?>
    
</body>
</html>