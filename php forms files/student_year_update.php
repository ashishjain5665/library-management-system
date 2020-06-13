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
<p class="vir" >update_student_year</p>
<form method="POST" action="c.php">
	<table cellpadding="30" align="center">
		<tr><td><font size="50">Enter the student id</td> <td>:</td> <td><input type="number" name="ii"></td></tr>	
	<tr><td><font size="50">Enter the year</td> <td>:</td> <td>									<select name="a">
																				<option value="1">first year</option>
																				<option value="2">second year</option>
																				<option value="3">third year</option>
																				<option value="4">fourth year</option> 
																				</select></td></tr>

	<tr><td><font size="50">Reconfirm year</td> <td>:</td> <td>									<select name="b">
																				<option value="1">first year</option>
																				<option value="2">second year</option>
																				<option value="3">third year</option>
																				<option value="4">fourth year</option> 
																				</select></td></tr>
	<tr><td><input type="submit" value="update"></td></tr>
</form>
</html>