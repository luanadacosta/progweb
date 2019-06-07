<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Formulários</title>
</head>
<body>
<form id="contato" action="recebe.php" method="get">
    <label for="name">Nome</label>
    <input type="text" name="nome" id="nome" placeholder="Informe o nome">
    <label for="name">Sobrenome</label>
    <input type="text" name="sobrenome" id="sobrenome" placeholder="Informe o sobrenome">
    <label for="name">Data de Nascimento</label>
    <input type="date" name="nascimento" id="natenascimento" placeholder="Informe o nascimento">
    <label for="name">E-mail</label>
    <input type="text" name="email" id="email" placeholder="Informe o e-mail">
    <input type="submit" name="submit" id="submit" value="Salvar">
    </form>
    
</body>
</html>