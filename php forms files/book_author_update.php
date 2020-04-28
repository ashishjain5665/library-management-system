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
<p class="vir" >update_book_author</p>
<form method="POST" action="y.php">
	<table cellpadding="10" align="center">
		<tr><td><font size = "60">Enter the book id</font></td> <td>:</td> <td><input type="number" name="a"></td></tr>
		<tr><td><font size = "60">Enter the new author name</font></td><td>:</td> <td><input type="text" name="b"></td></tr>
		<tr><td><font size = "60">rewrite the new author name</font></td> <td>:</td> <td><input type="text" name="c"></td></tr>
		<tr><td><input type="submit" value="update"></td></tr>
	</table>
</form>
</body>
</html>