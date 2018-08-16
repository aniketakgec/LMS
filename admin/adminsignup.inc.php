<?php 
if(isset($_POST['submit'])) 
{  include_once 'dbh.inc.php';

 $first =  mysqli_real_escape_string($conn,$_POST['first']);
 $last =mysqli_real_escape_string($conn, $_POST['last']);
 $email=mysqli_real_escape_string($conn, $_POST['email']);
 $uid = mysqli_real_escape_string($conn,$_POST['uid']);
 $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
  //error handlers
  //check for empty fields
if(empty($first)||empty($last)||empty($email)||empty($uid)||empty($pwd))
   {
          header("Location: ../adminsignup.php?signup=empty");
            	
   } else
   
   {
	//check if input characters are valid
	if(!preg_match("/^[a-zA-Z]*$/",$first)|| !preg_match("/^[a-zA-Z]*$/",$last))
	{
	header("Location: ../adminsignup.php?signup=invalid");	
	exit();}
	else{//CHECK IF EMAIL IS VALID
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			header("Location: ../adminsignup.php?signup=invalid email");
		   exit();}
		else {
			$sql="SELECT * FROM admin WHERE admin_username='$uid'";
			$result=mysqli_query($conn,$sql);
			$resultcheck=mysqli_num_rows($result);
			if($resultcheck>0)
			{header("Location: ../adminsignup.php?signup=usertaken");
			exit();
			}
			else{ echo "yeah";
				//hashing the password 
				$hashedPwd=password_hash($pwd,PASSWORD_DEFAULT);
			//INSERT DATA IN DATABASE
			$sql= "INSERT INTO admin(admin_name_first,admin_name_last,admin_email,admin_username,admin_password) values('$first','$last','$email','$uid','$hashedPwd');";
			mysqli_query($conn,$sql);
			header("Location: ../adminsignup.php?signup=success");
			exit();
		    }
		}
	}
   }
}
 else{
	 header("location: ../adminsignup.php");
	 exit();
 }
 ?>