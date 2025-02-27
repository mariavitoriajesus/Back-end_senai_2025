create database livraria;
use livraria;

create table autores(
	id_autor int auto_increment primary key,
    nome varchar(100) not null,
    nacionalidade varchar(50)
);

create table livros(
	id_livros int auto_increment primary key,
    titulo varchar(255) not null,
    ano_publicacao int,
    id_autor int,
    foreign key (id_autor) references autores(id_autor)
);

INSERT INTO Autores (nome, nacionalidade) VALUES
    ('Machado de Assis', 'Brasileiro'),
    ('J.K. Rowling', 'Britânica'),
    ('George Orwell', 'Britânico');

INSERT INTO Livros (titulo, ano_publicacao, id_autor) VALUES
    ('Dom Casmurro', 1899, 1),
    ('Memórias Póstumas de Brás Cubas', 1881, 1),
    ('Harry Potter e a Pedra Filosofal', 1997, 2),
    ('Harry Potter e a Câmara Secreta', 1998, 2),
    ('1984', 1949, 3);
    
-- D) Consultas SQL
-- 1. Selecionar todos os livros e seus respectivos autores
select livros.titulo, livros.ano_publicacao, autores.nome as autor 
	from livros join autores on livros.id_autor = autores.id_autor;

-- 2. Listar os autores e a quantidade de livros que cada um escreveu
select autores.nome, count(livros.id_livros) as quantidade_livros 
	from autores left join livros on autores.id_autor = livros.id_autor group by autores.nome;
    
-- 3. Exibir os livros de um autor específico (exemplo: J.K. Rowling)
select livros.titulo, livros.ano_publicacao 
	from livros join autores on livros.id_autor = autores.id_autor 
		where autores.nome = 'J.K. Rowling';