<?php
session_start();
if(!isset($_SESSION['uid']))
{?><script type="text/javascript">	
window.location="adminsignup.php";</script>

<?php



}?><?php
include 'dbh.inc.php';
$output=""; 
if(isset($_POST['submit']))
{$isbn=$_POST["isbn"];
$title=$_POST["title"];
$author=$_POST["author"];
$edition=$_POST["edition"];
$publication=$_POST["publication"];
$quantity=$_POST["quantity"];
 
$query = "insert into books(ISBN,TITLE,AUTHOR,EDITION,PUBLICATION,QTY) values('$isbn','$title','$author','$edition','$publication','$quantity')"; //Insert query to add book details into the book_info table
$result = mysqli_query($conn,$query);
 if(!$result)
	 header("Location: ../insertbooks.php?error");
 else
	 $output="BOOK ADDED SUCCESSFULLY";
      
}
?>
<?php
print("$output");

?>
 