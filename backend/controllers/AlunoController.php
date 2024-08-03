<?php
require_once '../config/database.php';
require_once '../models/Aluno.php';

class AlunoController {
    private $alunoModel;

    public function __construct($pdo) {
        $this->alunoModel = new Aluno($pdo);
    }

    public function cadastrar($nome, $data_nascimento, $usuario) {
        if (strlen($nome) < 3 || strlen($usuario) < 3) {
            return "Nome e usuário devem ter pelo menos 3 caracteres.";
        }
        if ($this->alunoModel->create($nome, $data_nascimento, $usuario)) {
            return "Aluno cadastrado com sucesso!";
        } else {
            return "Erro ao cadastrar aluno.";
        }
    }

    public function editar($id, $nome, $data_nascimento, $usuario) {
        if (strlen($nome) < 3 || strlen($usuario) < 3) {
            return "Nome e usuário devem ter pelo menos 3 caracteres.";
        }
        if ($this->alunoModel->update($id, $nome, $data_nascimento, $usuario)) {
            return "Aluno atualizado com sucesso!";
        } else {
            return "Erro ao atualizar aluno.";
        }
    }

    public function excluir($id) {
        if ($this->alunoModel->delete($id)) {
            return "Aluno excluído com sucesso!";
        } else {
            return "Erro ao excluir aluno.";
        }
    }

    public function listar() {
        return $this->alunoModel->getAll();
    }
}
?>
