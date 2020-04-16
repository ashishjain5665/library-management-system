<?php 
$aa=$_POST['a'];
$bb=$_POST['b'];

if($aa=="" || $bb==""){
	echo "fill all details";
}
else{
	mysql_connect("localhost" ,"root" ,"");
	mysql_select_db("library management system");
	$query = "SELECT * FROM admin WHERE (ad_id='$aa' AND ad_password='$bb')";
	$result = mysql_query($query);
	$count =mysql_num_rows($result);
	if($count >0){
		header("location:welcome_admin.php");
	}
	else{
		echo"student with this id      \"  ".$aa." \"   and password  \" " .$bb." \" not exists";
		echo"<b><br><font size=100></center><a href='login_admin.php'>if u want to retry click</font></b></a><center>";
	}
}
?>