<?php

$logonormal      = "https://www.familysearch.org/blog/pt/wp-content/uploads/sites/6/2017/06/google.jpg";
$logoaniversario = "https://s3.amazonaws.com/images.seroundtable.com/googles-18th-birthday-logo-1474898702.gif";
$nascimento      = "07-01"
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Html com If reduzido em PHP</title>
<head>
<body style ="text-align;center;">
<!--restante da estrutura html-->
<img src="<?php echo (date("m-d") == $nascimento ? $logoaniversario : $logonormal); ?>" style="width:400px;"><br>
<input type="text" name="buscar" placeholder="O que deseja saber?">
<!--restante da estrutura html-->
<body>
</html>