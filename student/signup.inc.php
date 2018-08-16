<?php 
if(isset($_POST['submit'])) 
{  include_once 'dbh.inc.php';
$id =  mysqli_real_escape_string($conn,$_POST['id']);
 $first =  mysqli_real_escape_string($conn,$_POST['first']);
 $last =mysqli_real_escape_string($conn, $_POST['last']);
 $email=mysqli_real_escape_string($conn, $_POST['email']);
 $uid = mysqli_real_escape_string($conn,$_POST['uid']);
 $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
 $ct = mysqli_real_escape_string($conn,$_POST['contact']);
  //error handlers
  //check for empty fields
if(empty($first)||empty($last)||empty($email)||empty($uid)||empty($pwd))
   {
          header("Location: ../student/signup.php?signup=empty");
            	
   } else
   
   {
	//check if input characters are valid
	if(!preg_match("/^[a-zA-Z]*$/",$first)|| !preg_match("/^[a-zA-Z]*$/",$last))
	{
	header("Location: ../student/signup.php?signup=invalid");	
	exit();}
	else{//CHECK IF EMAIL IS VALID
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			header("Location: ../student/signup.php?signup=invalid email");
		   exit();}
		else {
			$sql="SELECT * FROM users WHERE user_uid='$uid'";
			$result=mysqli_query($conn,$sql);
			$resultcheck=mysqli_num_rows($result);
			if($resultcheck>0)
			{header("Location: ../student/signup.php?signup=usertaken");
			exit();
			}
			else{ echo "yeah";
				//hashing the password 
				$hashedPwd=password_hash($pwd,PASSWORD_DEFAULT);
			//INSERT DATA IN DATABASE
			$sql= "INSERT INTO users(user_id,user_first,user_last,user_email,user_contact,user_uid,user_pwd) values('$id','$first','$last','$email','$ct','$uid','$hashedPwd');";
			mysqli_query($conn,$sql);
			header("Location: ../student/signup.php?signup=success");
			exit();
		    }
		}
	}
   }
}
 else{
	 header("location: ../student/signup.php");
	 exit();
 }
 ?>