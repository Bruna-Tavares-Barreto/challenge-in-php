<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
    <link rel="stylesheet" href="../../frontend/css/styles.css">
</head>
<body>
    <header>
        <h1>Cadastro de Aluno</h1>
    </header>
    <main>
        <form action="processa_cadastro_aluno.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required placeholder="Nome do Aluno">
            
            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" id="data_nascimento" name="data_nascimento" required>
            
            <label for="usuario">Usuário:</label>
            <input type="text" id="usuario" name="usuario" required placeholder="Nome de Usuário">

            <input type="submit" value="Cadastrar">
        </form>
        <div id="message" class="message-success">Aluno cadastrado com sucesso!</div>
    </main>
    <script src="../../frontend/js/scripts.js"></script>
</body>
</html>
