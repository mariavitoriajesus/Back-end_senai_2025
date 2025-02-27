-- Explicação do projeto:
-- Este banco de dados armazena informações sobre contas bancárias. 
-- Cada conta possui um identificador único (id), um nome e sobrenome do titular, 
-- um saldo financeiro e a data de nascimento do titular. 
-- O saldo não pode ser negativo devido à restrição CHECK.

show databases;
create database banco;
use banco;
create table contas(
	id int auto_increment primary key not null,
    nome varchar(50) not null,
    sobrenome varchar(50) not null, 
    saldo decimal(15,2) not null check (saldo >= 0),
    dataNas date not null
);
select * from contas;

INSERT INTO contas (nome, sobrenome, saldo, dataNas) VALUES
('João', 'Silva', 1500.75, '1985-04-12'),
('Maria', 'Oliveira', 3200.50, '1990-07-25'),
('Carlos', 'Souza', 850.00, '1995-09-30'),
('Ana', 'Martins', 5000.30, '1988-11-15'),
('Fernando', 'Lima', 2750.90, '1992-03-10'),
('Juliana', 'Ferreira', 10200.00, '1983-08-05'),
('Roberto', 'Almeida', 400.25, '2000-06-20'),
('Patrícia', 'Ribeiro', 6250.80, '1979-12-02'),
('Gabriel', 'Santos', 1850.40, '1997-05-18'),
('Camila', 'Pereira', 300.00, '2001-01-29');
select * from contas;