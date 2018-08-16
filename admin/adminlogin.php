<?php
include_once 'adminheader.inc.php';

?>

	             
				 <?php
				 if(isset($_SESSION['last']))
				 {echo "Welcome"."&nbsp".$_SESSION['last']."!";
			         include 'adminhome.php' ;           }   
				 ?>
				 
				 
				 
				 
			
		
<?php
include_once 'footer.php';
?>