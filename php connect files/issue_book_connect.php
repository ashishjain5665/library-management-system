<?php
$aa=$_POST['a'];
$bb=$_POST['b'];
$cc=$_POST['c'];
if($aa=="" || $bb==""){
	header("location:issue_book.php");
}

else{
	mysql_connect("localhost","root","");
	mysql_select_db("library management system");
	$query = "SELECT * FROM student WHERE stu_id='$aa'";
	$query1 = "SELECT * FROM book WHERE book_id='$bb'";
	$r = mysql_query($query);
	$r1 = mysql_query($query1);
	$c=mysql_num_rows($r);
	$c1=mysql_num_rows($r1);

	if($c == 0){
		echo"student with student id not exists".$aa."";
		echo"<a href='issue_book.php'> click here to renter </a>";
	}
	elseif($c1 == 0){
		echo"book with book id not exists".$bb."";
		echo"<a href='issue_book.php'> click here to renter </a>";
	}
	else{
		$query3 = "SELECT * FROM book WHERE book_id='$bb'";
		$r2 = mysql_query($query3);
		$qwqw3 = mysql_fetch_array($r2);

		if($qwqw3[3] == 0){
			echo"book not available at this time";
			echo"<a href='issue_book.php'> click here to issue another book</a>";		
		}

		else{
			$wq = "SELECT * FROM student WHERE stu_id='$aa'";
			$e1=mysql_query($wq);
			$qwqw5 = mysql_fetch_array($e1);
			$va = $qwqw5[11];
			if($va > 0 ){
				echo"student have previous fine of ruppess ".$va." first pay this fine to the librarian then u will able to issue next book";
			} 	
			else{
					$q="SELECT * FROM student WHERE stu_id='$aa'";
					$e=mysql_query($q);
					$qwqw2 = mysql_fetch_array($e);
				if($qwqw2[10] == 1){
					echo "student already  can issue one book at a time";
					echo"<a href='issue_book.php'>try again</a>";
				}
				else{
					$qwqw = mysql_fetch_array($r1);
					$qwqw[3] = $qwqw[3] - 1;

					$query3= "UPDATE book SET no_of_book_available='$qwqw[3]' WHERE book_id='$bb'";
					mysql_query($query3);

					$query4="UPDATE student SET issued_date='$cc' WHERE stu_id='$aa'";
					mysql_query($query4);			
						
					$query5= "UPDATE student SET book_issued = '1' WHERE stu_id='$aa'";
					mysql_query($query5);
							
					$query6= "SELECT * FROM book WHERE book_id='$bb'";
					$var = mysql_query($query6);
					$qwqw1 = mysql_fetch_array($var);

					$query7 = "UPDATE student SET issued_book_name= '$qwqw1[1]' WHERE stu_id='$aa'";
					mysql_query($query7);
					$query8 = "UPDATE student SET book_return_date= '' WHERE stu_id='$aa'";
					mysql_query($query8);
					
					echo "book issued successfully"; 
					}
					}		
		}
	}
}
?>