<html>
<head>
</head>
<body>
<center>
<H1>LOG IN</H1><br><br>
</center>
<form name=f1 action="" align="center" method=POST>
<input type="text" name="sid" value="" placeholder="enter your st no.">
<br><br><br>
<input type="password" name="pwd" placeholder="#########">
<br><br><br>
<input type="submit" name="login" value="login">
<br><br><br>
</form>
</body>
</html>
<?php
include('connection.php');
if(isset($_POST['login']))
{
	$sid=$_POST['sid'];
	$pwd=$_POST['pwd'];
	if(empty('sid')||empty('pwd'))
	{
		echo "empty fields";
	}
	else
	{
		$query="select * from student_registration where student_no='$sid' and password='$pwd'";
		$data=mysqli_query($conn,$query);
		$result=mysqli_fetch_assoc($data);
	
		if($result)
		{
			$leader=$result['LEADER'];
			if($leader==1)
			{
				echo "you have already choosen your partners";
			}
			if($leader==2)
			{
				echo "you are not eligible to login ask your leader to log in";
			}
		else if($leader==0)
		{
		session_start();
			$_SESSION['type']=$result['TYPE'];
			$type=$_SESSION['type'];
		$_SESSION['sid']=$sid;
	
		$query1="select * from student_details where student_no='$sid'";
$data1=mysqli_query($conn,$query1);
$result1=mysqli_fetch_assoc($data1);
if($data1)
{
	$gender=$result1['GENDER'];
	$year=$result1['YEAR'];
	$_SESSION['name']=$result1['NAME'];
	$_SESSION['gender']=$gender;
	$_SESSION['year']=$year;
	
	
		if($type=='double')
	 {
			header("location:double.php");
	 }
	if($type=='single')
	 {
		 $query3="insert into login values('','$sid','','')";
		$data3=mysqli_query($conn,$query3);
		if($data3)
			echo $sid." "."is the leader";
		else
			echo mysqli_error($conn);
		echo "you are the leader";
	 }
	 if($type=='triple')
	 {
		 header("location:triple.php");
	 }
	

}
else
{
	echo mysqli_error($conn);
}	
		}
		
	
		}	
		else
	{
		echo "no data found";
	}
}
}
?>