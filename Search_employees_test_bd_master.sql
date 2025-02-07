select * from salaries;
select min(salary) from salaries;
select * from salaries where salary > 40000;
select * from salaries where salaty >= 30000 and salary <= 40000;
select distinct emp_no from salaries where emp_no <> 10006;

select * from employees;
select count(*) from employees;

select * from employees order by fist_name asc;