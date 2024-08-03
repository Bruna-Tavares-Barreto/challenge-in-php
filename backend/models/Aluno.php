<?php
class Aluno {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function create($nome, $data_nascimento, $usuario) {
        $sql = "INSERT INTO alunos (nome, data_nascimento, usuario) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$nome, $data_nascimento, $usuario]);
    }

    public function update($id, $nome, $data_nascimento, $usuario) {
        $sql = "UPDATE alunos SET nome = ?, data_nascimento = ?, usuario = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$nome, $data_nascimento, $usuario, $id]);
    }

    public function delete($id) {
        $sql = "DELETE FROM alunos WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }

    public function getAll() {
        $sql = "SELECT * FROM alunos ORDER BY nome";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
