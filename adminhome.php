 <?php
 include_once 'dbh.inc.php';
 ?><html>
 <head>
 <style>

</style>
</head>

<body>
<form action="adminhome.php" method="POST" align="center">
<button  type="submit" name="submit1" >Add Hostel</button>
<button  type="submit" name="submit2" >Add rooms</button>
<button  type="submit" name="submit3" >Update rooms</button>
</form>
</body> 
</html>
<?php

if(isset($_POST["submit1"]))
{   
?><form align="center" action="adminhome.php" method="POST">
    <input type="text" name="hname" placeholder="HOSTEL NAME"><br>
	 <input type="number" name="RPF" placeholder="ROOMS PER FLOOR"><br>
	  <input type="text" name="year" placeholder="YEAR"><br>
	   <input type="text" name="gender" placeholder="HOSTELER'S GENDER"><br>
	<button  type="submit" name="submit" >Create Hostel</button>
    </form>
	
	


<?php
}
?>
 <?php  
 if(isset($_POST["submit"]))
 { date_default_timezone_set("asia/kolkata");
$time = time();
$createdate= date('y-m-d H:i:s', $time);

$sql = "INSERT INTO hostel(id, Name, RPF, year, gender,updated_at) VALUES ('','$_POST[hname]','$_POST[RPF]','$_POST[year]','$_POST[gender]','$createdate')";

if(mysqli_query($conn, $sql)){
    echo "Hostel created successfully";

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
	
	 
 } 
 
 
 ?>
 
 
 
 
 
 <?php

if(isset($_POST["submit2"]))
{   
?><form align="center" action="adminhome.php" method="POST">
    <input type="text" name="hname" placeholder="HOSTEL NAME"><br>
	<input type="text" name="Qrooms" placeholder="Quantity of rooms"><br>
	<input type="text" name="roomtype" placeholder="type of rooms"><br>
	
	
	<button  type="submit" name="submit5" >Create Rooms</button>
    </form>


<?php
}
?>
 <?php  
 if(isset($_POST["submit5"]))
 {
 $q=$_POST["Qrooms"];
$t=$_POST["roomtype"]; 

$s= "SELECT RPF FROM hostel WHERE Name ='$_POST[hname]'";
$x=mysqli_query($conn, $s);
$r=mysqli_fetch_assoc($x);
$num=100;
if($q<=$r["RPF"])
{

for($i=0;$i<$q;$i++)
{ $z=$num+$i;

	$sql = "INSERT INTO rooms (id,RoomNo,Name,Type,teamid,Availability) VALUES ('', '$z','$_POST[hname]','$t','','yes');";
	$res=mysqli_query($conn, $sql);
}
if ($res) {
    echo "room created successfully";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}
else if($q>$r["RPF"]){
	$diff=$q-$r["RPF"];
for($i=0;$i<$r["RPF"];$i++)
{ $z=$num+$i;

	$sql = "INSERT INTO rooms (id,RoomNo,Name,Type,teamid,Availability) VALUES ('', '$z','$_POST[hname]','$t','','yes');";
	$res=mysqli_query($conn, $sql);
}

$index=$num/100;
$index++;
$index*=100;

for($i=0;$i<$diff;$i++)
{ $z=$index+$i;

	$sql = "INSERT INTO rooms (id,RoomNo,Name,Type,teamid,Availability) VALUES ('', '$z','$_POST[hname]','$t','','yes');";
	$res=mysqli_query($conn, $sql);
}
	
	if ($res) {
    echo "room created successfully";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
	
	
	
}
 } 
 
 ?>
 
 
 <?php

if(isset($_POST["submit3"]))
{   
?><form align="center" action="adminhome.php" method="POST">
    <input type="text" name="hname" placeholder="HOSTEL NAME"><br>
	 <input type="text" name="roomn" placeholder="Room Number"><br>
	  <input type="text" name="type" placeholder="TYPE"><br>
	<button  type="submit" name="submit6" >Update</button>
    </form>


<?php
}
?>
<?php

if(isset($_POST["submit6"])){
	
$query="UPDATE $_POST[hname] SET Type= $_POST[type]  WHERE RoomNo=$_POST[roomn]";
		$condition=mysqli_query($conn, $query);

if ($condition) {
    echo "room updated successfully";
} else {
    echo "ERROR: Could not able to execute $condition. " . mysqli_error($conn);
}
	
	}


?>











