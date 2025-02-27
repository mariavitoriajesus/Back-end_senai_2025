create database LojaRoupas;
use lojaroupas;
create table roupas(
	idRoupas int auto_increment primary key,
    nome varchar(50) not null,
    tamanho varchar(10) not null,
    cor varchar(20) not null,
    preco decimal(10,2) not null
);

insert into Roupas (nome, tamanho, cor, preco) value
('Camiseta Polo', 'M', 'Azul', 59.99),
('Calça Jeans', 'G', 'Preta', 129.90),
('Vestido Casual', 'P', 'Vermelho', 89.90),
('Jaqueta de Couro', 'M', 'Preta', 249.99),
('Bermuda Moletom', 'G', 'Cinza', 79.90),
('Blusa de Tricô', 'P', 'Bege', 99.99);

select * from roupas;
select * from roupas where cor='Preta';
