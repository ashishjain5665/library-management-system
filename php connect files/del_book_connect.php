<?php 
$aa=$_POST['a'];
if($aa==""){
	echo"fill all details";
}
	else{
		mysql_connect("localhost","root","");
		mysql_select_db("library management system");
		$query="SELECT * FROM book WHERE book_id='$aa'";
		$r = mysql_query($query);
		$c=mysql_num_rows($r);
		if($c > 0){
			$query1=" DELETE FROM book WHERE book_id='$aa' ";
			mysql_query($query1);
			echo"done";
	}
	else{
			echo"book does not exists";
	}
}

?>