<?php 
session_start();
?><head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style>
img{
	border-radius:50%;
}

.btn{
	padding:8px ;
 text-align:center;
	color:black;
	background-color:#ccc;
	}

</style>
</head>
<body>
<header>
     <nav>
             
				  <div class="nav-login">
                       <?php
					   if(isset($_SESSION['last'])){
					   echo '<form action="adminlogout.php" method="POST">
				                     <button type="submit" name="submit" class="btn">logout</button>
			                   </form>';
					   } else{
						   echo ' 
					   <form action="adminlogin.inc.php" method="POST">
                                                
					          <input type="text" name="id" placeholder="Username/email">
					         <input type="password" name="password" placeholder="password">
					         <button type="submit" name="submit" >Login</button>
					   </form>
                           <a href="adminsignup.php"	>Sign up</a> ';
						   
					   }  
					   
					?>
					   
				
					  
                        </div>					   
			 
			 </div>
	 </nav>

</header>