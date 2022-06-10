CREATE TABLE tb_client(
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    telefone CHAR(11),
    email VARCHAR(100)
);

INSERT INTO tb_client (nome, telefone, email) VALUES ('joãozinho', '9999-9999', 'joaozin@email.com');
INSERT INTO tb_client (nome, telefone, email) VALUES ('pedrinho', '8888-888', 'pedrin@email.com');
INSERT INTO tb_client (nome, telefone, email) VALUES ('mariazinha', '5555-5555', 'mariazinha@email.com');

INSERT INTO tb_product (name, description, photo, price, category_id, quantity, created_at)
VALUES 
('Teclado', 'Teclado bla bla', 'https://images.kabum.com.br/produtos/fotos/105009/teclado-mecanico-gamer-hyperx-alloy-origins-core-rgb-hx-kb7rdx-br_1574693479_g.jpg', 199.89, 1, 50, '2022-05-10 09:30:34');