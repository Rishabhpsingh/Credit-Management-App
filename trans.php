<?php
$sender=$_POST['sender'];
$receiver=$_POST['receiver'];
$amount=$_POST['amount'];


$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'users');
$q="insert into transanctions (Sender,Receiver,Amount) values ('$sender','$receiver',$amount)";
$q1="update info set Credits=Credits+$amount where Name='$receiver';";
$q2="update info set Credits=Credits-$amount where Name='$sender';";

mysqli_query($con,$q);
mysqli_query($con,$q1);
mysqli_query($con,$q2);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Transanction</title>
	
</head>
<body bgcolor="aqua">
<center><h1>Succesfull !!</h1>
<a href="View.php"><font color="Red" size="10">SEE TRANSANCTION DETAILS !!! <br><br>OR<br><a href="index.php"><font color="Red" size="8"> GO TO HOME !!</font></a></font></a> 
</center>
</body>
</html>