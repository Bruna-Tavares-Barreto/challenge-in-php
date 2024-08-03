Gerenciamento de Cursos e Alunos
Descrição

Aplicação para gerenciar alunos, turmas e matrículas na FIAP. Permite cadastro, edição, exclusão e listagem de alunos e turmas, além de gerenciar matrículas e autenticação de usuários.

Tecnologias
PHP 8.0
MySQL
Bootstrap
Instalação
1. Clone o Repositório
git clone https://github.com/Bruna-Tavares-Barreto/DesafioPHP.git

2. Configuração do Banco de Dados
Crie o Banco de Dados:
CREATE DATABASE gerenciamento_cursos;
Importe o Dump SQL:
mysql -u seu_usuario -p gerenciamento_cursos < dump.sql

3. Configuração
Configure o Arquivo config.php:
Renomeie config/config.example.php para config.php e ajuste as credenciais do banco de dados:
<?php
return [
    'host' => 'localhost',
    'db'   => 'gerenciamento_cursos',
    'user' => 'FIAP_DEV',
    'pass' => 'D3s3nv0lv1m3nt0'
];
Configure o Servidor Web:
Aponte o servidor web para o diretório public.

4. Acesso
Abra o navegador e vá para:
Copiar código
http://localhost/gerenciamento-cursos/public
Funcionalidades
Aluno: Cadastro, edição, exclusão, listagem e busca de alunos.
Turma: Cadastro, edição, exclusão, listagem e paginação de turmas.
Matrícula: Cadastro e visualização de matrículas.
Autenticação: Login para acesso às páginas administrativas.