<form method="GET" action="ex04.php">
    <input type="text" name="nota" placeholder="Informe a nota">
    <input type="submit" value="Calcular">
</form>

<?php
if(isset($_GET["nota"])){
   
    $nota = $_GET["nota"];

if($nota<3){
  echo "Sua nota é ".$nota." e seu conceito é E";
    if(($nota>=3 and $nota<5){
        echo "Sua nota é ".$nota." e seu conceito é D";
        if(($nota>=5 and $nota<7){
echo "Sua nota é ".$nota." e seu conceito é C";
if(($nota>=7 and $nota<9){
    echo "Sua nota é ".$nota." e seu conceito é B";
    if(($nota>=10 and $nota<) "e seu conceito é A parabéns!";
?>