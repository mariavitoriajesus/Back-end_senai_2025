create database escolaOn;
use escolaOn;

create table alunos(
	id_alunos int not null auto_increment primary key,
    nome varchar(255),
    email varchar(255),
    data_nasc date
);

create table professor(
	id_professor int not null auto_increment primary key,
    nome varchar(255) not null,
    email varchar(255) not null,
    especialidade varchar(100) not null
);

create table curso(
	id_curso  int not null auto_increment primary key,
    nome varchar(255) not null,
    descricao text,
    id_professor int, 
    foreign key (id_professor) references professor(id_professor)
);

create table matricula(
	id_matricula int not null auto_increment primary key,
    id_alunos int, 
    id_curso int, 
    data_matricula date, 
    foreign key (id_alunos) references alunos(id_alunos),
    foreign key (id_curso) references curso(id_curso)
);

create table avaliacao(
	id_avaliacao int not null auto_increment primary key,
    id_matricula int, 
    nota decimal(5,2) not null, 
    dat_avaliacao date not null,
    foreign key (id_matricula) references matricula(id_matricula)
);
-- ------------------------------------------------- -- 
-- Inserindo Professores
INSERT INTO Professor (nome, email, especialidade) VALUES 
('Carlos Silva', 'carlos.silva@email.com', 'Banco de Dados'),
('Ana Souza', 'ana.souza@email.com', 'Programação'),
('Marcos Lima', 'marcos.lima@email.com', 'Redes de Computadores');

-- Inserindo Cursos
INSERT INTO Curso (nome, descricao, id_professor) VALUES 
('Banco de Dados', 'Curso sobre modelagem e SQL', 1),
('Programação', 'Curso de lógica de programação e linguagens', 2),
('Redes', 'Curso sobre infraestrutura de redes', 3);

-- Inserindo Alunos
INSERT INTO Alunos (nome, email, data_nasc) VALUES 
('João Pereira', 'joao.pereira@email.com', '2000-05-12'),
('Maria Oliveira', 'maria.oliveira@email.com', '1999-08-25'),
('Lucas Santos', 'lucas.santos@email.com', '2001-02-20');

-- Inserindo Matrículas
INSERT INTO Matricula (id_alunos, id_curso, data_matricula) VALUES 
(1, 1, '2024-02-01'),
(2, 2, '2024-02-05'),
(3, 3, '2024-02-10');

-- Inserindo Avaliações
INSERT INTO Avaliacao (id_matricula, nota, dat_avaliacao) VALUES 
(1, 8.5, '2024-03-01'),
(2, 9.0, '2024-03-02');

-- ----------------------------------------------- --
-- 1. Selecione todos os alunos cadastrados.
select * from alunos;
select * from curso;

-- 2. Selecione os nomes dos cursos e seus respectivos professores.
select Curso.nome as curso, Professor.nome as professor
	from Curso 
		join Professor on Curso.id_professor = Professor.id_professor;

-- 3. Liste os alunos matriculados no curso de "Banco de Dados".
select Alunos.nome from Alunos join Matricula on Alunos.id_alunos = Matricula.id_alunos
	join Curso on Matricula.id_curso = Curso.id_curso
		where Curso.nome = 'Banco de Dados';
        
-- 4. Quantos alunos estão matriculados em cada curso?        
select Curso.nome, COUNT(Matricula.id_alunos) AS total_alunos from Curso
	left join Matricula on Curso.id_curso = Matricula.id_curso group by Curso.nome;

-- 5. Qual a média de notas dos alunos em um curso específico?
select Curso.nome, avg(Avaliacao.nota) as media_notas from Curso join Matricula on Curso.id_curso = Matricula.id_curso
	join Avaliacao on Matricula.id_matricula = Avaliacao.id_matricula where Curso.nome = 'Programação'
		group by Curso.nome;

-- 6. Liste os alunos que ainda não receberam nota.
select Alunos.nome from Alunos join Matricula on Alunos.id_alunos = Matricula.id_alunos
	left join Avaliacao on Matricula.id_matricula = Avaliacao.id_matricula
		where Avaliacao.nota is null;