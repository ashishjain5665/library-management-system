<?php
mysql_connect("localhost","root","");
mysql_select_db("library management system");
$q="SELECT * FROM student";
$result = mysql_query($q); 
echo "<table border='5' cellpadding='10' align='center'>";
echo "<img src='web.jpg' style='margin:0px; padding:0px; position:fixed; margin:0px; opacity:0.9; z-index:-1; height:100%; width:100%'";
	echo "<tr> <td><b>student id</b></td> <td><b>student password</b></td>   <td><b>student name</b></td> <td><b>year</b></td> <td><b>branch</b></td> <td><b>section</b></td> <td><b>semester</b></td> <td><b>book issued name</b></td ><td><b>book issue date</b></td> <td><b>book return</b></td> <td><b>return date</b></td> </tr>";
while($row=mysql_fetch_array($result))
{
	
	echo "<tr>";

	echo "<td>".$row[0]."</td>";
	echo "<td>".$row[1]."</td>";
	echo "<td>".$row[2]."</td>";
	echo "<td>".$row[3]."</td>";
	echo "<td>".$row[4]."</td>";
	echo "<td>".$row[5]."</td>";
	echo "<td>".$row[6]."</td>";
	echo "<td>".$row[7]."</td>";
	echo "<td>".$row[8]."</td>";
	echo "<td>".$row[9]."</td>";
	echo "<td>".$row[10]."</td>";


	echo "</tr>";
	
}
echo "</table>";
?>