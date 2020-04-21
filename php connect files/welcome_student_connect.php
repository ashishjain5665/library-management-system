<?php
$aa=$_POST['a'];
if($aa == '1'){
	header("location:view_book.php");
}
elseif($aa == '2'){
	header("location:issue_book.php");
}
elseif($aa == '3'){
	header("location:return_book.php");
}
?>