<?php 
$aa=$_POST['a'];
$bb=$_POST['b'];
if($aa == "on" && $bb == "on"){
	header("location:index.php");
}
elseif ($aa=="on") {
	header("location:login_admin.php");
}
elseif ($bb=="on") {
	header("location:login_student.php");
}
else{
	header("location:index.php");
	echo"select at least one option";
}

?>