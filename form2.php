<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulários</title>
    </head>
    <body>
        <form id="contato" action="recebe2.php" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Informe o nome">
            <br>
            <label for="usuario">Usuário</label>
            <input type="text" name="usuario" id="usuario" placeholder="Informe o usuário">
            <br>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" placeholder="Informe a senha">
            <br>
            <label for="cargo">Cargo</label>
            <select id="cargo" name="cargo">
                <option value="1">Gerente</option>
                <option value="2">Auxiliar Administrativo</option>
                <option value="3">Secretário</option>
                <option value="4">Aprendiz</option>
            </select>
            <br>
            <label for="administrador">Administrador</label>
            <input type="radio" checked name="administrador" id="administrador" value="S">Sim
            <input type="radio" name="administrador" id="administrador" value="N">Não
            <br>
            <input type="submit" name="submit" id="submit" value="Cadastrar">
        </form>
    </body>
</html>