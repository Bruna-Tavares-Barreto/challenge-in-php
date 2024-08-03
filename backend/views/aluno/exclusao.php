<!DOCTYPE html>
<html>
<head>
    <title>Exclusão de Aluno</title>
    <link rel="stylesheet" href="../../frontend/css/styles.css">
</head>
<body>
    <h1>Excluir Aluno</h1>
    <!-- Supondo que o aluno é carregado na variável $aluno -->
    <p>Tem certeza de que deseja excluir o aluno <?php echo htmlspecialchars($aluno['nome']); ?>?</p>
    <form action="../../backend/controllers/AlunoController.php?action=excluir" method="post">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($aluno['id']); ?>">
        <button type="submit">Excluir</button>
        <a href="listagem.php">Cancelar</a>
    </form>
</body>
</html>
