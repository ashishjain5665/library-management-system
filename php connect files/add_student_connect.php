<?php 
$aa=$_POST['a'];

$bb=$_POST['b'];

$cc=$_POST['c'];
$dd=$_POST['d'];
$ee=$_POST['e'];
$ff=$_POST['f'];
$ss=$_POST['s'];

	if($aa ==""|| $bb=="" || $cc=="" || $dd=="" || $ee=="" || $ff==""||$ss=="")
	{
		echo"Fill all details";
	}

	else{
		mysql_connect("localhost","root","");
		mysql_select_db("library management system");
		$query="INSERT INTO student VALUES('$aa','$bb','$cc','$dd','$ee','$ss','$ff','','','','','')";
		mysql_query($query);
		echo "Addition is done";
	}

?>