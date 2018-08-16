<?php
session_start();
if(isset($_POST['submit'])){
	include 'dbh.inc.php';
	$uid=mysqli_real_escape_string($conn,$_POST['id']);
		$pwd=mysqli_real_escape_string($conn,$_POST['password']);
		//check handlers
		//check if inputs are empty
		 if(empty($uid)||empty($pwd)){ header("Location: ../admin/adminsignup.php?login=fill all details");
		 }
		 else {
			 
            $sql="SELECT * FROM admin WHERE admin_username='$uid'OR admin_email='$uid'";
              $result=mysqli_query($conn,$sql);
           $resultcheck=mysqli_num_rows($result);
      if($resultcheck <1)	{
	header("Location: ../adminindex.php?login=error");
		  exit();
		  }	
             else{
				 if($row=mysqli_fetch_assoc($result)){
					 // de-hashing the password 
					 $hashedPwdCheck=password_verify($pwd,$row['admin_password']);
					 if(	 $hashedPwdCheck==false){
						 header("Location: ../admin/adminsignup.php?login=incorrect password");
						 
						 exit();
					 }
					 else if($hashedPwdCheck==true){
						 //login the user
					   $_SESSION['id']=$row['id'];
					 $_SESSION['first']=$row['admin_name_first'];
					 $_SESSION['last']=$row['admin_name_last'];
					 $_SESSION['email']=$row['admin_email'];
					 $_SESSION['uid']=$row['admin_username'];
					 header("Location: ../admin/adminlogin.php?login=success");
					 exit();
					 }
					
				 }
				 
				 
				 
				 
			 }		  
			 
			 
			 
	
	
	
	
	
}
}
?>

