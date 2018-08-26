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
		$query7="select * from login where leader=$sid";
		$data7=mysqli_query($conn,$query7);
		$result7=mysqli_fetch_assoc($data7);
		$rows7=mysqli_num_rows($data7);
		if($rows7>0)
		{
			$p1=$result7['PARTNER_1'];
		if($p1==$partner1)
		{
			echo "partner is already choosen";
		}

		}
	else
	{
		$query4="insert into login values('','$sid','$partner1','')";
		$data4=mysqli_query($conn,$query4);
		if($data4)
		{
			echo $sid." "."is the leader<br>";
		$query8="update student_registration set leader=1 where student_no='$sid'";
		$data8=mysqli_query($conn,$query8);
		}
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