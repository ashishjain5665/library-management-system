<?php 
$aa=$_POST['a'];
$bb=$_POST['b'];

if($aa=="" || $bb==""){
	echo "fill all details";
}
else{
	mysql_connect("localhost" ,"root" ,"");
	mysql_select_db("library management system");
	$query = "SELECT * FROM student WHERE (stu_id ='$aa' AND password = '$bb')";
	$result = mysql_query($query);
	$count =mysql_num_rows($result);
	if($count >0){
		header("location:welcome_student.php");
	}
	else{
		echo"student with this id      \"  ".$aa." \"   and password  \" " .$bb." \" not exists";
		echo"<b><br><font size=100></center><a href='login_student.php'>if u want to retry click</font></b></a><center>";
	}
}
?>