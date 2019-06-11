
<?php
date_default_timezone_set('America/Sao_Paulo');

$nome           = $_POST["nome"];
$usuario        = $_POST["usuario"];
$senha          = $_POST["senha"];
$cargo          = $_POST["cargo"];
$administrador  = $_POST["administrador"];
$hora           = date('H');

if($hora<12){
    $frase = "Bom dia";
    $fundo = "dia";
}else{
    if($hora<18){
        $frase = "Boa tarde";
        $fundo = "tarde";
    }else{
        $frase = "Boa noite";
        $fundo = "noite";
    }
}

if($administrador=="S"){
    $user = "admin";
}else{
    $user = "user";
}    


?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulários</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body class="<?php echo $fundo; ?>">
    
        <p>
        <img src="img/<?php echo $fundo; ?>.png" style="width:300px"><br>
        <?php echo $frase; ?> <strong><?php echo $nome; ?></strong>
        (<?php echo strtolower($usuario); ?>)<br>
        <img src="img/<?php echo $user; ?>.png" style="width.100px">
        </p>
    </body>
</html>    