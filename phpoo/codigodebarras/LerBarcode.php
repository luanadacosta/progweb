<?php
if(isset($_GET["produto"])){

    //importar a classe
    require_once 'Produto.class.php';

    $id  = 1;
    $nome ='Smart Hub Pro';
    $descricao ="Hub de tecnologias para automoçao residencial";
    $sku = 2456;
    $ean = 7899993905093;
    $valorunitario =245.90;
    $id_categoria = 2;

    //instanciando o objeto a partir da clase

    $produto = new Produto($id,$nome,$descricao,$sku,$ean,$valorunitario,$id_categoria);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ler Etiqueta do Produto</title>
    <link rek="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <main>
    <form method="get">
        <label for="produto">Faça a leitura do Produto</label>
        <input typw="text" name="produto" autofocus>
        </form>
        <?php
        if(isset($_GET["produto"])){
            echo "O produto selecionado é...<br>";
            echo $produto->getNome();
        }
        ?>
    </main>
</body>
</html>