<?php
if(isset($_POST["submit"])){
$valor   = $_POST["valor"];
$calculo = sqrt($valor);

}
?>

<!DOCTYPE html>
<html> 
<head>
  <meta charset="UTF-8">
    <title>Atividade Externa</title>
</head>
</body>
    <div id="formulario">
        <form id="text.php" method="post">
            <h1>Infome um Número a Baixo</h1>
            <input type="text" name="valor">
            <input type="submit" name="submit" value="Calcular">
</form>
<div>

<?php
if(isset($_POST["submit"])){
    ?>
    <div id="resultado">
        <?php echo "<h2> A raiz de:$valor é $calculo </h2>";?>
</div>

<?php
}
?>
<?php
if(isset($_POST["valor"])){
    $valor = floor($_POST["valor"]);
    if($valor>=0){
     
        if(($valor%2)==0){
            echo "O numero" .$valor. " é e Par";
        }else{
        echo "O numero ".$valor. "é Ímpar";
        }
    }
}
        
       
?>

</body>
</html>