<?php
session_start();
include 'dbh.inc.php';
if(!isset($_SESSION['uid']))
{?><script type="text/javascript">	
window.location="adminsignup.php";</script>

<?php



}?>
<html>
<head>
<style>
img{
	opacity:0.6;
 }

form input{
	border-radius:10px;
	padding:2px;
}
form input:hover{
background-color:brown;}

h1{
	text-align:center;
	
}

</style>
</head>
<body bgcolor="#DBE992" >
<img src="akgec.jpg" width="15%" height="25%">
<h1><i>MY ISSUED BOOKS</i></h1>

<?php 
$query= "select * from issue_book where student_enrollment= '$_SESSION[u_id]' ";
 

$res=mysqli_query($conn,$query);

?>	<table cellspacing='2px' cellpadding='2px' border='2px'>
	<tr>
	<th>Student enrollment</th>
     <th>Book issued</th>
	<th>Book issued Date</th>
	</tr>
	<tr>
<?php	 while($row=mysqli_fetch_array($res))
 { 
	     echo "<td>$row[student_enrollment]</td>";
	echo "<td> $row[book_name]</td>";
	echo "<td> $row[book_issue_date]</td>";
	
	 echo "</tr>";
 }?>
</table>
 

</body>
</html>