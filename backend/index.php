<?php
session_start();
require_once 'config/database.php';
require_once 'utils/helper.php';

// Verifica se o usuário está autenticado
if (!isLoggedIn()) {
    redirectToLogin();
}

// Função para obter estatísticas básicas
function getStats($pdo) {
    $stmt = $pdo->prepare("SELECT COUNT(*) AS total FROM alunos");
    $stmt->execute();
    $alunos = $stmt->fetch(PDO::FETCH_ASSOC)['total'];

    $stmt = $pdo->prepare("SELECT COUNT(*) AS total FROM turmas");
    $stmt->execute();
    $turmas = $stmt->fetch(PDO::FETCH_ASSOC)['total'];

    $stmt = $pdo->prepare("SELECT COUNT(*) AS total FROM matriculas");
    $stmt->execute();
    $matriculas = $stmt->fetch(PDO::FETCH_ASSOC)['total'];

    return ['alunos' => $alunos, 'turmas' => $turmas, 'matriculas' => $matriculas];
}

// Obtém as estatísticas
$stats = getStats($pdo);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="frontend/css/styles.css">
    <style>
        /* CSS básico para layout */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }
        header {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        nav ul {
            list-style: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 10px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
        }
        main {
            padding: 20px;
        }
        .stats {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }
        .stats div {
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 5px;
            text-align: center;
        }
        footer {
            background-color: #f1f1f1;
            padding: 10px;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bem-vindo ao Sistema de Gerenciamento da FIAP</h1>
        <nav>
            <ul>
                <li><a href="views/aluno/listagem.php">Gerenciar Alunos</a></li>
                <li><a href="views/turma/listagem.php">Gerenciar Turmas</a></li>
                <li><a href="views/matricula/cadastro.php">Gerenciar Matrículas</a></li>
            </ul>
        </nav>
        <a href="auth/logout.php" style="color: #fff; text-decoration: none;">Sair</a>
    </header>
    <main>
        <section>
            <h2>Visão Geral</h2>
            <div class="stats">
                <div>
                    <h3>Alunos</h3>
                    <p><?php echo htmlspecialchars($stats['alunos']); ?></p>
                </div>
                <div>
                    <h3>Turmas</h3>
                    <p><?php echo htmlspecialchars($stats['turmas']); ?></p>
                </div>
                <div>
                    <h3>Matrículas</h3>
                    <p><?php echo htmlspecialchars($stats['matriculas']); ?></p>
                </div>
            </div>
            <p>Utilize o menu acima para acessar as diferentes áreas de gerenciamento do sistema.</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 FIAP - Sistema de Gerenciamento de Cursos e Alunos</p>
    </footer>
</body>
</html>
<?php include 'footer/footer.php'; ?>