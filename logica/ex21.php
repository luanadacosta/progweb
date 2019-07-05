<?php
//if simples
if(isset($_POST["submit"])){
    $servidor = $_POST["semanas"];

    switch($servidor){
        case 1:
            $a1 = array("nome" => "Mais Você","hora" => "09:00" , "class" => "livre" );
            $a2 = array("nome" => "Encontro com Fatima Bernardes","hora" => "09:00" , "class" => "livre" );
            
            break;
        case 2: 
            $a1 = array("nome" => "Globo esporte","hora" => "12:47", "class" => "livre");
            $a2 = array("nome" => "Jornal Hoje", "hora" => "13:20","class"=> "livre");
            break;
        case 3: 
            $a1 = array("nome" => "Sessão da Tarde","hora" => "13:58" ,"class" => "livre");
            $a2 = array("nome" => "O Álbum da grande familia","hora" => "15:48" ,"class" => "livre");
            break;
        case 4: 
            $a1 = array("nome" => "Vale a Pena ver de novo","hora" => "16:43" ,"class" => "livre");
            $a2 = array("nome" => "Malhação","hora" => "17:55" ,"class" => "livre");
          
            break;
        case 5: 
            $a1 = array("nome" => "Órfãos da Terra","hora" => "18:27" ,"class" => "livre");
            $a2 = array("nome" => "Verão 90","hora" => "19:33" ,"class" => "livre");
        case 6: 
            $a1 = array("nome" => "Jornal Nacional","hora" => "20:30" ,"class" => "livre");
            $a2 = array("nome" => "A Dona do Pedaço","hora" => "21:21" ,"class" => "livre");
            break;
    }
}
    //if com elseif


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ex21 em PHP</title>
<head>
<body>
<!--restante da estrutura html-->

<div id="formulario">
    <form method="post">
        <label for="dia">Selecione um dia da semana</label>
        <select name="semanas">
            <option value="1">segunda</option>
            <option value="2">terça</option>
            <option value="4">quarta</option>
            <option value="5">quinta</option>
            <option value="6">sexta</option>
        </select>   
        <input type="submit" name="submit" value="Ver Programaçâo">
    </form>
</div class="center">

<?php
if(isset($_POST["semanas"])){
?>    

<div id="Tabela"> 
    <h1>Tabela de Programação</h1>    
    <table border="1">
    
     
        <tr>
            <th>Horário</th>
            <th>Programas</th>
            <th>Classificação</th>
        </tr>
        <tr>
            <td><?php echo $a1["hora"];?></td>
            <td><?php echo $a1["nome"];?></td>
            <td><?php echo $a1["class"];?></td>
        </tr>
        <tr>
            <td><?php echo $a2["hora"];?></td>
            <td><?php echo $a2["nome"];?></td>
            <td><?php echo $a2["class"];?></td>  
        </tr>
    </table>
</div>    
<?php
}
?>       
</body>
</html>