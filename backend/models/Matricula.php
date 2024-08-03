<?php
class Matricula {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function create($aluno_id, $turma_id) {
        $sql = "INSERT INTO matriculas (aluno_id, turma_id) VALUES (?, ?)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$aluno_id, $turma_id]);
    }

    public function getAlunosMatriculados($turma_id) {
        $sql = "SELECT a.* FROM alunos a
                JOIN matriculas m ON a.id = m.aluno_id
                WHERE m.turma_id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$turma_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
