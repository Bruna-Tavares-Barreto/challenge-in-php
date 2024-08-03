<?php
require_once '../config/database.php';
require_once '../models/Turma.php';

class TurmaController {
    private $turmaModel;

    public function __construct($pdo) {
        $this->turmaModel = new Turma($pdo);
    }

    public function cadastrar($nome, $descricao, $tipo) {
        if (strlen($nome) < 3) {
            return "Nome deve ter pelo menos 3 caracteres.";
        }
        if ($this->turmaModel->create($nome, $descricao, $tipo)) {
            return "Turma cadastrada com sucesso!";
        } else {
            return "Erro ao cadastrar turma.";
        }
    }

    public function editar($id, $nome, $descricao, $tipo) {
        if (strlen($nome) < 3) {
            return "Nome deve ter pelo menos 3 caracteres.";
        }
        if ($this->turmaModel->update($id, $nome, $descricao, $tipo)) {
            return "Turma atualizada com sucesso!";
        } else {
            return "Erro ao atualizar turma.";
        }
    }

    public function excluir($id) {
        if ($this->turmaModel->delete($id)) {
            return "Turma excluída com sucesso!";
        } else {
            return "Erro ao excluir turma.";
        }
    }

    public function listar($pagina = 1, $itens_por_pagina = 5) {
        return $this->turmaModel->getAll($pagina, $itens_por_pagina);
    }
}
?>
