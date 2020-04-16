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
		echo"<a href='return_book.php'> click here to renter </a>";
	}
	elseif($c1 == 0){
		echo"book with book id not exists".$bb."";
		echo"<a href='return_book.php'> click here to renter </a>";
	}
	else{
		$query3 = "SELECT * FROM student WHERE stu_id='$aa'";
		$r2 = mysql_query($query3);
		$qwqw3 = mysql_fetch_array($r2);

		if($qwqw3[10] == 0){
			echo"student does not borrow any book yet";
			echo"<a href='return_book.php'> click here to return another book</a>";		
		}

		else{
				$q="SELECT * FROM book WHERE book_id='$bb'";
				$e=mysql_query($q);
				$qwqw2 = mysql_fetch_array($e);
				$qwqw2[3] = $qwqw2[3]+1;

				$query3= "UPDATE book SET no_of_book_available='$qwqw2[3]' WHERE book_id='$bb'";
				mysql_query($query3);

				$query4="UPDATE student SET book_return_date='$cc' WHERE stu_id='$aa'";
				mysql_query($query4);			
					
				$query5= "UPDATE student SET book_issued = '0' WHERE stu_id='$aa'";
				mysql_query($query5);
				
				$query8 = "SELECT * FROM student WHERE stu_id='$aa'";
				$r8=mysql_query($query8);
				$qwqw4=mysql_fetch_array($r8);
				$is = $qwqw4[8];

				$start_date = strtotime($is); 
				$end_date = strtotime($cc); 
				$diff = ($end_date - $start_date)/60/60/24;
				echo "Difference between two dates: ".$diff; 

				if($diff > 30){
					$diff = $diff -30;
					$fi = $diff * 10;
				}

				$query9= "UPDATE student SET fine= '$fi' WHERE stu_id='$aa'";
				mysql_query($query9);
				

				echo "book return successfully";
					}		
		}
	
}
?>