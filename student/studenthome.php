<?php
include 'dbh.inc.php';
$res=mysqli_query($conn, "select * from messages where d_username='$_SESSION[u_uid]' and read1='n'");
$tot=mysqli_num_rows($res);


if(!isset($_SESSION['u_uid']))
{?><script type="text/javascript">	
window.location="signup.php";</script>

<?php



}?>

<html >
<head>
<link rel="stylesheet"type="text/css" href="css/styleadmin.css"></head>
<body>

<div id="container">
    <header></header>
    <main>
        <section class="half"> 
        <img src="img/lib.jpg" width="100%" height="180px">		
		
		</section>
        
	   <section class="half">
		   <ul>
                   <li><a class="active" href="index.php">Home</a></li>
				   <li><a  href="studentsearchbook.php">SEARCH BOOK</a></li>
		          <li><a href='message_from_librarian.php'><?php echo $tot.'&nbsp'.'<img src="img/bell.png" width="19" height="14">'; ?></span></a></li>
				   
				   <li><a href="sissuedbooks.php">VIEW ISSUED BOOKS</a></li>
                   
           </ul>
                 		
	       
		</section>
    </main>
</div>

</body
</html>