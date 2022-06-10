-- Conectando com o banco de dados.
USE db_escola;

-- Inserir um registro.
INSERT INTO tb_professor (nome, email, cpf) 
VALUES (
    'Chiqum das Tapiocas',
    'chiquim@email.com',
    '12312312312'
);

-- Inserir múltiplos registros.
INSERT INTO tb_professor (nome, email, cpf) 
VALUES 
('Zezim das Rapaduras', 'zezim@email.com', '999999999'),
('Maria das Rapaduras', 'maria@email.com', '88888888'),
('Pedrim das Rapaduras', 'pedro@email.com', '75555555');

-- Excluir 1 registro
DELETE
FROM tb_professor
WHERE id = 1;

DELETE
FROM tb_professor
WHERE email = 'maria@email.com';

-- Excluir todos
DELETE
FROM tb_professor;

-- Editar dados de 1 registro
UPDATE tb_professor
SET nome = 'Luiza da Calcária'
WHERE cpf = '75555555';

-- Editar todos
UPDATE tb_professor
SET nome ='Francisco';

-- Selecionar dados
SELECT * FROM tb_professor;

SELECT * FROM tb_professor WHERE id = 5;

SELECT nome, cpf FROM tb_professor;

