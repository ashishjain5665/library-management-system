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
<p class="vir" >update_student_semester</p>
<form method="POST" action="f.php">
	<table cellpadding="30" align="center">

				<tr><td><font size="50">Enter the student id</td> <td>:</td> <td><input type="number" name="ii"></td></tr>	
	
			<tr>	<td><font size="50">Enter Student semester</td>		<td>:</td>		 <td> <select name="a">
																			<option value="1">first</option>
																			<option value="2">second</option>
																			<option value="3">third</option>
																			<option value="4">fourth</option>
																			<option value="5">fifth</option>
																			<option value="6">sixth</option>
																			<option value="7">seventh</option>
																			<option value="8">eight</option>
																			</select></td></tr>

				
			<tr>	<td><font size="50">Enter Student semester</td>		<td>:</td>		 <td> <select name="b">
																			<option value="1">first</option>
																			<option value="2">second</option>
																			<option value="3">third</option>
																			<option value="4">fourth</option>
																			<option value="5">fifth</option>
																			<option value="6">sixth</option>
																			<option value="7">seventh</option>
																			<option value="8">eight</option>
																			</select></td></tr>
				<tr><td><input type="submit" value="update"></td></tr>
	</table>
</form>
</html>