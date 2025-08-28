CREATE DATABASE triagem;
USE triagem 
CREATE TABLE pacientes(

id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR () NOT NULL,
idade INT NOT NULL,
cpf VARCHAR(20) NOT NULL,
sexo VARCHAR,
data_nascimento DATE,
telefone VARCHAR(30),
endereco VARCHAR(200),
sintomas varchar(300) NOT NULL,
inicio_sintomas DATE,
doencas_pre_existentes (300)VARCHAR,
uso_medicamentos (200)VARCHAR,
alergias (200)VARCHAR,
pressao_arterial VARCHAR(5) NOT NULL,
temperatura (2) VARCHAR,
frequencia_cardiaca (200) VARCHAR,
saturacao_o2 VARCHAR,
observacao TEXT NOT NULL,

);
