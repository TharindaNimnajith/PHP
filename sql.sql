
--- SQL (Structured Query Language) ---


--If forget the mysql password:-

--1.Task Manager -> Services -> Right click on MySQL process and stop it

--2.Create reset.txt
--USE mysql;
--UPDATE mysql.user SET Password = PASSWORD('tharinda') WHERE User = 'root';
--FLULSH PRIVELEGES;

--3.Open cmd on the MySQL bin directory or navigate there using cd
--C:\Program Files\MySQL Server 8.0\bin>  <-- Prompt on cmd should be like this

--C:\Program Files\MySQL Server 8.0\bin>
--mysqld --defaults-file="C:\\ProgramData\\MySQL\\MySQL Server 8.0\\my.ini" --init-file=C:\Users\USER\Desktop\Working Directory\reset.txt

--4.Task Manager -> mqsqld.exe -> Select 'End Process' by right clicking on it

--5.Task Manager -> Services -> Right click on MySQL process and start it

--6.MySql Command Line Client -> Enter the password (new password)


--If didn't set MySQL to startup automatically with the Windows at the MySQL installation:-
--Task Manager -> Services -> Right click on MySQL process (eg: MySQL 8.0 / MySQL 80 etc.) and start it when you want to use MySQL


--Common SQL data types (There are many more data types available)

INT / INTEGER  ->  Integers
DECIMAL(m, n)  ->  m = Total number of digits, n = Number of digits coming after the decimal point
CHAR(k)        ->  Strings with a fixed size of k
VARCHAR(k)     ->  k = Maximum number of characters that can be stored per variable
BLOB           ->  Binary Large Object (stores large data) (eg: images, files)
DATE           ->  'YYYY-MM-DD'
TIMESTAMP      ->  'YYYY-MM-DD HH:MM:SS'
FLOAT		   ->  floating point numbers
DOUBLE	       ->  floating point numbers
DATETIME	   ->  date & time - 'YYYY-MM-DD HH:MM:SS'
REAL		   ->  floating point numbers


--SQL is not case sensetive
--The most common convemtion is to write SQL commands/key words in upper case


--Note that all text commands must be first on line and end with ';'


--You can write codes on PopSQL text editor to have a nice GUI
--Or you can use MYSQL 8.0 Command Line Client


--Commands for working with the databses

SHOW DATABASES;

CREATE DATABASE giraffe;

DROP DATABASE giraffe;

CONNECT giraffe;

USE giraffe;
--to change database

SHOW TABLES;


--List of all MySQL commands:

CTRL + c  					 		 		    ->  Terminate the pocess / Go back to the prompt if any error happens
(CTRL + z) + Enter  ||  quit  ||  exit  ||  \q 	->  Quit MySQL
?          			||  help  ||  \?    ||  \h  ->  List of all MySQL commands
clear      			||  \c 			 		  	->  Clear the current input statement
connect    			||  \r            		  	->  Reconnect to the sever (Optional arguments are db and host)
delimiter  			||  \d 					  	->  Set statement delimiter
ego  	   			||  \G 					  	->  Send command to mysql server, display result vertically
go 					||	\g					  	->  Send command to mysql server
notee				||	\t					  	->  Do not write into outfile
print				||	\p					  	->  Print current command
prompt				||	\R					  	->  Change your mysql prompt 
													(prompt tharinda>; changes prompt to tharinda>)
												    (prompt; changes the prompt back to the default mysql>)
rehash				||  \#						->  Rebuild completion hash
source				||  \.						->  Execute an SQL script file (Takes a file name as an argument) 
status				||  \s 						->  Get status information from the server
tee 				||  \T 						->  Set outfile [to_outfile] (Append everything into given outfile)
use					||  \u 						->  Use another database (Takes database name as argument)
charset				||  \C 						->  Switch to another charset (Can be needed for processing binlog with multi-byte charsets)
warnings			||  \W 						->  Show warnings after every statement
nowarning			||  \w 						->  Do not show warnings after every statement
resetconnection		||  \x						->  Clear sesssion context


-- More on help commands

?  ||  help  ||  \?  ||  \h

help contents  ->  For server side help

help <item>    ->  <item> is one of the categories that is on the screen after 'help content' command
				   eg: help data types, help functions, help data definition, help data manipulation etc.

help <item>    ->  <item is one of the topics under the selected category
				   eg: help double, help float, help date, help time, help int, help integer etc.


--Creating Tables and Constraints

