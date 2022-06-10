-- Para criar um banco de dados --
CREATE DATABASE db_escola;

-- Selecionar o banco de dados --
USE db_escola;

-- Excluir tabela --
DROP TABLE tb_professor;

-- Criando tabela --
CREATE TABLE tb_professor (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    cpf CHAR(11) UNIQUE NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL
);

CREATE TABLE aluno (
    nome        VARCHAR(100) NOT NULL,
    cpf         CHAR(11) NOT NULL,
    email       VARCHAR(255) NOT NULL,
    matricula   VARCHAR(30) NOT NULL
);

-- Inserir dados
INSERT INTO tb_professor (nome, email, cpf) 
VALUES (
    "Alessandro", 
    "ale@email.com", 
    "1231231234"
);

INSERT INTO tb_professor (nome, email, cpf) 
VALUES (
    "Bruno", 
    "bruno@email.com", 
    "43243243221"
);

-- Selecionar dados --
SELECT * FROM tb_professor;