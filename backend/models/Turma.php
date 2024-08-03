<?php
class Turma {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function create($nome, $descricao, $tipo) {
        $sql = "INSERT INTO turmas (nome, descricao, tipo) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$nome, $descricao, $tipo]);
    }

    public function update($id, $nome, $descricao, $tipo) {
        $sql = "UPDATE turmas SET nome = ?, descricao = ?, tipo = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$nome, $descricao, $tipo, $id]);
    }

    public function delete($id) {
        $sql = "DELETE FROM turmas WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }

    public function getAll($pagina = 1, $itens_por_pagina = 5) {
        $offset = ($pagina - 1) * $itens_por_pagina;
        $sql = "SELECT * FROM turmas ORDER BY nome LIMIT ? OFFSET ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $itens_por_pagina, PDO::PARAM_INT);
        $stmt->bindParam(2, $offset, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
