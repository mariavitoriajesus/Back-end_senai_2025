create database coresBrasil;
use coresBRasil;

create table clientes(
	id_clientes int auto_increment not null unique,
    nome varchar(100) not null,
    email varchar(255) not null,
    telefone int,
    constraint pk_clientes primary key (id_clientes)
); 
select * from clientes;

INSERT INTO clientes (nome, email, telefone) VALUES 
('João Silva', 'joao.silva@email.com', 11987654321),
('Maria Oliveira', 'maria.oliveira@email.com', 11976543210);

create table produtos(
	id_produtos int primary key not null,
    nome varchar(255) not null,
    peso decimal(6,2) not null,
    cor varchar(100)
);

INSERT INTO produtos (id_produtos, nome, peso, cor) VALUES 
(1, 'Notebook Gamer', 2.50, 'Preto'),
(2, 'Smartphone X', 0.30, 'Azul'),
(3, 'Fone de Ouvido Bluetooth', 0.25, 'Branco'),
(4, 'Monitor 27 Polegadas', 4.80, 'Preto'),
(5, 'Teclado Mecânico', 1.20, 'Cinza');
select * from produtos;

create table pedidos(
	id_pedido int auto_increment primary key not null,
     pagamento decimal(55,2),
     valor decimal(55,2),
     produto_id int not null,
    foreign key (produto_id) references produtos(id_produtos)
);

INSERT INTO pedidos (pagamento, valor, produto_id) VALUES 
(1500.00, 1500.00, 1),
(3000.50, 3000.50, 2),
(250.75, 250.75, 3),
(1800.00, 1800.00, 4),
(450.00, 450.00, 5);

select * from pedidos;