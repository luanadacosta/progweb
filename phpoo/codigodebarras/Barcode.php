<?php 
require_once('Barcode.class.php');
$barcode = new Barcode(789999390588, 2);
imagepng($barcode->display(), "barcode.png");
?>