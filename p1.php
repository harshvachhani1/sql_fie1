<!-- practice this all query -->

<!-- build database -->
create database bookstore;

<!-- show database -->
show databases;

<!-- use database -->
use database_name;

<!-- drop database & table-->
DROP DATABASE database_name;
DROP TABLE table_name;

<!-- create table -->

DROP TABLE IF EXISTS books;
CREATE TABLE books
(
  id              int unsigned NOT NULL auto_increment, 
  title           varchar(255) NOT NULL,             
  author          varchar(255) NOT NULL,               
  price           varchar(255) NOT NULL,   
  PRIMARY KEY     (id)
);

<!--table schema -->
explain table_name;

<!-- insert data & multiple-->
INSERT INTO table_name (column_name,column_nam,column_nam) VALUES ("Bhagavad Gita","Vyasa",500);

INSERT INTO table_name(title,author,price) VALUES ("Adventures of Tom Sawyer","mark twain",150),("A Passage to india","E.M Forster",50.5),("time machine","H.G wells",66);

<!-- show data -->
SELECT * FROM table_name;

<!-- Particular data show -->
SELECT * FROM table_name WHERE id = 4;

<!-- select any field -->

SELECT * FROM table_name WHERE title = "Bhagavad Gita";

<!-- show range of data using and & or-->

<!-- The AND operator displays a record if all the conditions are TRUE. -->
SELECT * FROM table_name WHERE price < 50 AND price > 500;

<!-- The OR operator displays a record if any of the conditions are TRUE. -->
SELECT * FROM table_name WHERE price < 50 OR price > 500;

<!-- ANY TIME SHOW ONLY ONE COLUMN THEN USE THAT -->

SELECT column_name,column_name FROM table_name;

<!-- Let’s assume as an example we’d like to get data about all books whose number of price is not equal to 150. -->
<!-- written as != both are same -->

SELECT * FROM books WHERE price!=50.55;
SELECT * FROM books WHERE price<>150;
SELECT * FROM books WHERE NOT price=150; <!-- check this price available or not -->

<!-- SEARCH IN A STRING CAN BE DONE WITH THE LIKE -->

SELECT title FROM books WHERE title LIKE '%a';  <!-- CHECK START -->
SELECT title FROM books WHERE title LIKE 'a%';  <!-- CHECK END -->
SELECT title FROM books WHERE title LIKE '%a%'; <!-- START AND END BOTH SIDE CHECK -->

<!-- ALIAS IA A LABEL COLUMN TITLE CHANGE TEMPORARY-->

SELECT title AS book_title, author AS name
FROM books
WHERE book = 'Bhagavad Gita' AND name = 'Vyasa';

SELECT column_name AS alias_name
FROM table_name;

<!-- CHECK VALUE IS NULL OR NOT NULL -->

SELECT * FROM books WHERE price IS NOT NULL; 
SELECT * FROM books WHERE price IS NULL;

<!-- AGGREGATE FUNCIONS -->

<!-- syntax : select sum(alias_name.column_name) as show_column_name from table_name as alias_name; -->
SELECT SUM(value.price) AS rate FROM books AS value;
SELECT SUM(price) FROM books;

SELECT AVG(price) FROM books;
SELECT AVG(TEMP_NAME.price) AS TEMP_COLU_NAME FROM books AS TEMP_NAME;

SELECT COUNT(price) FROM books;

SELECT MIN(price) FROM books;

SELECT Max(price) FROM books;

<!-- join query -->

<!-- SELECT * FROM TABLE1 JOIN TABLE2 ON TABLE1.COLUMN = TABLE2.COLUMN; -->

SELECT *  FROM books JOIN student ON books.id = student.book_id;
SELECT name FROM books JOIN student ON books.id = student.book_id;
SELECT name FROM books left JOIN student ON books.id = student.book_id;
SELECT name FROM books right JOIN student ON books.id = student.book_id;

select student.name,books.title from books join student on books.id=student.book_id where books.id=1; <!-- use this query when one item how many time in table -->

select student.name,contact,books.title from books join student on books.id=student.book_id where books.id=1;

<!-- JOIN USING WITH ALIAS -->

<!-- syntax :- SELECT alias_name.column_name as show_column_name, alias_name1.column_name1 as show_column_name1 from table_name as alias_name,table_name2 as alias_name1 where alias_name.column_name = alias_name1.column_name; -->

select bookname.title as book_name,stuname.name as student_name from books as bookname,student as stuname where bookname.id = stuname.id;

<!-- SYNTAX :- SELECT alias_name.column_name as show_colmn_name from table_name as alias_name; -->

SELECT book.title AS bookname FROM books AS book;

SELECT bookname.title as book_name, stuname.name as student_name from books as bookname,student as stuname;


<!-- CRETE TABLE,INSERT, UPDATE, DELETE, ALTER, MODIFY COLUMN-->

CREATE TABLE table_name(column_name DATATYPE NOT NULL auto_increment,PRIMARY KEY(ID));

INSERT TABLE table_name (column_name1,column_name2,column_name3) value('value1','value2','value3');

INSERT TABLE table_name SET column_name1='value1',column_name2='value2',column_name3='value3';

UPDATE table_name SET column_name='value' WHERE id=1;
UPDATE table_name SET column_name='' WHERE id=2; <!-- BLANK VALUE ADD -->

DELETE FROM table_name WHERE id=2;

ALTER TABLE table_name ADD new_column_name varchar(24) NOT NULL AFTER 'column_name';

ALTER TABLE table_name CHANGE old_column_name new_column_name DATATYPE NOT NULL;

ALTER TABLE table_name DROP column_name; <!-- DROP USE WHEN DROP COLUMN -->

<!-- MODIFY COLUMN -->

ALTER TABLE student MODIFY book_name varchar(255) not null;

<!-- GROUP BY (count record how many time repeat)-->

select count(id),title from books group by title;

select title,sum(price) as total from books group by title;

<!-- use a where condition in group by -->
select bktitle.title as book_name,count(*) as total from books as bktitle,student as stname where stname.book_id = bktitle.id group by bktitle.id;

<!-- without using alias and write group by-->
select sum(price) from books,student where student.book_id=books.id group by title;

select count(price) from books,student where student.book_id=books.id group by contact;

select books.title,student.book_name from books,student where student.book_name=books.title group by books.id;

select count(book_id) from books,student where books.id = student.book_id group by books.id;

select books.title, count(*) from books,student where books.id = student.book_id group by books.title;

select books.title, count(*) from books,student where books.id = student.book_id group by books.id;

select sum(price) from books,student where books.id = student.book_id group by books.id;

select count(*) from books,student where books.id = student.book_id group by books.id;

select * from books,student where books.id = student.book_id;