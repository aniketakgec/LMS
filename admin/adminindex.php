<?php
include_once 'adminheader.inc.php';
?>
<section class="main-container">
       <div class="main-wrapper">
	             <h2>Home</h2>
				 <?php
				 if(isset($_SESSION['uid']))
				 {echo "you are logged in";
			     }
				 ?>
				 
				 
				 
				 
				 </div>
		     </section>		 
				 
		
<?php
include_once 'footer.php';
?>
