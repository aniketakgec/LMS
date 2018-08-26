<?php

if(isset($_POST['ok']))
{
$partner1=$_POST['s1'];

$query3="select * from student_details where student_no='$partner1'";
$data3=mysqli_query($conn,$query3);
$result3=mysqli_fetch_assoc($data3);
if($data3)
{
	$g=$result3['GENDER'];
	if($g==$gender)
	{
		$query4="insert into login values('','$sid','$partner1','')";
		$data4=mysqli_query($conn,$query4);
		if($data4)
			echo $sid." "."is the leader<br>";
		else
			echo mysqli_error($conn);
		$query5="update student_registration set leader=2 where student_no='$partner1'";
		$data5=mysqli_query($conn,$query5);
		if($data5)
		{
			echo "<br>".$partner1." "."is now member";
		}
	else
	{
		echo mysqli_error($conn);
	}
	}
else
{
	echo "<br>please select different student_no";
}
}
else
{
	echo mysqli_error($conn);
}


$query6="select * from student_details where student_no='$partner2'";
$data6=mysqli_query($conn,$query6);
$result6=mysqli_fetch_assoc($data6);
if($data6)
{
	$g=$result6['GENDER'];
	if($g==$gender)
	{
		$query7="insert into login values('','$sid','','')";
		$data7=mysqli_query($conn,$query7);
		if($data7)
			echo $sid." "."is the leader<br>";
		else
			echo mysqli_error($conn);
		$query8="update student_registration set leader=2 where student_no='$partner1'";
		$data8=mysqli_query($conn,$query8);
		if($data8)
		{
			echo "<br>".$partner2." "."is now member";
		}
	else
	{
		echo mysqli_error($conn);
	}
	}
else
{
	echo "<br>please select different student_no";
}
}
else
{
	echo mysqli_error($conn);
}
}
?>