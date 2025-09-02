CREATE DATABASE triagem;
USE triagem
CREATE TABLE pacientes(


id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR (50) NOT NULL,
idade INT NOT NULL,
cpf VARCHAR(20) NOT NULL,
sexo VARCHAR (20),
data_nascimento DATE,
telefone VARCHAR(30),
endereco VARCHAR(200),

sintomas TEXT NOT NULL,
inicio_sintomas DATE,
doencas_pre_existentes TEXT,
uso_medicamentos TEXT,
alergias TEXT,

pressao_arterial TEXT NOT NULL,
temperatura VARCHAR(20),
frequencia_cardiaca VARCHAR (10),
saturacao_o2 VARCHAR (20),
observacao TEXT NOT NULL,


);


