use employees;
select * from employees;

-- char lenght
select first_name, char_length(first_name) as qtd_caracteres from employees;

-- concat
select concat(first_name, " nasceu em ", birth_date) from employees;
select concat_ws(" * ", first_name, last_name) from employees;

-- L-Lower-minusculo
SELECT first_name , ucase(first_name) from employees;

-- replece 
select first_name, last_name from employees where emp_no = "10001";
select replace(first_name, "Georgi", " um cara tranquilo"), last_name from employees where emp_no = "10001";

-- left and rigth
select first_name, left(first_name, 3) from employees;
select first_name, right(first_name, 4) from employees;

-- date diff
select hire_date, birth_date from employees;
select datediff(hire_date, birth_date) from employees;
select first_name, date_format(hire_date, "%n") from employees;

-- --------------------------------------------- --
create table emails(
	id int primary key auto_increment,
    primario varchar(255) not null
);
insert emails(primario) values ("Maria Vitória Jesus");
select * from emails;
select trim(primario) from emails;

