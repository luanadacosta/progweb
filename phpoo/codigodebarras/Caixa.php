<?php
session_start();

if(!isset($_SESSION["carrinho"])){
    $_SESSION['carrinho']=array();
    $_SESSION['totalcarrinho']=0;
}

if(isset($_GET["produto"])){

    //importar a classe
    require_once 'Produto.class.php';

$produtos = array(
  array("id" => 1,
    "nome" => "Celular",
    "descricao" => "linda tela e com Alta Tecnologia",
    "sku" => 2456,
    "ean" => 7899993905093,
    "valorunitario" => 245.90,
    "id_categoria" => 1
    ),
array("id" => 2,
    "nome" =>"Video Cassete Full Play",
    "descricao" =>"Incrivél tecnologia que permite reproduriz filmes na sua casa",
    "sku" =>7895,
    "ean" =>7899993903817,
    "valorunitario" =>287.99,
    "id_categoria" => 2
    ),
array("id" => 3,
    "nome" =>"Notebook Dell",
    "descricao" =>"Placa de Vídeo 2GB",
    "sku" =>5702,
    "ean" =>7899993907563,
    "valorunitario" =>2975.00,
    "id_categoria" => 5
  ),   
array("id" => 4,
    "nome" =>"Tablet Ipad",
    "descricao" =>"5ª Geração 32GB 9,7, iOS 8 MP Filma em Full HD",
    "sku" =>1056,
    "ean" =>7899993907556,
    "valorunitario" =>1899.00,
    "id_categoria" => 2
)    
);

switch($_GET["produto"]){
    case 7899993913625:
        $posicao = 0;
        break;
    case 7899993903817:
        $posicao = 1;
        break;
    case 7899993907563:
        $posicao = 2;
        break;
    case 7899993907556:
        $posicao = 3;
        break;
    default:
        $posicao = null;       
}
if(isset($posicao)){
    
$id= $produtos[$posicao]["id"]; 
$nome = $produtos[$posicao]["nome"]; 
$descricao = $produtos[$posicao]["descricao"]; 
$sku = $produtos[$posicao]["sku"]; 
$ean = $produtos[$posicao]["ean"]; 
$valorunitario = $produtos[$posicao]["valorunitario"]; 
$id_categoria = $produtos[$posicao]["id_categoria"]; 
    

//instanciando o objeto a partir da clase

$produto = new Produto($id,$nome,$descricao,$sku,$ean,$valorunitario,$id_categoria);
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ler Etiqueta do Produto</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <main>
    <section id="leituradositens">
    <form method="get">
        <label for="produto">Faça a leitura do produto</label>
        <input type="text" name="produto" autofocus>
        </form>
    </section>
    <section id="itensdocarrinho">
    <h1>Itens do carrinho:</h1>
    <?php
        if(isset($_GET["produto"]) and isset($posicao)){

            array_push($_SESSION['carrinho'],
            [
                'ean' => $produto->getEan(),
                'nome' => $produto->getNome(),
                'valorunitario' => $produto->getValorunitario()
            ]

            );

            foreach ($_SESSION['carrinho'] as $row){
                echo $row['ean']." - ";
                echo $row['nome']." - ";
                echo $row['valorunitario']."<br>";
            }

            }else{
                echo "Informe um produto válido!";
            }
            ?>
            </section>
            <section id="totaldocarrinho">
            <h1>TOTAL:</h1>
            <?php
            if(isset($_GET["produto"]) and isset($posicao)){
                echo $_SESSION['totalcarrinho'] += $produto->getValorunitario();
            }
            ?>
        </section>
    </main>
</body>
</html>