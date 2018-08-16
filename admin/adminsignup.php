<?php
include_once 'adminheader.inc.php';


?>
<section class="main-container">
       <div class="main-wrapper">
	             <img src="img/akgec.jpg" height="95 px" width="95px" >
				
				 <h2 align="center">ADMIN REGISTRATION</h2>
				 <form class="signup-form" action="adminsignup.inc.php" method="POST">
				 <input type="text" name="first" placeholder="firstname">
				 <input type="text" name="last" placeholder="lastname">
				 <input type="text" name="email" placeholder="E-mail">
				 <input type="text" name="uid" placeholder="Username">
				 <input type="password" name="pwd" placeholder="password">
				 <button type="submit" name="submit">Sign up</button>
				 
		          </form>
				 </div>
		     </section>		 
				 
		
<?php
include_once 'footer.php';
?>