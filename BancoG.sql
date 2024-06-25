-- Active: 1714689739166@@127.0.0.1@3306@bancog
create database BancoG;
use BancoG;
create table tarefas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(30) NOT NULL,
    descricao TEXT,
    status ENUM('pendente', 'concluída') DEFAULT 'pendente' /* caso nao tenha nenhum regitro, sera pendente como padrão*/
);

create table login( 
id Int auto_increment primary key,
username varchar (50) not null,
password varchar (20) not null
);



drop database bancoG;

