<!DOCTYPE html>
<html>
<head>
    <title>Edição de Turma</title>
    <link rel="stylesheet" href="../../frontend/css/styles.css">
</head>
<body>
    <h1>Edição de Turma</h1>
    <!-- Supondo que a turma é carregada na variável $turma -->
    <form action="../../backend/controllers/TurmaController.php?action=editar" method="post">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($turma['id']); ?>">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($turma['nome']); ?>" required minlength="3">
        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao"><?php echo htmlspecialchars($turma['descricao']); ?></textarea>
        <label for="tipo">Tipo:</label>
        <input type="text" id="tipo" name="tipo" value="<?php echo htmlspecialchars($turma['tipo']); ?>">
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
