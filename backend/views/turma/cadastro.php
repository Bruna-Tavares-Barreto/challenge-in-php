<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Turma</title>
    <link rel="stylesheet" href="../../frontend/css/styles.css">
</head>
<body>
    <header>
        <h1>Cadastro de Turma</h1>
    </header>
    <main>
        <form action="processa_cadastro_turma.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required placeholder="Nome da Turma">

            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao" required placeholder="Descrição da Turma"></textarea>

            <label for="tipo">Tipo:</label>
            <input type="text" id="tipo" name="tipo" required placeholder="Tipo da Turma">

            <input type="submit" value="Cadastrar">
        </form>
        <div id="message" class="message-success">Turma cadastrada com sucesso!</div>
    </main>
    <script src="../../frontend/js/scripts.js"></script>
</body>
</html>
