-- Criar tabela aluno com as colunas: nome, cpf email e matricula. --
CREATE TABLE aluno (
    nome        VARCHAR(100) NOT NULL,
    cpf         CHAR(11) NOT NULL,
    email       VARCHAR(255) NOT NULL,
    matricula   VARCHAR(30) NOT NULL
);