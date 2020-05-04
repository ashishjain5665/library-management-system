<html>
<style>
	
.vir
{

width:800px;
text-decoration:underline;
font-size:80px;
color:#fff;		
margin-left: 100px;
font-family:Brush Script Std;

text-shadow:0 0 20px  #ff005b;
}
</style>
<body background="web.jpg" style="margin:0px; padding:0px; position:fixed; margin:0px; opacity:0.9; z-index:-1; height:100%; width:100%">
	<p class="vir" >Library_Management_System</p>
<form name="f1" action="Connect.php" method="POST">
	<table cellpadding="30" align="center">

	<tr><td><font size="80">Login as Admin</font> </td><td>:</td> <td><input type="checkbox" name="a"></td></tr>
	<tr><td><font size="80">Login as Student</font></td> <td>:</td> <td><input type="checkbox" name="b"></td></tr>
	<tr><td ><input type="submit" value="go" onsubmit="valid()"></td>
	<td><input type="reset" value="reset"></td></tr>
</table>
</form>
</body>

</html>