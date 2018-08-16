<?php
session_start();
if(!isset($_SESSION['uid']))
{?><script type="text/javascript">	
window.location="adminsignup.php";</script>

<?php



}?><?php
mysql_connect("localhost","root","");
mysql_select_db("login_system");
$output ='';
if(isset($_POST['search']))
{ $searchq = $_POST['search']; 
   if(empty($searchq))
	   header("Location: ../searchstudent.php.php?error=enter student deatails");
      $query=mysql_query("SELECT * FROM users WHERE user_id LIKE '%$searchq%' OR user_first LIKE '%$searchq%' OR user_last LIKE '%$searchq%'  " )or die("could not search");
		 $count=mysql_num_rows($query);
       if($count==0)
		   $output= 'no search results found';
         else{ 
		      while($row = mysql_fetch_array($query)){
			  $id=$row['user_id'];
			 $first=$row['user_first'];
			  $last=$row['user_last'];
			  $email=$row['user_email'];
			  $output="<table border='2' align='center' cellpadding='4'cellspacing='5'>"."<tr>"."<th>ID</th>"."<th>NAME</th>"."<th>EMAIL</th>"."</tr>"."<tr>"."<td>$id</td>"."<td>$first&nbsp$last</td>"."<td>$email</td>"."</tr>"                                    ;
			  
			  }
			  
			  }   
                

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
    height:35%;
	}

</style>
</head>
<body>
<a href="adminlogin.php"><<</a>
<img src="img/stu.png"><h1 align="center"> SEARCH STUDENT</h1>
<form action="searchstudent.php" method="POST"  align ="center" style="margin-top:10%">
<input type="text" name="search"  size="60px " placeholder="search by name,user id" style="background-color:#ccc ;padding:15px">
<br><br><br><button type="submit"  name="submit" class="btn" > Search</button>
</form>
</body>
</html>
<?php print("$output");?>
