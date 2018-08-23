
<?php

if(isset($_POST["submit"]))
{include_once 'dbh.inc.php';
$id=  mysqli_real_escape_string($conn,$_POST['student_number']);
 $first =  mysqli_real_escape_string($conn,$_POST['first']);
 $second =mysqli_real_escape_string($conn, $_POST['last']);
 
 $email=mysqli_real_escape_string($conn, $_POST['email']);
 $uid = mysqli_real_escape_string($conn,$_POST['uid']);
 $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
 $ct = mysqli_real_escape_string($conn,$_POST['contact']);
  $gender = mysqli_real_escape_string($conn,$_POST['gender']);
   $room = mysqli_real_escape_string($conn,$_POST['room']);
    $year = mysqli_real_escape_string($conn,$_POST['year']);
 
  //error handlers
  //check for empty fields

 
  
  
  
  if(empty($first)||empty($second)||empty($email)||empty($uid)||empty($pwd)||empty($ct)||empty($gender)||empty($room)||empty($year)||empty($id))
   {
         header("Location: ../OSSRNDC2/hostelautomation.php?fill all details");
	

            	
   } else
   
   {
  
	//check if input characters are valid
	if(!preg_match("/^[a-zA-Z]*$/",$first)|| !preg_match("/^[a-zA-Z]*$/",$last))
	{
	header("Location: ../OSSRNDC2/hostelautomation.php?signup=invalid");	
	exit();}
	else{//CHECK IF EMAIL IS VALID
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			header("Location: ../OSSRNDC2/hostelautomation.php?signup=invalid email");
		   exit();}
		else {
			$sql="SELECT * FROM student_registration WHERE USERNAME='$uid' OR EMAIL='$email'";
			$result=mysqli_query($conn,$sql);
			$resultcheck=mysqli_num_rows($result);
			if($resultcheck>0)
			{header("Location: ../OSSRNDC2/hostelautomation.php?signup=usertaken");
			exit();
			}
			else{ echo "yeah";
			
			
			
				//hashing the password 
				$hashedPwd=password_hash($pwd,PASSWORD_DEFAULT);
				 $sqli="SELECT *FROM student_data WHERE StudentNo='$id' AND DA='N'";
              $r=mysqli_query($conn,$sqli);
           $rcheck=mysqli_num_rows($r);
			//INSERT DATA IN DATABASE
			if($rcheck==0)
			{
	header("Location: ../OSSRNDC2/hostelautomation.php?you are not allowed to stay in hostel");
			
			exit();}
			else
			{$sql= "INSERT INTO student_registration(FIRST,SECOND,EMAIL,CONTACT,STUDENT_NO,USERNAME,PASSWORD,GENDER,ROOM,YEAR) values('$first','$second','$email','$ct','$id','$uid','$hashedPwd','$gender','$room','$year');";
				mysqli_query($conn,$sql);
			header("Location: ../OSSRNDC2/hostelautomation.php?signup=success");
			exit();
			}
				
		    }
		}
	}
   }
}
 else{
	 header("Location: ../OSSRNDC2/hostelautomation.php");
	 exit();
 }
 ?>

















