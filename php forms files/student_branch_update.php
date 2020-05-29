<html>
<style>
.vir
{

width:800px;
text-decoration:underline;
font-size:120px;
color:#fff;		
margin-left: 200px;
margin-bottom: 0px;
font-family:Brush Script Std;
}

</style>
<body background="web.jpg" style="margin:0px; padding:0px; position:fixed; margin:0px; opacity:0.9; z-index:-1; height:100%; width:100%">
<p class="vir" >update_student_branch</p>
<form method="POST" action="d.php">
	<table cellpadding="30" align="center">
	<tr><td><font size="50">Enter the student id</td> <td>:</td> <td><input type="number" name="ii"></td></tr>	
	
	<tr><td><font size="50">Enter the branch</td>  <td>:</td>  <td><select name="a">
																			<option value="computer science">CSE</option>
																			<option value="information technology">IT</option>
																			<option value="mechanical">ME</option>
																			<option value="civil">CE</option> 
																			</select></td></tr>
	<tr><td><font size="50">Reconfirm branch</td> <td>:</td> <td><select name="b">
																			<option value="computer science">CSE</option>
																			<option value="information technology">IT</option>
																			<option value="mechanical">ME</option>
																			<option value="civil">CE</option> 
																			</select></td></tr>
	<tr><td><input type="submit" value="update"></td></tr>
</form>
</html>