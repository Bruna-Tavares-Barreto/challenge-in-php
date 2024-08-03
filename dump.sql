-- Criação do banco de dados
CREATE DATABASE IF NOT EXISTS gerenciamento_cursos;
USE gerenciamento_cursos;

-- Tabela de Alunos
CREATE TABLE IF NOT EXISTS alunos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    data_nascimento DATE NOT NULL,
    usuario VARCHAR(50) NOT NULL UNIQUE
);

-- Tabela de Turmas
CREATE TABLE IF NOT EXISTS turmas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT NOT NULL,
    tipo VARCHAR(50) NOT NULL
);

-- Tabela de Matrículas
CREATE TABLE IF NOT EXISTS matriculas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    aluno_id INT NOT NULL,
    turma_id INT NOT NULL,
    FOREIGN KEY (aluno_id) REFERENCES alunos(id) ON DELETE CASCADE,
    FOREIGN KEY (turma_id) REFERENCES turmas(id) ON DELETE CASCADE,
    UNIQUE (aluno_id, turma_id) -- Garantir que o aluno não seja matriculado duas vezes na mesma turma
);

-- Inserção de dados iniciais na tabela de alunos
INSERT INTO alunos (nome, data_nascimento, usuario) VALUES
('João Silva', '2000-01-01', 'joao.silva'),
('Maria Oliveira', '1998-05-23', 'maria.oliveira'),
('Carlos Santos', '1999-11-12', 'carlos.santos');

-- Inserção de dados iniciais na tabela de turmas
INSERT INTO turmas (nome, descricao, tipo) VALUES
('Matemática', 'Turma de Matemática Avançada', 'Presencial'),
('História', 'Turma de História Mundial', 'Online'),
('Física', 'Turma de Física Quântica', 'Presencial');

-- Inserção de dados iniciais na tabela de matrículas
INSERT INTO matriculas (aluno_id, turma_id) VALUES
(1, 1), -- João Silva em Matemática
(2, 2), -- Maria Oliveira em História
(3, 3); -- Carlos Santos em Física
