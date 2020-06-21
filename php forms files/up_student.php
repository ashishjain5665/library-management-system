<html>
	<style>
.vir
{

width:800px;
text-decoration:underline;
font-size:120px;
color:#fff;		
margin-left: 150px;
margin-bottom: 0px;
font-family:Brush Script Std;
}

</style>
<body background="web.jpg" style="margin:0px; padding:0px; position:fixed; margin:0px; opacity:0.9; z-index:-1; height:100%; width:100%">
<p class="vir" >Update_student_details</p>

	<form method="POST" action="up_student_connect.php">
		<table cellpadding="30" align="center">
			<tr>	<td><font size="50">Enter What you want to change</td>		<td>:</td>		 <td> <select name="b">
																				<option value="2">password</option>
																				<option value="3">name</option>
																				<option value="4">year</option>
																				<option value="5">branch</option>
																				<option value="6">section</option>
																				<option value="7">semester</option>
																				</select></td></tr>
			<tr><td colspan="3" align="center"><input type="submit" value="update"></td></tr>
		</table>
	</form> 
</html>

