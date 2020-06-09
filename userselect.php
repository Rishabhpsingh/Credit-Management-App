<?php
$servername="localhost";
$username="root";
$password="";
$dbname="users";
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Select</title>
	<style type="text/css">
		table{
			border-color: red;
			border-width: 5px;
			width: 30%;
			height: 100%;
			background: aqua;
		}
		table th{
			color: blue;
		}
	</style>
</head>
<body bgcolor="orange">
<center>
	<h1><font color="red">SELECT USER</font></h1>
	<table id="table" border="1" cellspacing="0" cellpadding="5">
		<tr>
			<th>Select User Name</th>
		</tr>

<?php
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn-> connect_error){
	die("Connection failed:".$conn->connect_error);
}
$sql="select Name from info;";
$result=$conn->query($sql);

if ($result-> num_rows > 0) {
	while($row = $result-> fetch_assoc()){
		echo "<tr><td>".$row["Name"]."</td></tr>";
       
	}

	echo "</table>";
}
else{
	echo "0 result";
}

mysqli_close($conn);
?>

</center>
<script type="text/javascript">
	var table=document.getElementById('table'),rIndex;
	for(var i=1;i<table.rows.length;i++)
	{
		table.rows[i].onclick=function(){
			
			document.getElementById('sender').value=this.cells[0].innerHTML;
		};
	}
</script>
</body>
</html>