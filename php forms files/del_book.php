<html>
<style>
.vir
{

width:800px;
text-decoration:underline;
font-size:120px;
color:#fff;		
margin-left: 450px;
margin-bottom: 0px;
font-family:Brush Script Std;
}

</style>
<body background="web.jpg" style="margin:0px; padding:0px; position:fixed; margin:0px; opacity:0.9; z-index:-1; height:100%; width:100%">
<p class="vir" >Delete book</p>
<form method="POST" action="del_book_connect.php">
	<table cellpadding="30" align="center">
		<tr><td><font size="50">Enter the id of the book you want to delete </td> <td>:</td> <td><input type="number" name="a"></td></tr>
		<tr><td colspan="3" align="center"><input type="submit" value="delete"></td></tr>
	</table>
</form>
</html>