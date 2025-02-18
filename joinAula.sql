create database joinAula;
use joinAula;

create table pessoa(
	id_pessoa int auto_increment primary key,
    nome varchar(255) not null,
    nacionalidade varchar(10)
);

create table endereco(
	id_endereco int auto_increment primary key,
    rua varchar(100) not null,
    numero int not null,
    pessoa_id int not null,
    foreign key (pessoa_id) references pessoa(id_pessoa)
);

INSERT INTO pessoa (nome, nacionalidade) VALUES
('Carlos Silva', 'BR'),
('Maria Oliveira', 'PT'),
('João Souza', 'US'),
('Ana Costa', 'BR'),
('Felipe Pereira', 'BR');

INSERT INTO endereco (rua, numero, pessoa_id) VALUES
('Rua das Flores', 123, 1),
('Avenida Brasil', 456, 2),
('Rua 7 de Setembro', 789, 3),
('Rua dos Três Irmãos', 101, 4),
('Travessa do Sol', 202, 5);

select * from pessoa, endereco;

select pessoa.nome, endereco.rua from pessoa join endereco;
select pessoa.nome, endereco.rua from pessoa inner join endereco on pessoa.id_pessoa = endereco.id_endereco;
select pessoa.nome, endereco.rua from pessoa right join endereco on pessoa.id_pessoa = endereco.id_endereco;
select pessoa.nome, endereco.rua from pessoa left join endereco on pessoa.id_pessoa = endereco.id_endereco;


-- ------------------------------------------------------------------------------------------------------- --


use employees;
select * from employees;

select gender from employees;
select count(gender) from employees;
select gender as genero, count(gender) as qid_genero from employees group by gender;
select dept_no, count(dept_no) from dept_emp group by dept_no;
