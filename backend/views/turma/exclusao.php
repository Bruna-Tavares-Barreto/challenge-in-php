<!DOCTYPE html>
<html>
<head>
    <title>Exclusão de Turma</title>
    <link rel="stylesheet" href="../../frontend/css/styles.css">
</head>
<body>
    <h1>Excluir Turma</h1>
    <!-- Supondo que a turma é carregada na variável $turma -->
    <p>Tem certeza de que deseja excluir a turma <?php echo htmlspecialchars($turma['nome']); ?>?</p>
    <form action="../../backend/controllers/TurmaController.php?action=excluir" method="post">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($turma['id']); ?>">
        <button type="submit">Excluir</button>
        <a href="listagem.php">Cancelar</a>
    </form>
</body>
</html>
