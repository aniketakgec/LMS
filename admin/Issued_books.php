<?php
include 'dbh.inc.php';
session_start();
if(!isset($_SESSION['uid']))
{?><script type="text/javascript">	
window.location="adminsignup.php";</script>

<?php



}
<html>
<head>

<style>
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
<body>
<h1><i>MY ISSUED BOOKS</i></h1>

<?php
$query= 'select * from issue_book where student_username= "$_SESSION['username']" ');
 

$res=mysqli_query($conn,$query);
 while($row=mysqli_fetch_array($res))
 {
	echo "<table cellspacing='2px' cellpadding='2px' border='2px'>";
	echo"<tr>";
	echo "<th>Student enrollment</th>";
	echo"<th>Book issued</th>";
	echo "<th>Book issued Date</th>";
	echo"</tr>";
	 echo "<tr>";
	     echo "<td>$row[student_enrollment]</td>";
	echo "<td>$row[book_name]</td>";
	echo "<td>$row[book_issue_date]</td>";
	echo "</tr>";
	
 
echo "</table>";
 
}

?>




</body>
</html>