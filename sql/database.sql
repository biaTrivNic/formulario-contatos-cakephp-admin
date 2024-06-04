-- create database db_contato; 

CREATE TABLE Messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    mensagem TEXT,
    data_envio DATETIME NOT NULL
);

INSERT INTO Messages (nome, email, mensagem, data_envio) VALUES
('João Silva', 'joao.silva@example.com', 'Olá, esta é uma mensagem de teste.', '2024-06-03 10:00:00'),
('Maria Oliveira', 'maria.oliveira@example.com', 'Aqui está outra mensagem de teste.', '2024-06-03 10:05:00'),
('Carlos Souza', 'carlos.souza@example.com', 'Mensagem de teste enviada por Carlos.', '2024-06-03 10:10:00');