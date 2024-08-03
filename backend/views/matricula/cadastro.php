<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Matrícula</title>
    <link rel="stylesheet" href="../../frontend/css/styles.css">
</head>
<body>
    <header>
        <h1>Cadastro de Matrícula</h1>
    </header>
    <main>
        <form action="processa_cadastro_matricula.php" method="post">
            <label for="aluno">Aluno:</label>
            <select id="aluno" name="aluno_id" required>
                <option value="">Selecione um Aluno</option>
                <!-- Opções dinamicamente geradas -->
                <option value="1">João Silva</option>
                <option value="2">Maria Oliveira</option>
                <!-- Mais opções aqui -->
            </select>

            <label for="turma">Turma:</label>
            <select id="turma" name="turma_id" required>
                <option value="">Selecione uma Turma</option>
                <!-- Opções dinamicamente geradas -->
                <option value="1">Matemática</option>
                <option value="2">História</option>
                <!-- Mais opções aqui -->
            </select>

            <input type="submit" value="Matricular">
        </form>
    </main>
    <script src="../../frontend/js/scripts.js"></script>
</body>
</html>

