<?php

/* 
$x++ é igual a $x = $x + 1;
$x+=2 é igual a $x = $x + 2;
$x+=3 é igual a $x = $x + 3;
$x+=4 é igual a $x = $x + 4;
*/
$tabuada = 6;

for($x=0;$x<11;$x++){
    echo $tabuada."x".$x." = ".($tabuada*$x)."<br>";
}
?>