<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Turmas</title>
    <link rel="stylesheet" href="../../frontend/css/styles.css">
</head>
<body>
    <header>
        <h1>Listagem de Turmas</h1>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Tipo</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <!-- Exemplo de linha de tabela -->
                <tr>
                    <td>Matemática</td>
                    <td>Turma de Matemática Avançada</td>
                    <td>Presencial</td>
                    <td>
                        <a href="edicao.php?id=1">Editar</a> | 
                        <a href="exclusao.php?id=1" class="confirm-delete">Excluir</a>
                    </td>
                </tr>
                <!-- Mais linhas aqui -->
            </tbody>
        </table>
        <!-- Paginação -->
        <nav>
            <ul class="pagination">
                <li><a href="?page=1">1</a></li>
                <li><a href="?page=2">2</a></li>
                <!-- Mais páginas aqui -->
            </ul>
        </nav>
    </main>
    <script src="../../frontend/js/scripts.js"></script>
</body>
</html>
