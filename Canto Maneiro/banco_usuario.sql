create database usuarios;
use usuarios;
create table cadastro(
id int(11) not null auto_increment primary key,
nome varchar(55) not null,
email varchar(100) not null,
telefone varchar(20) not null,
cpf varchar(20),
senha varchar(33)

);

describe cadastro;
select*from cadastro;