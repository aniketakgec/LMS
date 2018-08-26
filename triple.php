
<?php
include('connection.php');

session_start();
$sid=$_SESSION['sid'];
$type=$_SESSION['type'];
$gender=$_SESSION['gender'];
$query2="update student_registration set leader=1 where STUDENT_NO=$sid";
	$data2=mysqli_query($conn,$query2);
	if($data2)
	{
	$query1="select * from student_registration where not student_no='$sid' and type='triple' and not leader=1 and not leader=2";
$data1=mysqli_query($conn,$query1);

if($data1)
{
		echo "<h3>CHOOSE PARTNER 1</h3>";
	echo "<form name='f1' method='post' action=''>
<select name='s1'>";
while($result1=mysqli_fetch_array($data1))
	{
echo "<option value=".$result1['STUDENT_NO'].">".$result1['STUDENT_NO']."</option>";
	}
echo "</select>
<input type='submit' name='ok' value='ok'>
</form>";
		
	}

else
{
	echo mysqli_error($conn);
}
	}
else
{
	echo mysqli_error($conn);
}	
include('tnext.php');

?>