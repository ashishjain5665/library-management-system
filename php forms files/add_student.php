<html>
<style>
.vir
{

width:800px;
text-decoration:underline;
font-size:120px;
color:#fff;		
margin-left: 750px;
margin-bottom: 0px;
font-family:Brush Script Std;
}

</style>
<body background="web.jpg" style="margin:0px; padding:0px; position:absolute; margin:0px; opacity:0.9; z-index:-1; height:100%; width:100%">
	<p class="vir">Add new student</p>
	<form method="POST" action="add_student_connect.php">
		<table cellpadding="30" align="center">
			<tr>	<td><font size = "40">Enter student id</font></font></td>	<td>:</td>	 <td><input type="number" name="a" /></td>	</tr>

			<tr>	<td><font size = "40">Enter student password</font></td>		<td>:</td>		<td> <input type="text" name="b" /></td>	</tr>
			
			<tr>	<td><font size = "40">Enter student name</font></td>		<td>:</td>		<td><input type="text" name="c" /></td>	</tr>

			<tr>	<td><font size = "40">Enter student year </font></td>	<td>:</td>		<td><select name="d">
																				<option value="1">first year</option>
																				<option value="2">second year</option>
																				<option value="3">third year</option>
																				<option value="4">fourth year</option> 
																				</select></td>		</tr>

			<tr>	<td><font size = "40">Enter student Branch</font></td>		<td>:</td> 		<td><select name="e">
																			<option value="computer science">CSE</option>
																			<option value="information technology">IT</option>
																			<option value="mechanical">ME</option>
																			<option value="civil">CE</option> 
																			</select></td>		</tr>

				<tr>	<td><font size = "40">Enter student Section</font></td>		<td>:</td> 		<td><select name="s">
																			<option value="A">A</option>
																			<option value="B">B</option>
																			<option value="C">C</option>
																			<option value="D">D</option> 
																			</select></td>		</tr>

			<tr>	<td><font size = "40">Enter Student semester</font></td>		<td>:</td>		 <td> <select name="f">
																			<option value="1">first</option>
																			<option value="2">second</option>
																			<option value="3">third</option>
																			<option value="4">fourth</option>
																			<option value="5">fifth</option>
																			<option value="6">sixth</option>
																			<option value="7">seventh</option>
																			<option value="8">eight</option>
																			</select></td></tr>
			<tr><td><input type="submit" value="ADD" /></td></tr>
		</table>
	</form> 
</body>
</html>

