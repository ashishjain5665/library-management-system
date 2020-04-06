<?php
$aa=$_POST['a'];
mysql_connect("localhost","root","");
mysql_select_db("library management system");
$query="SELECT * FROM student WHERE stu_id='$aa' ";
$result=mysql_query($query);
$count = mysql_num_rows($result);
if($count > 0){
	$query1 = "DELETE FROM student WHERE stu_id='$aa'";
	mysql_query($query1);
	echo"deletion successfull";
}
else{
	echo"Student with student id ".$aa." not exists";
}

?>