<?php
//importar a classe
require_once 'Produto.class.php';

$id = 1;
$nome = "Celular";
$descricao = "Celular de auta tecnologia";
$sku = 1488;
$ean = 7899993905093;
$valorunitario = 505.70;
$id_categoria = 7 ;

//Instanciando o objeto a paetir da classe
$produto = new Produto($id,$nome,$descricao,$sku,$ean,$valorunitario,$id_categoria);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Etiqueta do produto</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <main>
        <section id="descricao">
            <span>Nome</span>
            <p><?php echo $produto->getNome();?></p>
            <span>Descrição</span>
            <p><?php echo $produto->getDescricao();?></p>
            <span>Sku</span>
            <p><?php echo $produto->getSku();?></p>
            <span>Valor Unitario</span>
            <p><?php echo $produto->getValorunitario();?></p>
            </section>
        <section id="barcode"></select>
            <img src="Barcode.php?produto=<?php echo $produto->getEan(); ?>" alt="<?php echo $produto->getNome(); ?>">
            </section>
    </main>
    
</body>
</html>