<?php


include_once 'header.php';

?>



<section class="main-container">
       <div class="main-wrapper">
	             <img src="	img/akgec.jpg" height="95 px" width="95px" >
				 <h2>AKGEC LIBRARY </h2><br><br>
				 <h4 align="center">STUDENT REGISTRATION</h4>
				 <form class="signup-form" action="signup.inc.php" method="POST">
				 <input type="text" name="id" placeholder="enrollmentid">
				 <input type="text" name="first" placeholder="firstname">
				 <input type="text" name="last" placeholder="lastname">
				 <input type="text" name="email" placeholder="E-mail">
				  <input type="text" name="contact" placeholder="Contact">
				 <input type="text" name="uid" placeholder="Username">
				 <input type="password" name="pwd" placeholder="password">
				 <button type="submit" name="submit">Sign up</button>
				 
		          </form>
				 </div>
		     </section>		 
				 
		
<?php
include_once 'footer.php';
?>
