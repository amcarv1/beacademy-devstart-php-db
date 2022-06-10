-- Criar tabela aluno com as colunas: nome, cpf email e matricula com UNIQUE --
CREATE TABLE aluno (
    nome        VARCHAR(100) UNIQUE NOT NULL,
    cpf         CHAR(11) UNIQUE NOT NULL,
    email       VARCHAR(255) UNIQUE NOT NULL,
    matricula   VARCHAR(30) UNIQUE NOT NULL
);

-- Criar tabela curso.
CREATE TABLE curso (
    nome VARCHAR(100) UNIQUE NOT NULL, 
    professor VARCHAR(100) NOT NULL, 
    carga_horaria VARCHAR(100) NOT NULL, 
    turno VARCHAR(30) NOT NULL, 
);

-- Criar tabela disciplina.
CREATE TABLE disciplina (
    nome VARCHAR(100) UNIQUE NOT NULL, 
    professor VARCHAR(100) NOT NULL, 
);