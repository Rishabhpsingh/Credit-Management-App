<?php
$servername="localhost";
$username="root";
$password="";
$dbname="users";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Credit Transfer</title>
	<style type="text/css">
		#id1{
			margin-top: 1%;
			background: blue; 
		}
    form input{
      width: 80%;
      padding: 6px;
    }
    #balance,#Send,#Receive{
      color: red;
    }
    form{
      border-radius: 15px;
    }
		table {
      border-color: red;
      border-width: 5px;
      width: 50%;
      height: 100%;
      border-radius: 15px;
      background-size: cover;
    }
      #id1:hover{
      background-color: purple;}
      #base:hover{
      background-color: purple;}
      #base{
        background-size: cover;
      }
      
    table th{
      color: blue;
    }
    table tr{
      cursor: pointer;transition: all .25s ease-in-out;
    }
    #table tr:hover{background-color: green; }
    #table1 tr:hover{background-color: green; }
    #table2 tr:hover{background-color: green; }
	</style>

  
</head>
<body bgcolor="orange"><center>
     <form action="trans.php" method="post" id="creditTrans" >
  <table border="0" width="50%" height="90%" cellspacing="0" cellpadding="5" id="id1" >
    <tr>
           <th colspan="2" align="center"><h1><u><font color="white"> Enter details</font></u></h1><hr/></th>
       </tr>
       <tr>  
           <th align="center"><font color="white"> Sender a/c name :<a href="#goto"  id="Send">(Select From Users List) </a></font></th>
           <td ><input type="text" id="sender" name="sender" placeholder="Sender" required></td>
       </tr>
         <tr>  
           <th align="center"><font color="white"> Receiver a/c name : <a href="#goto" id="Receive">(Select From Users List) </a>  </font></th>
           <td ><input type="text" id="receiver" name="receiver" placeholder="Receiver" required></td>
       </tr>
          <tr>
          <th align="center"><font color="white">Credit Amount : <a href="#goto"  id="balance">Check Credit Balance</a>!! </font></th> 
          <td ><input type="number" id="amount" name="amount" placeholder="Enter any credit value" required></td>
      </tr>
     
      <tr>
        <td></td>
        <td ><input type="submit" id="Do" value="Go >>" style="background-color: orange;"></td>
    </tr>
   
</center>
</table>
  
</form>
<h1 id="goto"><font color="red">SELECT USER</font></h1>
<table border="0" id="base" bgcolor="blue" >
  <tr>
    <td width="33.33%" align="center" >
      <table id="table" border="1" cellspacing="0" cellpadding="5" bgcolor="yellow">
    <tr>
      <th>Sender Name</th>

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

  
}

else{
  echo "0 result";
}

mysqli_close($conn);
echo "</table>";
?>
</td>
<td width="33.33%" align="center"> 
  <table id="table1" border="1"  cellspacing="0" cellpadding="5" bgcolor="yellow" >
    <tr>
      <th>Receiver Name</th>
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
 
}

else{
  echo "0 result";
}

mysqli_close($conn);
echo "</table>";
?>
</td>
 <td width="*" align="center">
   <table id="table2" border="1" cellspacing="0" cellpadding="9"  bgcolor="yellow">
    <tr>
      <th>CurrentCredits</th>
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

  
}
else{
  echo "0 result";
}

mysqli_close($conn);
echo "</table>";
?>
 </td>
</tr>
</table>
<a href="#creditTrans"><h3>Go to Form >></h3></a>
<script>
  var table=document.getElementById("table");
  for (var i=1;i<table.rows.length;i++)
  {
    table.rows[i].onclick=function()
    {
     //rIndex=this.rowIndex;
      document.getElementById("sender").value=this.cells[0].innerHTML;
      alert("User Selected Go Back To Form !!");

    };
    
  }
 


  var table1=document.getElementById("table1");
  for (var j=1;j<table1.rows.length;j++)
  {
    table1.rows[j].onclick=function()
    {
     //rIndex=this.rowIndex;
      document.getElementById("receiver").value=this.cells[0].innerHTML;
      alert("User Selected Go Back To Form !!");

    };
  }
  
</script>


</body>
</html>