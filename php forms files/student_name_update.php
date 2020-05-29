<html>
<style>
.vir
{

width:800px;
text-decoration:underline;
font-size:120px;
color:#fff;		
margin-left: 300px;
margin-bottom: 0px;
font-family:Brush Script Std;
}

</style>
<body background="web.jpg" style="margin:0px; padding:0px; position:fixed; margin:0px; opacity:0.9; z-index:-1; height:100%; width:100%">
<p class="vir" >update_student_name</p>
<form method="POST" action="b.php">
	<table cellpadding="30" align="center">
		<tr><td><font size="50">Enter the student id</td> <td>:</td> <td><input type="number" name="ii"></td></tr>	
	<tr><td><font size="50">Enter the name</td> <td>:</td> <td><input type="text" name="a"></td></tr>
	<tr><td><font size="50">Reconfirm name</td> <td>:</td> <td><input type="text" name="b"></td></tr>
	<tr><td><input type="submit" value="update"></td></tr>
</form>
</html>