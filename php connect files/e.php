<?php 
$i=$_POST['ii'];
$aa=$_POST['a'];
$bb=$_POST['b'];
if($aa != $bb){
	echo"please fill the entries carefully";
	header("location:student_semester_update.php");
}
else{
	mysql_connect("localhost","root","");
	
	mysql_select_db("library management system");
	$query = "SELECT * FROM student WHERE stu_id = '$i'";
	$r=mysql_query($query);
	$c =mysql_num_rows($r);
	if($c ==0){
		echo"not exists";
	}
	else{
	$query1 = "UPDATE student SET stu_section ='$aa' where stu_id='$i'";
	mysql_query($query1);
	echo"done";
	} 
}

?>