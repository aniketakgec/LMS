<?php
session_start();
if(!isset($_SESSION['uid']))
{?><script type="text/javascript">	
window.location="adminsignup.php";</script>

<?php



}?><?php 
include 'dbh.inc.php';
$id=$_GET["id"];
$a=date('d-m-y');
$res=mysqli_query($conn,"update issue_book set book_return_date='$a' where id='$id'");

if(!$res)
	mysqli_error();
else
{  
?><script type="text/javascript">
  alert("book returned");
  window.location="returnbook.php";
  </script>
  
<?php


$query="UPDATE books SET QTY=QTY+1 where TITLE='$_SESSION[book_name]'";
mysqli_query($conn,$query);}






?>