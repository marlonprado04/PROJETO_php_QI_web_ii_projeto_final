-- Criação do banco de dados
CREATE DATABASE IF NOT EXISTS poa_burguer;
USE poa_burguer;

-- Criação da tabela 'mesa' se ela não existir
CREATE TABLE IF NOT EXISTS mesa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    numero_mesa INT
);

-- Criação da tabela 'comanda_mesa' se ela não existir
CREATE TABLE IF NOT EXISTS comanda_mesa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_comanda INT,
    id_mesa INT
);

-- Criação da tabela 'comanda' se ela não existir
CREATE TABLE IF NOT EXISTS comanda (
    id INT AUTO_INCREMENT PRIMARY KEY,
    numero_comanda INT,
    id_comanda_mesa INT
);

-- Adição de chaves estrangeiras após a criação das tabelas
ALTER TABLE comanda ADD FOREIGN KEY (id_comanda_mesa) REFERENCES comanda_mesa(id);
ALTER TABLE comanda_mesa ADD FOREIGN KEY (id_comanda) REFERENCES comanda(id);
ALTER TABLE comanda_mesa ADD FOREIGN KEY (id_mesa) REFERENCES mesa(id);

-- Criação da tabela 'item' se ela não existir
CREATE TABLE IF NOT EXISTS item (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    preco DOUBLE,
    descricao VARCHAR(255),
    imagem VARCHAR(255),
    id_item_comanda INT
);

-- Criação da tabela 'item_comanda' se ela não existir
CREATE TABLE IF NOT EXISTS item_comanda (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_item INT,
    id_comanda INT,
    quantidade INT,
    preco_total INT,
    observacao VARCHAR(255),
    FOREIGN KEY (id_item) REFERENCES item(id),
    FOREIGN KEY (id_comanda) REFERENCES comanda(id)
);
