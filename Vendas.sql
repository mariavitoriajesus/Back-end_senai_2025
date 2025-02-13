show databases;
create database vendas;
use vendas;

create table vendas(
	id_vendas int primary key auto_increment,
    id_produto int not null,
    quantidade int not null,
    preco_unitario decimal(10,2) not null,
    id_categoria int not null,
    data_venda datetime default current_timestamp,
    foreign key (id_produto) references produtos(id_produtos),
    foreign key (id_categorias) references categorias(id_categoria)
);
-- Inserindo vendas
INSERT INTO vendas (id_produto, quantidade, preco_unitario, id_categoria, data_venda) VALUES 
(1, 2, 1999.99, 1, '2024-02-10 14:30:00'),
(2, 1, 3999.99, 1, '2024-02-11 10:15:00'),
(3, 3, 49.90, 2, '2024-02-12 16:45:00'),
(4, 2, 99.90, 2, '2024-02-13 18:00:00'),
(5, 5, 9.50, 3, '2024-02-14 09:30:00'),
(6, 4, 14.90, 3, '2024-02-15 11:20:00');

create table produtos(
	id_produto int primary key auto_increment,
    nome_produto varchar(100) not null,
    descricao text,
    preco decimal(10,2) not null,
    id_categoria int not null,
    foreign key (id_categoria) references Categorias(id_categoria)
);
-- Inserindo produtos
INSERT INTO produtos (nome_produto, descricao, preco, id_categoria) VALUES 
('Smartphone', 'Celular com 128GB de armazenamento', 1999.99, 1),
('Notebook', 'Notebook com 16GB RAM e 512GB SSD', 3999.99, 1),
('Camiseta', 'Camiseta de algodão 100% preta', 49.90, 2),
('Calça Jeans', 'Calça jeans masculina', 99.90, 2),
('Chocolate', 'Barra de chocolate ao leite 200g', 9.50, 3),
('Cereal Matinal', 'Cereal matinal de milho 500g', 14.90, 3);

create table Categorias(
	id_categoria int primary key auto_increment,
    nome_categoria varchar(100) not null
);
-- Inserindo categorias
INSERT INTO Categorias (nome_categoria) VALUES 
('Eletrônicos'),
('Roupas'),
('Alimentos');

create table Clientes(
	id_cliente int auto_increment primary key,
    nome_cliente varchar(100) not null,
    estado varchar(2) not null
);
-- Inserindo clientes
INSERT INTO Clientes (nome_cliente, estado) VALUES
('João da Silva', 'SP'),
('Maria Oliveira', 'RJ'),
('Pedro Santos', 'MG'),
('Ana Pereira', 'SP'),
('Lucas Fernandes', 'BA'),
('Carla Souza', 'PR'),
('Marcos Lima', 'MG'),
('Fernanda Costa', 'RJ'),
('Ricardo Alves', 'SP'),
('Juliana Mendes', 'SC');

-- Total de vendas por categoria (SUM)
select id_categoria, sum(quantidade * preco_unitario) as total_vendas from vendas group by id_categoria;

-- Filtrando produtos por nome (LIKE)
 select id_produto, nome_produto from produtos where nome_produto like "%smart%";
 
 -- Filtrando clientes por estados específicos (IN)
 select * from Clientes where estado in ('SP', 'RJ', 'MG');