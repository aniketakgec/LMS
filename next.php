<html>
<head>
</head>
<body>
<form>
<h3>CHOOSE YOUR PARTNER/PARTNERS</h3>
</form>
</body>
</html>


<?php
include('connection.php');
session_start();
$sid=$_SESSION['sid'];
echo $sid;
echo "<br><br>";
$type=$_SESSION['type'];
$gender=$_SESSION['gender'];


	
		$query1="select * from student_registration where not student_no='$sid'"; 
	$data1=mysqli_query($conn,$query1);
	$rows1=mysqli_num_rows($data1);
	if($data1)
	{	
		$select= '<select name="select1">';
while($result1=mysqli_fetch_assoc($data1))
  {
      $select.='<option value="'.$result1['ID'].'">'.$result1['STUDENT_NO'].'</option>';
  }
$select.='</select>';
echo "partner1";
echo $select;
	}	
else
{	
echo mysqli_error($conn);
}
echo "<br><br>";


	$query2="select * from student_registration where not student_no='$sid'"; 
	$data2=mysqli_query($conn,$query2);
	$rows2=mysqli_num_rows($data2);
	if($data2)
	{
			$select= '<select name="select2">';
while($result2=mysqli_fetch_assoc($data2))
		{
      $select.='<option value="'.$result2['ID'].'">'.$result2['STUDENT_NO'].'</option>';
         }
$select.='</select>';
echo "partner2";
echo $select;
		}
else
{
	echo mysqli_error($conn);
}
echo '<t>';


if(isset($_POST['done']))
{
echo "hello";
}
?>
