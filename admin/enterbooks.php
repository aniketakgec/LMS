<?php
session_start();
if(!isset($_SESSION['uid']))
{?><script type="text/javascript">	
window.location="adminsignup.php";</script>

<?php

}
?>
<!DOCTYPE HTML>
<html>
<head>
<style>
form table{
	background-color:#ccc;
}
form  button{
	border-radius:6px;
	padding: 10px;
	background-color:#grey;
	
	} 
	
form  button:hover{

	background-color:#616A6B;
	
	} 

</style>

</head>
<body bgcolor="#BD918D  ">
<a href="adminlogin.php"><<</a><center><h2>ADD BOOKS</h2></center>
<!--Once the form is submitted, all the form data is forwarded to InsertBooks.php -->
<form action="insertbooks.php" method="POST">
 
<table border="2" align="center" cellpadding="8" cellspacing="12">
<tr>
<td> Enter ISBN :</td>
<td> <input type="text" name="isbn" size="40"> </td>
</tr>
<tr>
<td> Enter Title :</td>
<td> <input type="text" name="title" size="40"> </td>
</tr>
<tr>
<td> Enter Author :</td>
<td> <input type="text" name="author" size="40"> </td>
</tr>
<tr>
<td> Enter Edition :</td>
<td> <input type="text" name="edition" size="40"> </td>
</tr>
<tr>
<td> Enter Publication: </td>
<td> <input type="text" name="publication" size="40"> </td>
</tr>
<tr>
<td> Enter Quantity: </td>
<td> <input type="text" name="quantity" size="40"> </td>
</tr>
</table>
<br><center>
		 <button type="submit" name="submit" style="margin-right:20px">Submit</button>
<button type="reset" name="reset" style="margin-right:0px">Reset</button>
</center>
</form>
</body>
</html>


















