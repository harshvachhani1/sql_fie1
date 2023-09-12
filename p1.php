<!-- practice this all query -->

<!-- build database -->
create database bookstore;

<!-- show database -->
show databases;

<!-- use database -->
use database_name;

<!-- drop database & table-->
DROP database_name;
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

<!-- any time show only one column then use this -->

SELECT column_name,column_name FROM table_name;



