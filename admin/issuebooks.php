<?php
session_start();
if(!isset($_SESSION['uid']))
{?><script type="text/javascript">	
window.location="adminsignup.php";</script>

<?php
}
?>

<?php

include 'dbh.inc.php';
?>
 <html>
<head>
<title>Issue book</title>
<link rel="stylesheet"type="text/css" href="css/issuebookstyle.css">
<STYLE>
.bx select{
 align:center;
	width:40%;
	padding: 4px;
background-color:#ccc;


}	

</STYLE>
</head>

<body>
<a href="adminlogin.php"><<</a>
<h1  align ="center"><font color="grey"> SEARCH STUDENT FOR ISSUING BOOKS</font></h1>
<form action="issuebooks.php" method="POST" class="bx" align="center">
<select name="enr">
<?php 
$res=mysqli_query($conn,"select user_id from users ");
while($row=mysqli_fetch_array($res))
{ echo "<option>";
echo $row["user_id"];
echo "</option>";
}

?>
</select>
<input type="submit" value="search" name="submit" class="btn">
<?php
if(isset($_POST["submit"]))
{ 
	$res5=mysqli_query($conn,"select * from users where user_id='$_POST[enr]'");
   while($row5=mysqli_fetch_array($res5))
   {
	   $firstname=$row5['user_first'];
	   $lastname=$row5['user_last'];
	   $contact=$row5['user_contact'];
	   $studentid=$row5['user_id'];
	 $_SESSION['user_uid']=$row5['user_uid'];
	 $_SESSION["user_email"]=$row5['user_email'];
	 
   }

?>

	  <br><br> <div class="box">
	              <input type="text"  placeholder="student id" name="student_id" value="<?php echo $studentid;?>"  >                                                                                    
	             
				 
				 
	<br><br> 
	              <input type="text"  placeholder="student name" name="student_name" value="<?php echo $firstname.'  '.$lastname; ?>" >                                                                                    
	            
				 
	<br><br> 
	              <input type="text"  placeholder="student contact" name="student_contact" value="<?php echo $contact;?>" >                                                                                    
	             
				 
	 <br><br> 
	              <input type="text"  placeholder="book issue date" name="book_issue_date" value="<?php echo date('d-m-y');?>" >                                                                                    
	             

      <br><br> 
	              <input type="text"  placeholder="student username" name="student_username" value=" <?php echo $_SESSION['user_uid'] ;?>"  >
				  
				  
				  
		 <br><br> 
	           <select name="book">
				  <?php
				  
				  $res=mysqli_query($conn,"select TITLE from books");
                   while($row=mysqli_fetch_array($res)){
					   echo "<option>";
                       echo $row["TITLE"];
                       echo "</option>";
					   }
					   ?>
					   </select> 
	             
   
       <br><br> 
	              <input type="submit" value="Issue books" name="submit2" >                                                                                    
	             </div>   
				 
	<?php
}
?>
</form>
<?php

if(isset($_POST["submit2"]))
{ $qty="SELECT QTY FROM books WHERE TITLE= '$_POST[book]'";
	$q=mysqli_query($conn,$qty);
	 while($row=mysqli_fetch_array($q))
   {
	$_SESSION['quantity']=$row["QTY"];
   }
	
	
	
	
	
	$query="INSERT INTO issue_book (student_enrollment , student_name , student_contact , student_email , student_username , book_name , book_issue_date ) VALUES('$_POST[student_id]' , '$_POST[student_name]' , '$_POST[student_contact]' , '$_SESSION[user_email]' , ' $_SESSION[user_uid]' , '$_POST[book]' , '$_POST[book_issue_date]')";
	if(!$query)
		echo "problem in query";
	$y=mysqli_query($conn,$query);
	if($y)
	{  if( $_SESSION['quantity']>0){
		echo "book issued successfully";

$query="UPDATE books SET QTY=QTY-1 where TITLE='$_POST[book]'";
mysqli_query($conn,$query);

	
	}
	else 
	{echo "book out of stock";
	}
	}	else
		mysqli_error();

}
?>

</body>
</html>