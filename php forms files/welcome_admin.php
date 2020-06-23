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
<p class="vir" >welcome Admin</p>
	<form method="POST" action="welcome_admin_connect.php">
	<font size="70"><table cellpadding="30" align="center"><tr><td colspan="2" align="center">	<font size="50">Enter what do you want to do:  </font></td> <td></td></tr>
	<tr><td colspan="2" align="center">
	<select name="s">
    <option value="1">Add a new student</option>
    <option value="2">Delete a student</option>
    <option value="3">Update a student details</option>
    <option value="4">Add a new book</option>
    <option value="5">Delete a book</option>
    <option value="6">Update a book info</option>
    <option value="7">view all students</option>
    <option value="8">view all books</option>
    <option value="9">issue a books</option>
    <option value="10">return a books</option>
	</td></tr>    
    </select><br><br>
    <tr><td></td><td align="center"><input type="submit" value="submit"></td></tr>
    </font>
	</form>
</html>