<?php
session_start();
if(!isset($_SESSION['uid']))
{?><script type="text/javascript">	
window.location.href="adminsignup.php";</script>

<?php



}?>
<?php
mysql_connect("localhost","root","");
mysql_select_db("login_system");
$output ='';
if(isset($_POST['search']))
{ $searchq = $_POST['search']; 
   if(empty($searchq))
	   header("Location: ../updatebook.php?error=enter book deatails");
         $query=mysql_query("SELECT * FROM books WHERE TITLE LIKE '%$searchq%' OR AUTHOR LIKE '%$searchq%' OR ISBN LIKE '%$searchq%' OR PUBLICATION LIKE '%$searchq%' " )or die("could not search");
		 $count=mysql_num_rows($query);
       if($count==0)
		   $output= 'no search results found';
         else{ 
		      while($row = mysql_fetch_array($query)){
			  $isbn=$row['ISBN'];
			 $title=$row['TITLE'];
			  $author=$row['AUTHOR'];
			  $edition=$row['EDITION'];
			  $publication=$row['PUBLICATION'];
			  $update="UPDATE";
			  $output="<table border='2' align='center' cellpadding='4'cellspacing='5'>"."<tr>"."<th>ISBN</th>"."<th>TITLE</th>"."<th>AUTHOR</th>"."<th>EDITION</th>"."<th>PUBLICATION</th>"."<th>UPDATE RECORD</th>"."</tr>"."<tr>"."<td>$isbn</td>"."<td>$title</td>"."<td>$author</td>"."<td>$edition</td>"."<td>$publication</td>"."<td><a href='ubook.php'>$update</a></td>". "</tr>"   ;
			  
			  }
			  
			  }   
                

				echo "<a href='adminhome.php' align='top left'>HOME</a>";}
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
<a href="adminlogin.php"><<</a>
<img src="img\BOOK.jpg"><h1 align="center"> SEARCH BOOKS TO UPDATE</h1>
<form action="updatebook.php" method="POST"  align ="center" style="margin-top:10%">
<input type="text" name="search"  size="60px " placeholder="search book title,isbn,author,publication" style="background-color:#ccc ;padding:15px">
<br><br><br><button type="submit"  name="submit" class="btn" > Search</button>
</form>
</body>
</html>


<?php print("$output"); ?>