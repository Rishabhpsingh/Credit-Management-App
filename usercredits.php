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
	<h1><font color="red">User Credits</font></h1>
	<table border="1" cellspacing="0" cellpadding="5">
		<tr>
			<th>Credits</th>
		</tr>

<?php
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn-> connect_error){
	die("Connection failed:".$conn->connect_error);
}
$sql="select Credits from info;";
$result=$conn->query($sql);

if ($result-> num_rows > 0) {
	while($row = $result-> fetch_assoc()){
		echo "<tr><td>".$row["Credits"]."</td></tr>.";

	}

	echo "</table>";
}
else{
	echo "0 result";
}

mysqli_close($conn);
?>

</center>
</body>
</html>