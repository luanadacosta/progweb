<?php
if(isset($_POST["submit"])){
    
$pergunta1 =$_POST["pergunta1"];
$pergunta2 =$_POST["pergunta2"];
//if simples
if($pergunta1 == 1 and $pergunta2 ==1){
    $diagnostico ="Ligue 0800-2224";
}elseif($pergunta1 == 1 and $pergunta2 == 2){
    $diagnostico = "Você precisa Reiniciar seu Computador";
}elseif($pergunta1 == 1 and $pergunta2 ==1){
    $diagnostico ="Desligue seu Roteador espere 15 minutos e ligue-o novamente";
}elseif($pergunta1 ==2  and $pergunta2 ==3){
    $diagnostico ="a";
}else{
    $diagnostico ="Atualize sua Tela Principal";
}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ex22 em PHP</title>
<head>
<body>
<div id="formulario">
    <form action="ex22.php" method="post">
    <label for="pergunta1">Onde está o Problema?</label>
        <select name="pergunta1">
            <option value="1"> No sistema operacional</option>
            <option value="2"> No meu equipamento</option>
        </select>
    <label for="pergunta2"> Com que frequência este probema ocorre?</label>
        <select name="pergunta2">
            <option value="1"> Todas as vezes que ligo</option>
            <option value="2">  Às vezes </option>
            <option value="3">  Primeira vez que ele ocorre</option>
        </select>    
        <input type="submit" name="submit" value="Concluir">
    </form>
</div>
<?php
if(isset($_POST["submit"])){
?>
    <div id="resultado">
    <?php
    echo $diagnostico;
    ?>
        
</div>
<?php
}
?>
</body>
</html>