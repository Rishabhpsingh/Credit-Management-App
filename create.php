

<?php
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$credits=$_POST['credits'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'users');
$q="insert into info (Id_num,Name,Email,Credits) values ($id,'$name','$email',$credits)";
mysqli_query($con,$q);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create User</title>
</head>
<body bgcolor="aqua">
<center><h1>Succesfull !!</h1>
<a href="Addusers.php"><font color="Red" size="14">Add More !!! <br><br>OR<br><a href="my.php"><font color="Red" size="14"> SEE USERS !!</font></a></font></a> 
</center>
</body>
</html>