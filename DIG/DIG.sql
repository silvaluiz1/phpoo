create database DIG;
use DIG;
create table usuario (
nome varchar(255),
email varchar(255) primary key,
senha varchar(255));
select * from usuario;

create table livro (
isbn int primary key,
nomelivro varchar(100), 
editora varchar(100),
paginas varchar(100),
datadolivro varchar(12));

create table doador (
nomedoador varchar(255),
emaildoador varchar(255),
telefonedoador int,
cpfdoador int primary key,
enderecodoador varchar(255));

create table recebidor (
nomerecebidor varchar(255),
emailrecebidor varchar(255),
telefonerecebidor int,
CPFrecebidor int primary key,
enderecorecebidor varchar(255));