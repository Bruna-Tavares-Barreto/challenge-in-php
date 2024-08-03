<!DOCTYPE html>
<html>
<head>
    <title>Edição de Aluno</title>
    <link rel="stylesheet" href="../../frontend/css/styles.css">
</head>
<body>
    <h1>Edição de Aluno</h1>
    <!-- Supondo que o aluno é carregado na variável $aluno -->
    <form action="../../backend/controllers/AlunoController.php?action=editar" method="post">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($aluno['id']); ?>">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($aluno['nome']); ?>" required minlength="3">
        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento" value="<?php echo htmlspecialchars($aluno['data_nascimento']); ?>" required>
        <label for="usuario">Usuário:</label>
        <input type="text" id="usuario" name="usuario" value="<?php echo htmlspecialchars($aluno['usuario']); ?>" required minlength="3">
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
