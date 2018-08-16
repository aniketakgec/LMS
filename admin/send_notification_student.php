

<?php
session_start();
include 'dbh.inc.php';
?>

<html>
<head>
<link rel="stylesheet"type="text/css" href="css/issuebookstyle.css">
<style>


table input{
	 align:center;
	width:40%;
	padding: 4px;
background-color:#ccc;
}
table {
	 align:center;
	width:40%;
	padding: 4px;
background-color:white;;
}


table textarea{
	

background-color:#ccc;}
</style>
</head>
<body>
<h1  align ="center"><font color="grey"> SEARCH STUDENT FOR SENDING MESSAGES</font></h1>
<a href="adminlogin.php"><<</a>


<form action="send_notification_student.php" method="POST" class="bx" align="center">
<table align="center">
<tr>
<td>
<select name="dusername">
<?php 
$res=mysqli_query($conn,"select * from users ");
while($row=mysqli_fetch_array($res))
{ echo "<option>";
echo $row["user_uid"];
echo "</option>";
}
?>
</select>
</td>
</tr>
<tr>
<td><br><br><input type="text"  placeholder="Enter title" name="title"   > </td>
 
</tr>
<tr>     
<td><br>Message:<br><textarea   name="msg"  rows="10" cols="28"> 
</textarea>                                                                                   
</td>
</tr>
<tr>
<td><br><br><input type="submit" name="submit" value="send"></td>
</tr>
</table>	             
</form>
<?php
if(isset($_POST["submit"]))
{ 
	mysqli_query($conn,"insert into messages values('','$_SESSION[uid]','$_POST[dusername]','$_POST[title]','$_POST[msg]','n')");
 ?>
<script type="text/javascript">	
alert("message send successfully");
</script>
 
 <?php





}?>

</body>
</html>