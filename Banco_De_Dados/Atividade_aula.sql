use employees;
select * from employees.salaries;

-- min
select min(salary) as salario_mais_baixo from salaries;
select salary from salaries order by salary asc limit 3;

-- max
select max(salary) as menor_salario from salaries;
select salary from salaries order by salary desc limit 3;

-- sum
select sum(salary) from salaries;

-- count 
select count(*) from salaries;
select count(*) from employees;
select count(*) from employees where gender = "M";
select count(*) from employees where first_name = "Maria";

-- like (* pesquisar)
select * from employees where first_name like "Geo%";   -- começo
select * from employees where first_name like "%ron";   -- final
select * from employees where first_name like "%ni%";   -- meio

-- kalloufi _ genin
select * from employees where last_name in ("Kalloufi", "Genin");

-- between
select * from salaries;
select * from salaries where salary between "39000" and "90000";
