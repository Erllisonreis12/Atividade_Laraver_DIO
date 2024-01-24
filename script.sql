CREATE DATABASE exemplo;
use exemplo;

create table usuario(
    id smallint not null AUTO_INCREMENT,
    nome varchar(50) not null,
    email varchar(50) not null,
    senha VARCHAR(200) not null,
    data_cadastroexemplo varchar(50) not null,
    primary key(id)
);