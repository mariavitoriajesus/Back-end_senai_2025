create database Restaurante;
use restaurante;

-- Tabela Cliente
create table cliente(
	id_cliente int auto_increment primary key,
    nome varchar(255) not null, 
    telefone int not null, 
    emailo varchar(255)
);

-- Tabela Mesa
create table mesa(
	id_mesa int auto_increment primary key, 
    capacidade_max int not null
);

-- Tabela Reserva
create table reserva(
	id_reserva int auto_increment primary key, 
    data_res date not null,
    horario datetime not null, 
    qtd_pessoa  int not null,
    id_cliente int not null,
    foreign key (id_cliente) references Cliente(id_cliente) 
);

-- Tabela intermediária para o relacionamento M:N entre Reserva e Mesa
create table reserva_mesa(
	id_mesa int,
    id_reserva int,
    primary key (id_mesa, id_reserva),
    foreign key (id_reserva) references reserva(id_reserva),
    foreign key (id_mesa) references mesa(id_mesa)
);