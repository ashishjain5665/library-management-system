<?php 
$bb=$_POST['b'];
		if($bb == "2"){
			header("location:student_password_update.php");
		}
		elseif($bb == "3"){
			header("location:student_name_update.php");
		}
		elseif($bb == "4"){
			header("location:student_year_update.php");
		}
		elseif($bb == "5"){
			header("location:student_branch_update.php");
		}
		
		elseif($bb == "6"){
			header("location:student_section_update.php");
		}
		elseif($bb == "7"){
			header("location:student_semester_update.php");
		}

			else
			{
				echo"student with student id ".$aa." not exists";
			}

?>