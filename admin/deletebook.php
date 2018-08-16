<?php
session_start();
if(!isset($_SESSION['uid']))
{?><script type="text/javascript">	
window.location="adminsignup.php";</script>

<?php



}?>
<?php
$con = mysql_connect("localhost","root","");

if (!$con)
{
die('Could not connect: ' . mysql_error());
}

mysql_select_db("login_system", $con);
if(isset($_POST['submit'])){
$isbn=$_REQUEST['delete'];  
$sql="DELETE FROM books WHERE ISBN='$isbn'";

if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}else 
echo "1 record deleted go back to delete another!";

mysql_close($con);
}
?>
<html>
<head>
<style>
.btn{
	border-radius:10px;
	padding:5px;
	background-color:grey;
	
}
.btn:hover{
	background-color:#ccc;
}
img{
	
	width:100%;
    height:25%;
	}

</style>
</head>
<body>
<a href="adminlogin.php">back</a>
<img src="img/BOOK.jpg"><h1 align="center"> DELETE BOOKS</h1>
<form action="deletebook.php" method="POST"  align ="center" style="margin-top:10%">
<input type="text" name="delete"  size="60px " placeholder="delete by entering isbn number" style="background-color:#ccc ;padding:15px">
<br><br><br><button type="submit"  name="submit" class="btn" > DELETE</button>
</form>
</body>
</html>








