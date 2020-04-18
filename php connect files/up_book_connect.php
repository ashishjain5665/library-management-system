<?php  
$aa=$_POST['a'];

if($aa== "1"){
 header("location:book_name_update.php");
}

elseif($aa=="2"){
header("location:book_author_update.php");
}

elseif($aa=="3"){
header("location:book_no._update.php");
}

?>