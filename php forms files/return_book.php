<html>
<style>
.vir
{

width:800px;
text-decoration:underline;
font-size:120px;
color:#fff;		
margin-left: 400px;
margin-bottom: 0px;
font-family:Brush Script Std;
}

</style>
<body background="web.jpg" style="margin:0px; padding:0px; position:fixed; margin:0px; opacity:0.9; z-index:-1; height:100%; width:100%">
<p class="vir" >Return_book</p>

<script>
	function val(){
		var d=new Date();
		var y=d.getFullYear();
		var d1=d.getDate();
		var m=d.getMonth();
		
		if(m<10){
			m="0"+m;
		}
				
		if(d1<10){
			d1="0"+d1;
		}
				
		var s=y+"-"+m+"-"+d1;
		document.getElementById("c1").value = s;
	}
</script>

<form method="POST" action="return_book_connect.php" name="f1">
	<table name=t1 cellpadding="30" align="center">
		<tr><td><font size="50">Enter student id</td> <td>:</td> <td><input type="number" name="a"/></td></tr>
		<tr><td><font size="50">Enter book id</td> <td>:</td> <td><input type="number" name="b"/></td></tr> 
		<tr><td><font size="50">Date</td> <td>:</td> <td><input type="text" id="c1" name="c" /> <input type="button" value="get date" onclick="val()"></td></tr>

		<tr><td><input type="submit" value="return"/ ></td></tr>

	</table>

	
</form>
</body>
</html>
