<?php
include 'dbh.inc.php';
session_start();
if(!isset($_SESSION['uid']))
{?><script type="text/javascript">	
window.location="adminsignup.php";</script>

<?php



}?><html>
<head>
<title>Return books</title>
<style>
form input{
	border-radius:10px;
	padding:2px;
}
form input:hover{
background-color:brown;}



</style>



</head>
<a href="adminlogin.php"><<</a>
<body>
<h1 align ="center"><font color="Purple"><i>RETURN BOOK </i></font></h1>
<form action="returnbook.php" method="POST">
    <select style="width:50%;background-color:#ccc" name="enr">
	       <?php
	             $res=mysqli_query($conn,"select student_enrollment from issue_book where book_return_date='' ");
	              while($row=mysqli_fetch_array($res)){
		            echo "<option>";
		             echo $row["student_enrollment"];
					 echo "</option>"; }
	   ?>
</select>


 <input type="submit" name="submit" value="search">

</form>
<?php
if(isset($_POST["submit"]))
{ 
	$res5=mysqli_query($conn,"select * from issue_book where student_enrollment='$_POST[enr]'");
     ?>
	 <table cellspacing="2px" cellpadding="2px"border="2px">
	 <tr>
	 <th>Student enrollment</th>
	 <th>Student name</th>
	 <th>Student contact</th>
	 <th>Student email</th>
	 <th>Student username</th>
	 <th>book name</th>
	 <th>book issue date</th>
	 <th>REUTRN BOOK</th>
	 </tr>
<?php 
	 
	 while($row5=mysqli_fetch_array($res5))
   { $_SESSION["book_name"]=$row5["book_name"];

 echo "<tr>";
      echo "<td>$row5[student_enrollment]</td>";
	 echo  "<td>$row5[student_name]</td>";
	 echo  "<td>$row5[student_contact]</td>";
	 echo  "<td>$row5[student_email]</td>";
	 echo  "<td>$row5[student_username]</td>";
	 
	 echo  "<td>$_SESSION[book_name]</td>";
      echo  "<td>$row5[book_issue_date]</td>";
	  echo  "<td>";?><a href="return.php?id=<?php echo $row5['id'];?>">Return</a><?php echo "</td>";
	  echo "</tr>";


   }

   echo "</table>";
   
   }
  

?>
</body>
</html>