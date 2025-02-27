create database relacionamento;
use relacionamento;

-- relacionamento 1:1
create table alunos(
	id_alunos int auto_increment primary key,
    nome varchar(100) not null,
    turma varchar(5) not null
);
INSERT INTO alunos (nome, turma) VALUES
('João Silva', '1A'),
('Maria Oliveira', '1B'),
('Pedro Souza', '2A'),
('Ana Costa', '2B'),
('Lucas Pereira', '3A');
select * from alunos;

create table contatos(
	id_contatos int auto_increment primary key,
    telefone varchar(20),
    alunos_id int not null,
    foreign key (alunos_id) references alunos(id_alunos)
);
INSERT INTO contatos (telefone, alunos_id) VALUES
('11987654321', 1),
('2133456789', 2),
('31987654321', 3),
('11976543210', 4),
('41987654321', 5);
select * from contatos;

select * from contatos where alunos_id = 1;
select *, alunos.nome, alunos.turma, contatos.telefone from alunos join contatos on contatos.alunos_id;

-- relacionamento 1:n
create table clientes(
	id_clientes int primary key auto_increment,
    nome varchar(100) 
);
INSERT INTO clientes (nome) VALUES
('Carlos Almeida'),
('Fernanda Silva'),
('Rafael Souza'),
('Julia Pereira'),
('Roberto Lima');
select * from clientes;

create table pedidos(
	id_pedidos int auto_increment primary key,
    valotToal float,
	clientes_id int not null,
    foreign key (clientes_id) references clientes(id_clientes)
);
INSERT INTO pedidos (valotToal, clientes_id) VALUES
(250.75, 1),
(125.50, 2),
(350.00, 3),
(199.99, 4),
(450.30, 5);
select * from pedidos;

