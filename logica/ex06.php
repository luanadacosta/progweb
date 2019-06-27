<form method="POST" action="ex05.php">
    <input type="text" required name="nome" placeholder="Informe I">
    <input type="text" required name="nome" placeholder="Informe A">
    <input type="text" required name="nome" placeholder="Informe B">
    <input type="text" required name="nome" placeholder="Informe C">
    <input type="submit" value="Calcular">
</form>

<?php
if(isset($_POST["valori"]) and insset($_GET["valora"])and insset($_GET["valorb"])and insset($_GET["valorc"])){
   
$maior  = 0;
$menor  = 0;
$meio   = 0;

$maior=$va;
$menor=$va;
$meio=$va;

    $vi = $_POST["valori"];
    $va = $_POST["valora"];
    $vb = $_POST["valorb"];
    $vc = $_POST["valorc"];
    
        if{$vb>$maior){
           $maior=$vb;
       }else{
        $menor=$vb;
    }
        if($vc>$maior){
        $maior=$vc;
    }


}elseif($vi==2){

}elseif($vi==3){

}else{
    echo "O valor I está fora do intevalo permitido";
}
}else{
    echo "Informe I está fora do ";
}


?>