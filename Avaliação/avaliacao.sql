create database avaliacao;
use avaliacao;

create table clientes(
	id_clientes int primary key auto_increment,
    nome varchar(255) not null, 
    email varchar(255) not null, 
    telefone varchar(35) NOT NULL,
    endereco text
);

create table fornecedores(
	id_fornecedores int primary key auto_increment,
    nome_fornecedores varchar(255) not null,
    contato varchar(100),
    endereco text
);

create table produto(
	id_produto int primary key auto_increment,
    nome_produto varchar(100) not null,
    preco decimal(5,2) not null,
    id_fornecedores int,
    foreign key (id_fornecedores) references fornecedores(id_fornecedores)
);

create table pedido(
	id_pedido int primary key auto_increment,
    data_pedido date not null,
    total decimal(5,2) not null, 
    id_clientes int, 
    id_produto int,
    foreign key (id_clientes) references clientes(id_clientes),
    foreign key (id_produto) references produto(id_produto)
);

create table pagamentos(
	id_pagamento int primary key auto_increment,
    metodo_pagamento varchar(45) not null, 
    status_pagamento varchar(45) not null, 
    valor_pago decimal(5,2) not null,
    id_pedido int, 
    foreign key (id_pedido) references pedido(id_pedido)
);

-- --------------------------------------------------------------------- --
INSERT INTO clientes (nome, email, telefone, endereco) VALUES 
('João Silva', 'joao.silva@email.com', '11987654321', 'Rua das Flores, 123, São Paulo, SP'),
('Maria Oliveira', 'maria.oliveira@email.com', '21987654321', 'Avenida Paulista, 456, São Paulo, SP');
select * from clientes;


INSERT INTO fornecedores (nome_fornecedores, contato, endereco) VALUES 
('Fornecedor A', 'Carlos Souza', 'Rua dos Fornecedores, 101, São Paulo, SP'),
('Fornecedor B', 'Ana Lima', 'Avenida Comercial, 202, São Paulo, SP');
select * from fornecedores;

INSERT INTO produto (nome_produto, preco, id_fornecedores) VALUES 
('Produto 1', 25.50, 1), 
('Produto 2', 40.75, 2);
select * from produto;

INSERT INTO pedido (data_pedido, total, id_clientes, id_produto) VALUES 
('2025-02-20', 51.00, 1, 1),
('2025-02-22', 40.75, 2, 2);
select * from pedido;

INSERT INTO pagamentos (metodo_pagamento, status_pagamento, valor_pago, id_pedido) VALUES 
('Cartão de Crédito', 'Pago', 51.00, 1),
('Boleto', 'Pendente', 40.75, 2);
select * from pagamentos;