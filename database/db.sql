CREATE DATABASE aumigos;
USE aumigos;

CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL
    nome VARCHAR (100) NOT NULL,
    email VARCHAR (100) NOT NULL,
    telefone VARCHAR (20) NOT NULL
);
CREATE TABLE animais (
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nome VARCHAR (100) NOT NULL,
    especie VARCHAR (50) NOT NULL,
    raca VARCHAR (100) NOT NULL,
    idade INT ,
    cliente_id INT,
    FOREIGN KEY (cliente_id) REFERENCES clientes (id)
);