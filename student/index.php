<?php
include_once 'header.php';

?>

	             
				 <?php
				 if(isset($_SESSION['u_uid']))
				 {echo "Welcome"."&nbsp".$_SESSION['u_first']."!";
			 include 'studenthome.php' ;}
				 ?>
				 
				 
				 
				 
			
		
<?php
include_once 'footer.php';
?>
