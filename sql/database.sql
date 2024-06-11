-- create database db_contato; 

CREATE TABLE Messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    mensagem TEXT
);

INSERT INTO Messages (nome, email, mensagem) VALUES
('João Silva', 'joao.silva@example.com', 'Olá, esta é uma mensagem de teste.'),
('Maria Oliveira', 'maria.oliveira@example.com', 'Aqui está outra mensagem de teste.'),
('Carlos Souza', 'carlos.souza@example.com', 'Mensagem de teste enviada por Carlos.');