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
<p class="vir" >Welcome_Student</p>

<form method="POST" action="welcome_student_connect.php">
	<table cellpadding="50" align="center">
		<tr><td><font size="50">Enter what u want to do</td> <td>:</td> <td><select name="a">
															<option value="1">view books</option>
															<option value="2">issue books</option>
															<option value="3">return books</option>
															</select></td></tr>
		<tr><td colspan="3" align="center"> <input type="submit" value="go"></td></tr>		
	</table>
</form>
</html>