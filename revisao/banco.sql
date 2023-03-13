CREATE DATABASE usuario;
USE usuario;
CREATE TABLE usuarios(
	id int PRIMARY KEY AUTO_INCREMENT,
	nome varchar(100) not null,
	email varchar(100) not null,
	senha varchar(32) not null
);
