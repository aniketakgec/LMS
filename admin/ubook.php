<?php
session_start();
if(!isset($_SESSION['uid']))
{?><script type="text/javascript">	
window.location="adminsignup.php";</script>

<?php



}?><?php 
$conn=mysql_connect("localhost","root","");
mysql_select_db("login_system");


?>
<html>
<head>


</head>
<body bgcolor="#BD918D">
<a href="updatebook.php"><<</a>
<form action="ubook.php" method="POST">
<p> TO CHANGE TITLE &nbsp&nbsp <input type="submit" name="submit2"></p>
<p> TO CHANGE AUTHOR &nbsp&nbsp <input type="submit" name="submit3"></p>
<p> TO CHANGE EDITION  &nbsp&nbsp <input type="submit" name="submit4"></p>

<p> TO CHANGE QUANTITY &nbsp&nbsp <input type="submit" name="submit6"></p>

</form>
</body>
</html>


<?php
if(isset($_POST['submit2']))
{
echo "<form action='ubook.php' method='POST'>";
	  echo "ENTER ISBN NO :"."<input type='text' name='isbn'>";
	 echo "ENTER TITLE :"."<input type='text' name='title'>";
	 echo "<input type='submit' name='utitle'>";
	echo "<input type='reset' name='utitle'>";
echo "</form>";
}
if(isset($_POST['title']))
{ $t=$_POST['title'];
 $i=$_POST['isbn'];	

 $sql = "UPDATE books SET TITLE='$t' WHERE ISBN= '$i' ";
	if(!mysql_query($sql))
		echo "error";
	else
		echo "Record updated successfullly";
	
	
}	

?>

<?php
if(isset($_POST['submit3']))
{
echo "<form action='ubook.php' method='POST'>";
	  echo "ENTER ISBN NO :"."<input type='text' name='isbn'>";
	 echo "ENTER AUTHOR :"."<input type='text' name='author'>";
	 echo "<input type='submit' name='uauthor'>";
	echo "<input type='reset' name='uauthor'>";
echo "</form>";
}
if(isset($_POST['author']))
{ $t=$_POST['author'];
 $i=$_POST['isbn'];	

 $sql = "UPDATE books SET AUTHOR='$t' WHERE ISBN= '$i' ";
	if(!mysql_query($sql))
		echo "error";
	else
		echo "Record updated successfullly";
	
	
}
	

?>

<?php
if(isset($_POST['submit4']))
{
echo "<form action='ubook.php' method='POST'>";
	  echo "ENTER ISBN NO :"."<input type='text' name='isbn'>";
	 echo "ENTER EDITON :"."<input type='text' name='edition'>";
	 echo "<input type='submit' name='uedition'>";
	echo "<input type='reset' name='uedition'>";
echo "</form>";
}
if(isset($_POST['edition']))
{ $t=$_POST['author'];
 $i=$_POST['isbn'];	

 $sql = "UPDATE books SET EDITION='$t' WHERE ISBN= '$i' ";
	if(!mysql_query($sql))
		echo "error";
	else
		echo "Record updated successfullly";
	
	
}
	

?>

<?php
if(isset($_POST['submit5']))
{
echo "<form action='ubook.php' method='POST'>";
	  echo "ENTER ISBN NO :"."<input type='text' name='isbn'>";
	 echo "ENTER PUBLICATION:"."<input type='text' name='publication'>";
	 echo "<input type='submit' name='upublication'>";
	echo "<input type='reset' name='upublication'>";
echo "</form>";
}
if(isset($_POST['upublication']))
{ $t=$_POST['publication'];
 $i=$_POST['isbn'];	

 $sql = "UPDATE books SET PUBLICATION='$t' WHERE ISBN= '$i' ";
	if(!mysql_query($sql))
		echo "error";
	else
		echo "Record updated successfullly";
	
	
}
	

?>



<?php
if(isset($_POST['submit6']))
{
echo "<form action='ubook.php' method='POST'>";
	  echo "ENTER ISBN NO :"."<input type='text' name='isbn'>";
	 echo "ENTER QTY:"."<input type='text' name='qty'>";
	 echo "<input type='submit' name='uqty'>";
	echo "<input type='reset' name='uqty'>";
echo "</form>";
}
if(isset($_POST['uqty']))
{ $t=$_POST['qty'];
 $i=$_POST['isbn'];	

 $sql = "UPDATE books SET QTY='$t' WHERE ISBN= '$i' ";
	if(!mysql_query($sql))
		echo "error";
	else
		echo "Record updated successfullly";
	
	
}
	

?>













