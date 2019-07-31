<?php
session_start();

if(isset($_GET["pontos"])) {
    $pontos = $_GET["pontos"];
    $_SESSION["pontos"] = $_SESSION["pontos"] + $pontos;
    echo $_SESSION["pontos"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acumulador</title>
</head>
<body>
<form action="Acumulador.php" method="get">
    <input type="text" name="pontos" id="pontos" autofocus placeholder="Informe um valor">
    <input type="submit" name="submit" value="Calcular">

    

</form>
</body>
</html>