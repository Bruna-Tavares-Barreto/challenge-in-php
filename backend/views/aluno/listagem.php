<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Alunos</title>
    <link rel="stylesheet" href="../../frontend/css/styles.css">
</head>
<body>
    <header>
        <h1>Listagem de Alunos</h1>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>Usuário</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <!-- Exemplo de linha de tabela -->
                <tr>
                    <td>João Silva</td>
                    <td>2000-01-01</td>
                    <td>joao.silva</td>
                    <td>
                        <a href="edicao.php?id=1">Editar</a> | 
                        <a href="exclusao.php?id=1" class="confirm-delete">Excluir</a>
                    </td>
                </tr>
                <!-- Mais linhas aqui -->
            </tbody>
        </table>
    </main>
    <script src="../../frontend/js/scripts.js"></script>
</body>
</html>
