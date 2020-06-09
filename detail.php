<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
	<style>
		table {
      border-color: red;
      border-width: 5px;
      width: 50%;
      height: 100%;
      border-radius: 15px;
    }
	</style>
</head>
<body>


<?php
$servername="localhost";
$username="root";
$password="";
$dbname="users";
?>
<table border="1" cellspacing="0" cellpadding="5">
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Credits</th>
		</tr>
<?php
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn-> connect_error){
	die("Connection failed:".$conn->connect_error);
}
$sql="select * from info;";
$result=$conn->query($sql);

if ($result-> num_rows > 0) {
	while($row = $result-> fetch_assoc()){
		echo "<tr><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["Credits"]."</td></tr>";
	}
	echo "</table>";
}
else{
	echo "0 result";
}
mysqli_close($conn);
?>
</body>
</html>