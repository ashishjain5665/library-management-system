<?php 
$aa=$_POST['s'];
if($aa == "1")
{
	echo"hello";
	header("location:add_student.php");
}

elseif($aa == "2"){
	header("location:del_student.php");
}
elseif($aa == "3"){
	header("location:up_student.php");
}
elseif($aa == "4"){
	header("location:add_book.php");
}
elseif($aa == "5"){
	header("location:del_book.php");
}
elseif($aa == "6"){
	header("location:up_book.php");
}
elseif($aa == "7"){
	header("location:view_student.php");
}
elseif($aa == "8"){
	header("location:view_book.php");
}

elseif($aa == "9"){
	header("location:issue_book.php");
}
elseif($aa == "10"){
	header("location:return_book.php");
}


?>