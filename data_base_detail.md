## Library management system 

we use wamp server

#### we have basically three entities:
<b>

1.	Student

2.	Book

3.	Admin
</b>
Student is connected to books as it can issue the book, return the book and view all the books available.

Admin is related with the student as it can add a student, delete a student and update the basic information of the student. Admin is related to the book as it can add a book, delete a book and update a book.

Our main task is to create a library system in which admin and student can login and perform fucntion associated with admin or student. 

For this query we have used my PHP admin databases and create a new database named as library management system. In which we have created three tables:

1.	<b>Student</b> --> Attributes (stu_id int(10), password varchar(50), stu_name varchar(50), stu_year int(10), stu_branch varchar(50), stu_section varchar(50), stu_semester int(10), issued_book_name varchar(50), issued_date date, book_returned _date date, book_issue int(1), fine int(10)).

2.	<b>Book</b> --> Attributes( Book_id int(20), Book_name varchar(50), Book_author varchar(50), no_of_book_available int(10)).

3.	<b>Admin</b> --> Attributes(Ad_id int(10), Ad_name varchar(50), Ad_password(50), year_of_joining int(4), phone_no varchar(10)).

<img src="https://user-images.githubusercontent.com/52023930/78266221-1aabe700-7523-11ea-937c-4a1fde7d5f82.PNG" width=700 height=300>
<br><br>

<img src="https://user-images.githubusercontent.com/52023930/78266224-1bdd1400-7523-11ea-916c-7b367d9a732d.PNG" width=700 height=300>
<br><br>

<img src="https://user-images.githubusercontent.com/52023930/78266226-1c75aa80-7523-11ea-8077-d1b42e18f6ef.PNG" width=700 height=300>
<br><br>
