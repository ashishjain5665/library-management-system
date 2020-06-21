<html>
<style>
.vir
{

width:800px;
text-decoration:underline;
font-size:120px;
color:#fff;		
margin-left: 100px;
margin-bottom: 0px;
font-family:Brush Script Std;
}

</style>
<body background="web.jpg" style="margin:0px; padding:0px; position:fixed; margin:0px; opacity:0.9; z-index:-1; height:100%; width:100%">
<p class="vir" >Update_book_information</p>

	<form method="POST" action="up_book_connect.php">
		<table cellpadding="30" align="center"><tr><td><font size="50">Enter what you want to do :</td> 		 <td>:</td>		<td><select name="a"><option value="1">update book name</option>
																							<option value="2">update book author name</option>
																							<option value="3">update number of books available</option>

																							</select></td></tr>
		<tr><td colspan="3" align="center"><input type="submit" value="update"></td></tr>
			</table>
	</form>
</html>