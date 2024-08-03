<!DOCTYPE html>
<html>
<head>
    <title>Listagem de Matrículas</title>
    <link rel="stylesheet" href="../../frontend/css/styles.css">
</head>
<body>
    <h1>Listagem de Matrículas</h1>
    <table>
        <thead>
            <tr>
                <th>Aluno</th>
                <th>Turma</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($matriculas as $matricula): ?>
                <tr>
                    <td><?php echo htmlspecialchars($
