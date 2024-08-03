<?php
require_once '../config/database.php';
require_once '../models/Matricula.php';

class MatriculaController {
    private $matriculaModel;

    public function __construct($pdo) {
        $this->matriculaModel = new Matricula($pdo);
    }

    public function cadastrar($aluno_id, $turma_id) {
        if ($this->matriculaModel->create($aluno_id, $turma_id)) {
            return "Matrícula realizada com sucesso!";
        } else {
            return "Erro ao realizar matrícula.";
        }
    }

    public function listarAlunos($turma_id) {
        return $this->matriculaModel->getAlunosMatriculados($turma_id);
    }
}
?>
