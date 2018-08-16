<?php 
session_start();
?><!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style>
img{
	border-radius:50%;
}
</style>
</head>
<body>
<header>
     <nav>
             <div class"main-wrapper"> 
			   
				  <div class="nav-login">
                       <?php
					   if(isset($_SESSION['u_uid'])){
					   echo '<form action="logout.inc.php" method="POST">
				                     <button type="submit" name="submit">Logout</button>
			                   </form>';
					   } else{
						   echo ' 
					   <form action="login.inc.php" method="POST">
                                                
					          <input type="text" name="uid" placeholder="Username/email">
					         <input type="password" name="pwd" placeholder="password">
					         <button type="submit" name="submit" >Login</button>
					   </form>
                           <a href="signup.php"	>Sign up</a> ';
						   
					   }  
					   
					?>
					   
				
					  
                        </div>					   
			 
			 </div>
	 </nav>

</header>