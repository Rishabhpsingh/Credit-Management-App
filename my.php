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
			font-weight: 10px;
		}

		table tr:hover{
      background-color: #ddd;}
       #tab1 {
      	border-color: red;
      	border-width: 5px;
		width: 80%;
		height: 50%;
      }
      #tab1 tr:hover{
      background-color: #ddd;}
	</style>
</head>
<body bgcolor="orange"><center>
	<h1><font color="red"><u>USER'S DETAILS</u></font></h1>
	<table id="mytable" border="1" cellspacing="1" cellpadding="5">
		<tr>
			<th>Id_num</th>
			<th >Name</th>
			<th >Email</th>
			<th >Credits</th>
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
		echo "<tr><td>".$row["Id_num"]."</td><td id='t1'>".$row["Name"]."</a>"."</td><td id='t2'>".$row["Email"]."</td><td id='t3'>".$row["Credits"]."</td></tr>";
	}
	echo "</table>";
}
else{
	echo "0 result";
}
mysqli_close($conn);
?>
</center>
<script>

  var table=document.getElementById("mytable");
  for (var i=1;i<table.rows.length;i++)
  {
    table.rows[i].onclick=function()
    {
    // window.location="detail.php";
      var names=this.cells[1].innerHTML;
      var emails=this.cells[2].innerHTML;
      var credits=this.cells[3].innerHTML;
      var table1="<table border='0' id='tab1' align='center' style='width: 50%;height: 50%;background-color:orange;font-weight: 10px;border-radius=50px;' ><tr><td colspan='2' align='center'><u>Details For   "+names+"</u></td><tr><th>Name: </th><td>"+names+"</td></tr><tr><th>Email:</th><td>"+emails+"</td></tr><tr><th>Credits: </th><td>"+credits+"</td></tr><tr><td colspan='2' align='center'><button onclick='fun()' style='background-color=orange;width=100%;' >Transfer Credits Now >></button></td></tr></table>";
      document.write(table1);
     
    };
    
  }
  function fun(){
  	window.location="transForm.php";
  }

</script>

</body>
</html>