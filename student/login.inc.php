<?php
session_start();
if(isset($_POST['submit'])){
	include 'dbh.inc.php';
	$uid=mysqli_real_escape_string($conn,$_POST['uid']);
		$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
		//check handlers
		//check if inputs are empty
		 if(empty($uid)||empty($pwd)){ header("Location: ../student/signup.php?login=fill all details");
		 }
		 else {
			 
            $sql="SELECT * FROM users WHERE user_uid='$uid'OR user_email='$uid'";
              $result=mysqli_query($conn,$sql);
           $resultcheck=mysqli_num_rows($result);
      if($resultcheck <1)	{
	header("Location: ../student/index.php?login=error");
		  exit();
		  }	
             else{
				 if($row=mysqli_fetch_assoc($result)){
					 // de-hashing the password 
					 $hashedPwdCheck=password_verify($pwd,$row['user_pwd']);
					 if(	 $hashedPwdCheck==false){
						 header("Location: ../student/signup.php?login=incorrect password");
						 
						 exit();
					 }
					 else if($hashedPwdCheck==true){
						 //login the user
					   $_SESSION['u_id']=$row['user_id'];
					 $_SESSION['u_first']=$row['user_first'];
					 $_SESSION['u_last']=$row['user_last'];
					 $_SESSION['u_email']=$row['user_email'];
					 $_SESSION['u_uid']=$row['user_uid'];
					 header("Location: ../student/index.php?login=success");
					 exit();
					 }
					
				 }
				 
				 
				 
				 
			 }	  
			 
			 
			 
	
	
	
	
	
}
}
?>