CREATE TABLE Student (
	--student_id INT PRIMARY KEY,
	--student_id INTEGER,
	student_id INT,
	--student_id INT AUTO_INCREMENT,
	--major VARCHAR(20),
	major VARCHAR(20) DEFAULT 'undecided',
	name VARCHAR(20),
	--name VARCHAR(20) NOT NULL,  --name be a null value
	--major VARCHAR(20) UNIQUE,   --major field has to be unique for each row in this table (2 students can't have the same major)
	PRIMARY KEY(student_id)       --The primary key is both NOT NULL and UNIQUE by default
);

CREATE TABLE Student (
	student_id INT AUTO_INCREMENT,
	major VARCHAR(20) DEFAULT 'undecided',
	name VARCHAR(20),
	PRIMARY KEY(student_id)
);


--Inserting Data

INSERT INTO Student VALUES(1, 'Jack', 'Biology');

--If using AUTO_INCREMENT
INSERT INTO Student(name, major) VALUES('Claire', 'IT');
INSERT INTO Student(name, major) VALUES('Danny', 'CS');
INSERT INTO Student(name, major) VALUES('Claire', 'IT'), 
										('Danny', 'CS');

INSERT INTO Student(student_id, major, name) VALUES(2, 'Sociology', 'Kate');

INSERT INTO Student(student_id, name) VALUES(3, 'Claire');
--If default value is not given, major will be set to NULL
--If default value is given, major will be set to that default value 

INSERT INTO Student VALUES(8, 'Jack', NULL);

INSERT INTO Student VALUES(4, 'John', 'Maths'),
						  (5, 'Cena', 'Physics');

INSERT INTO Student(student_id, major, name) VALUES(6, 'SE', 'Daniel'),
												   (7, 'Engineering', 'Bryan');


--Useful commands to work with tables

DESCRIBE Student;

DROP TABLE Student;

ALTER TABLE Student
ADD gpa DECIMAL(3, 2);

ALTER TABLE Student
DROP COLUMN gpa;


--Comparison Operators--

--		=  : equals
--		<> : not equals
--		>  : greater than 
--		<  : less than
--		>= : greater than or equal
--		<= : less than or equal


--Update

UPDATE Student
SET major = 'ICT'
WHERE major = 'IT';

UPDATE Student
Set major = 'Bio'
WHERE student_id = 2;

UPDATE Student
SET major = 'Bio-Chemistry'
WHERE major = 'BIO' OR major = 'Chemistry'; 

UPDATE Student
SET name = 'Tom', major = 'undecided'
WHERE student_id = 1;

--Updating all rows in the tudent table
UPDATE Student
SET name = 'Tom', major = 'undecided';


--Delete

--Deleting all the rows in the Student table
DELETE
FROM Student;

DELETE
FROM Student 
WHERE student_id = 5; 

DELETE
FROM Student
WHERE name = 'Tom' AND major = 'undecided';


--Select

SELECT *
FROM Student;

SELECT student_id, name, major
FROM Student;

SELECT name
FROM Student;

SELECT name, major
FROM Student;

SELECT Student.name, Student.major
FROM Student;

SELECT name, major
FROM Student
ORDER BY name;
--ASC by default (ascending)

SELECT name, major
FROM Student
ORDER BY name ASC;

SELECT name, major
FROM Student
ORDER BY name DESC;
--descending order

SELECT name, major
FROM Student
ORDER BY student_id DESC;


--First order by major in acsending order and in case there are students with same major, 
--then order further with student_id in ascending order
SELECT *
FROM Student
ORDER BY major, student_id;

SELECT *
FROM Student
ORDER BY major, student_id DESC;

SELECT *
FROM Student
ORDER BY major DESC, student_id DESC;


--LIMIT

SELECT *
FROM Student
LIMIT 2;

SELECT *
FROM Student
ORDER BY student_id DESC
LIMIT 2;


--WHERE

SELECT * 
FROM Student
WHERE major = 'Biology';

SELECT student_id, name 
FROM Student
WHERE major = 'Biology' OR major = 'Chemistry';

SELECT student_id, name 
FROM Student
WHERE major = 'Biology' OR name = 'Kate';

SELECT * 
FROM Student
WHERE major <> 'ICT';

SELECT * 
FROM Student
WHERE student_id < 3;

SELECT * 
FROM Student
WHERE student_id <= 3 AND name <> 'Jack';


--IN

SELECT * 
FROM Student
WHERE name IN ('Claire', 'Kate', 'Mike');

--The above query is equal to this query
SELECT * 
FROM Student
WHERE name = 'Claire' OR name = 'Kate' OR name = 'Mike';


--The 2 queries below are equal
SELECT * 
FROM Student
WHERE major IN ('CS', 'SE') AND student_id > 2;

SELECT * 
FROM Student
WHERE (major = 'CS' OR major = 'SE') AND student_id > 2;


--The 2 queries below are equal
SELECT * 
FROM Student
WHERE major = 'CS' OR major = 'SE' AND student_id > 2;

SELECT * 
FROM Student
WHERE major = 'CS' OR (major = 'SE' AND student_id > 2);



--More complex queries with the company databse


--Basic Concepts

--Primary key
--Foreign key
--Attributes
--Composite key


--Tables

--Employee
--Branch
--Branch_Supplier
--Client
--Works_With


--Recursive Relationships

--eg: supervisor_id in the Employee table is a foreign key which refers another employee (employee_id)
--	  (The supervisor of an employee is another employee)
--	  The Employee table has to refer itself here
--	  Andy's (emp id = 107) supervisor is Josh (emp_id = 106)


--Implementing the database

CREATE TABLE Employee (
	emp_id INT,
	first_name VARCHAR(20),
	last_name VARCHAR(20),
	birth_date DATE,
	sex CHAR(1),
	salary INT,
	super_id INT,
	branch_id INT,

	CONSTRAINT emp_pk PRIMARY KEY(emp_id)
);
--Can't define foreign keys (super_id & branch_id) yet, as neither Employee nor Branch table are created yet

CREATE TABLE Branch (
	branch_id INT,
	branch_name VARCHAR(20),
	mgr_id INT,
	mgr_start_date DATE,

	CONSTRAINT branch_pk PRIMARY KEY(branch_id),

	CONSTRAINT branch_fk FOREIGN KEY(mgr_id) REFERENCES Employee(emp_id) ON DELETE SET NULL
	--another option:-  ON DELETE CASCADE
	--Foreign keys having ON DELETE or ON UPDATE is optional
);

ALTER TABLE Employee
ADD FOREIGN KEY(branch_id) REFERENCES Branch(branch_id) ON DELETE SET NULL;

ALTER TABLE Employee
ADD CONSTRAINT emp_fk1 FOREIGN KEY(branch_id) REFERENCES Branch(branch_id) ON DELETE SET NULL;

ALTER TABLE Employee
ADD FOREIGN KEY(super_id) REFERENCES Employee(emp_id) ON DELETE SET NULL;

ALTER TABLE Employee
ADD CONSTRAINT emp_fk2 FOREIGN KEY(super_id) REFERENCES Employee(emp_id) ON DELETE SET NULL;

CREATE TABLE Client (
	client_id INT,
	client_name VARCHAR(40),
	branch_id INT,

	CONSTRAINT client_pk PRIMARY KEY(client_id),

	CONSTRAINT client_fk FOREIGN KEY(branch_id) REFERENCES Branch(branch_id) ON DELETE SET NULL
);

CREATE TABLE Works_With (
	emp_id INT,
	client_id INT,
	total_sales INT,

	CONSTRAINT works_with_pk PRIMARY KEY(emp_id, client_id),

	CONSTRAINT works_with_fk1 FOREIGN KEY(emp_id) REFERENCES Employee(emp_id) ON DELETE CASCADE,
	CONSTRAINT works_with_fk2 FOREIGN KEY(client_id) REFERENCES Client(client_id) ON DELETE CASCADE
 );

CREATE TABLE Branch_Supplier (
	branch_id INT,
	supplier_name VARCHAR(40),
	supply_type VARCHAR(40),

	CONSTRAINT branch_supplier_pk PRIMARY KEY(branch_id, supplier_name),

	CONSTRAINT branch_supplier_fk FOREIGN KEY(branch_id) REFERENCES Branch(branch_id) ON DELETE CASCADE
);


--When foreign key is a primary key as well, ON DELETE CASCADE was used
--When foreign key is not a primary key, ON DELETE SET NULL was used


--When two tables have a circuliar relationship (when two tables refer each other with foreign keys), 
--  1. First insert data to one table with NULL values for the foreign key (as the referenced table doesn't have relevant data yet)
--  2. Then insert relevant data to the second table and refer it with the first table
--  3. Then update the first table tuple with the referencing data from the second table


--SELECT Queries

SELECT * 
FROM Employee;

SELECT *
FROM Branch;

SELECT *
FROM Branch_Supplier;

SELECT *
FROM Client;

SELECT *
FROM Works_With;



