<?php 
$aa=$_POST['a'];
$bb=$_POST['b'];
$cc=$_POST['c'];
$dd=$_POST['d'];
if($aa==""|| $bb=="" || $cc==""||$dd==""){
	echo"fill all details";
}
else{
	mysql_connect("localhost","root","");
	mysql_select_db("library management system");
	$query="SELECT * FROM book WHERE book_id='$aa'";
	$r = mysql_query($query);
	$c=mysql_num_rows($r);
	if($c==0){
		$query1="INSERT INTO book VALUES('$aa','$bb','$cc','$dd')";
		mysql_query($query1);
		echo"done";
	}
	else{
		echo"book already exists";
	}
}

?>