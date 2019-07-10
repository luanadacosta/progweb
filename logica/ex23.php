<?php

if(isset($_POST["submit"])){
    $pontos     = $_POST["pontos"];
    $recompensa = "";

    if($pontos>=50 and $pontos<=100){
        $recompensa = "Descontos em produtos financeiros"; 
    }elseif($pontos>= 101 and $pontos<= 400){
        $recompensa ="Milhas em dobro para viagens";
    }elseif($pontos>= 401 and $pontos<= 700){
        $recompensa ="Pontos em dobro para compras em dólar";
    }else{
        $recompensa ="5 vezes mais pontos nas compras em dólar";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ex23 em PHP</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("[type=range]").change(function(){
        var novovalor=$(this).val();
        $("#intervalo").text(novovalor);
    });
});
</script>

</head>
<body>

<div id="formulario">
    <form action="ex23.php" method="post">
        <label for="pontos">Informe seus pontos:</label>
        <input type="range" value=<?php echo (isset($_POST["submit"])? $pontos:"50") ?> min="50" max="1000" name="pontos">
        <span id="intervalo"><?php echo (isset($_POST["submit"])? $pontos:"50")?></span>
        <input type="submit" name="submit" value="Simular">
    </form>
</div>

<?php
if(isset($_POST["submit"])){
?>
    <div id="resultado">
    <h1>Sua recompensa é...</h1>
    <?php
        echo $recompensa;
    ?>
   </div>     
<?php
}
?>

</body>
</html>