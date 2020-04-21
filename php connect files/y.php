<?php
$aa=$_POST['a'];
$bb=$_POST['b'];
$cc=$_POST['c'];
if($aa == "" || $bb == "" ||$cc==""){
	echo"fill all details";
}
elseif($cc != $bb){
	echo "fill the entries carefully";
}
else{
	mysql_connect("localhost","root","");
	mysql_select_db("library management system");
	$query = "SELECT * FROM book WHERE book_id='$aa'";
	$r = mysql_query($query);
	$c = mysql_num_rows($r);

	if($c > 0){
			$query1 = "UPDATE book SET book_author='$bb' WHERE book_id='$aa'";
			mysql_query($query1);
			echo"done";
			}
}
?>