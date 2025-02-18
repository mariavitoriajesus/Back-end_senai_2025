create database activity;
use activity;

create table clientes(
	id_clientes int primary key auto_increment,
    nome varchar(255) not null
);

create table pedidos(
	id_pedidos int primary key auto_increment,
    id_clientes int not null, 
    data_pedido date not null,
    foreign key (id_clientes) references clientes(id_clientes)
);

INSERT INTO Clientes (nome) VALUES
('Carlos'),
('Ana'),
('Bruna'),
('Jessica'),
('Victor'),
('Fernanda');

INSERT INTO Pedidos (id_clientes, data_pedido) VALUES
(1, '2025-01-10'),
(1, '2025-01-15'),
(1, '2025-02-01'),
(2, '2025-02-10'),
(5, '2025-02-12'),
(6, '2025-02-05'),
(6, '2025-02-18');

-- A)  Liste os pedidos e os nomes dos clientes que fizeram esses pedidos.
select pedidos.id_pedidos, clientes.nome 
	from pedidos join clientes 
		on pedidos.id_clientes = clientes.id_clientes;
        
-- B)  Liste todos os clientes e os pedidos que fizeram (mesmo que não tenham feito pedidos).
select pedidos.id_pedidos, clientes.nome 
	from pedidos left join clientes 
		on pedidos.id_clientes = clientes.id_clientes;

-- C)  Mostre quantos pedidos cada cliente fez.
select clientes.nome, count(pedidos.id_pedidos) as total_pedidos 
	from clientes left join pedidos 
		on clientes.id_clientes = pedidos.id_clientes 
			group by clientes.id_clientes;