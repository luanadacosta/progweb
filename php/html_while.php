<?php
if(isset($_POST["submit"])){
    $servidor = $_POST["categoria"];
    switch($categoria){
        case 1:
            $produtos = array(
                array("nome" => "Jaleco Lord", "valor" => 210, "ativo" => true),
                array("nome" => "Jaleco Veneto", "valor" => 240, "ativo" => false),
             );
    break;
        case 2: 
            $produtos = array(
                array("nome" => "Jaleco Duquesa", "valor" => 210, "ativo" => true),
                array("nome" => "Jaleco Condesa", "valor" => 240, "ativo" => false),
                array("nome" => "Jaleco Basic", "valor" => 190, "ativo" => true),
            );
    break;        
        case 3:
            $produtos = null;
            break;
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Html com While em PHP</title>
<head>
<body>
<!--restante da estrutura html-->

<div id="formulario">
    <form action="html_switch.php" method="post">
        <label for="servidor">Selecione um servidor</label>
        <select name="servidor">
            <option value="1">Jaleco Masculino</option>
            <option value="2">Jaleco Feminino</option>
            <option value="3">Jaleco Infantil</option>
        </select>
        <input type="submit" name="submit" value="Ver preços">
    </form>
</div>

<div id=
<!--restante da estrutura html-->
</body>
</html>