<?php
$servername="localhost";
$username="root";
$password="";
$dbname="users";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Table of users</title>
	<style type="text/css">
		table{
			border-color: red;
			border-width: 5px;
			width: 80%;
			height: 50%;
			background: yellow;
			border-radius: 15px;
		}
		table th{
			color: blue;
		}
		table tr:hover{
			background: green;
		}
	</style>
</head>
<body bgcolor="orange">
	<center>
	<h1><font color="red">All Transanctions</font></h1>
	<table border="1" cellspacing="0" cellpadding="5">
		<tr>
			<th>Sender Name</th>
			<th>Receiver Name</th>
			<th>Amount</th>
		</tr>
<?php
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn-> connect_error){
	die("Connection failed:".$conn->connect_error);
}
$sql="select * from transanctions;";
$result=$conn->query($sql);

if ($result-> num_rows > 0) {
	while($row = $result-> fetch_assoc()){
		echo "<tr><td>".$row["Sender"]."</td><td>".$row["Receiver"]."</td><td>".$row["Amount"]."</td>	";
	}
	echo "</table>";
}
else{
	echo "0 result Do a Transanction First !!!";
    }
mysqli_close($conn);
?>
<br><br><br>
<h3 style="color: red"><a href="transForm.php"> Do another Transanction >></a></h3>
</center>
</body>
</html>