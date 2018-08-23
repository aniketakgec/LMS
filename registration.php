
<html>
<head>
    <title>sign up system</title>
</head>
<body background="globe1.jpg">
<center><h1><u> SIGN UP </u></h1></center>
<form method="post" action="">

        <br>
		 <i><h3>ENTER STUDENT NUMBER:</h3></i>
        <input type="text" name="studentno" value="" placeholder="student no"><BR><BR>
  
    <i><h3>ENTER PASSWORD:</h3></i>
        <input type="password" name="pwd" value="" placeholder="#############"><br><br>
 <i><h3>ROOM TYPE:</h3></i>
 <label><input type="radio" name="room" value="single">Single</label>
        <label><input type="radio" name="room" value="double">Double</label>
        <label><input type="radio" name="room" value="triple">Triple</label><br><br>
    
<br>
        <input type="submit" name="submit" value="SIGN UP">
    <br><br>
</form>
<H3>
    IF ALREADY A MEMBER:<BR>
</H3>
    <input type="button" value="LOGIN" onclick="window.location.href='login1.php'">
</form>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
	include("connection.php");
$student_no=$_POST['studentno'];
$pwd=$_POST['pwd'];
   $room = $_POST['room'];
	$query1="select * from student_details where STUDENT_NO='$student_no' and DA_STATUS='0'";
	$data1=mysqli_query($conn,$query1);
	$result1=mysqli_fetch_assoc($data1);
	if($result1)
{	
	$query="insert into student_registration(ID,STUDENT_NO,PASSWORD,ROOM) values('','$student_no','$pwd','$room','')";
	$data=mysqli_query($conn,$query);
	if($data)
	{
		echo "registered successfully";
	}
	else
		echo mysqli_error($conn);
}
else
	echo "invalid details";
}
 ?>
