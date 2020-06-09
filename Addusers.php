<!DOCTYPE html>
<html>
<head>
	<title>Create User</title>
	<style type="text/css">
		#id1{
			margin-top: 6%;
			background: yellow; 
      
		}
    form input{
      width: 80%;
      padding: 6px;
    }
    table{
      border-radius: 15px;
    }
		#addusers{
      border-radius: 15px;
    }
    table td:hover{
      background-color: green;}
	</style>
  
</head>
<body bgcolor="orange"><center>
	
<form action="create.php" method="post" name="addusers" >
	<table border="0" width="50%" height="90%" cellspacing="0" cellpadding="5" id="id1" >
		<tr>
           <th colspan="2" align="center"><h1><u><font color="navy"> Enter details</font></u></h1><hr/></th>
       </tr>
       <tr>  
           <th align="center"><font color="navy"> Id :</font></th>
           <td ><input type="number" name="id" required></td>
       </tr>
         <tr>  
           <th align="center"><font color="navy"> Name :</font></th>
           <td ><input type="Text" name="name" required></td>
       </tr>
          <tr>
          <th align="center"><font color="navy">E-mail :</font></th> 
          <td ><input type="text" name="email" placeholder="xyz@gmail.com" required></td>
      </tr>
      <tr>
          <th align="center"><font color="navy">Credits :</font></th> 
          <td ><input type="number" name="credits" required="0"></td>
      </tr>
      <tr>
      	<td></td>
        <th><input type="submit" name="addusers" id="addusers" value="Add User" style="background-color: orange;"></th>
    </tr>
   
</center>
</table>
	
</form>

</body>
</html>