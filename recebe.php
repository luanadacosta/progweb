<?php
$data = $_GET["nascimento"];
list($ano,$mes,$dia) = explode('-', $data);
$hoje = mktime(0, 0, 0, date('m'), date('d'), date('y'));
$nascimento = mktime(0, 0, 0, $mes, $dia, $ano);
$idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25); 
?>
<?php
$nome         = $_GET["nome"];
$sobrenome    = $_GET["sobrenome"];
$nascimento   = $_GET["nascimento"];
$email        = $_GET["email"];
//$nomecompleto = $nome." ".$sobrenome;
$nomecompleto =strtoupper($sobrenome) .", " .ucfirst($nome);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>
<p>
Olá <strong><?php echo $nomecompleto; ?>
</strong>, tudo bem? Você tem <strong><?php echo $idade; ?></strong> anos!
</p>
    
</body>
</html>