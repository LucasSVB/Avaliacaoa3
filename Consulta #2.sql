CREATE DATABASE banco3;  

USE banco3;

CREATE TABLE login (
nome VARCHAR (300),
login VARCHAR (100),
senha VARCHAR (100),
  PRIMARY KEY (login)
);

INSERT INTO login (nome, login, senha)
VALUES ('administrador', 'admin', 'fp123');


