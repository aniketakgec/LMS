
<?php
include('connection.php');
session_start();
$sid=$_SESSION['sid'];
$type=$_SESSION['type'];
$gender=$_SESSION['gender'];
$query1="select * from student_registration where not student_no='$sid' and type='double' and LEADER='0'";
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

include('dnext.php');

?>