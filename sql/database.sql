-- create database db_contato; 

CREATE TABLE Mensagens (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    mensagem TEXT,
    data_envio DATETIME NOT NULL
);