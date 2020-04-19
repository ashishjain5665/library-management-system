<?php
mysql_connect("localhost","root","");
mysql_select_db("library management system");
$q="SELECT * FROM book";
$result = mysql_query($q); 
echo "<table border='5' cellpadding='10' align='center'>";
echo "<img src='web.jpg' style='margin:0px; padding:0px; position:fixed; margin:0px; opacity:0.9; z-index:-1; height:100%; width:100%'";
echo "<tr> <td><b>book id</b></td> <td><b>book name</b></td>   <td><b>book author</b></td> <td><b>no.of book available</b></td></tr>";
while($row=mysql_fetch_array($result))
{
	echo "<tr> <td>".$row[0]."</td> <td>".$row[1]."</td> <td>".$row[2]."</td> <td>".$row[3]."</td> </tr>";
}
echo "</table>";
echo"<a href='issue_book.php'>to issue a book click here</a>";
?>