show databases;
create database examploAtv;
use examploAtv;

create table clientes (
	id int primary key auto_increment,
    nome varchar(100) not null,
    idade int not null,
    cidade varchar(100),
    compras decimal(10,2)
);

INSERT INTO clientes (nome, idade, cidade, compras) VALUES
('Ana Souza', 25, 'São Paulo', 150.50),
('Carlos Lima', 40, 'Rio de Janeiro', 1200.75),
('Fernanda Mendes', 35, 'Belo Horizonte', 860.30),
('Marcos Silva', 50, 'Curitiba', 2100.00),
('Patrícia Santos', 28, 'Porto Alegre', 300.90),
('Lucas Oliveira', 22, 'Brasília', 80.00),
('Juliana Costa', 60, 'Recife', 1750.45),
('Rafael Almeida', 38, 'Salvador', 950.10);

select * from clientes order by idade desc limit 3;

select * from clientes order by compras desc limit 5;
