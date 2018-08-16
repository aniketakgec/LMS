<?php
session_start();

include 'dbh.inc.php';
mysqli_query($conn,"update messages set read1='y' where d_username='$_SESSION[u_uid]'");
?>
<head>
<link rel="stylesheet"type="text/css" href="css/message.css"></head>
<body>
<form action="message_from_librarian.php" method="POST">
<input type="submit" value="back" name="submit">
</form>

<table cellpadding="2px" cellspacing="2px" border="2px">
<tr>
<th> NAME</th>
<th>TITLE</th>
<th>MESSAGE</th>
</tr>
<tr>

<?php

$query=mysqli_query($conn,  "select * from messages where d_username='$_SESSION[u_uid]' order by id desc ");
while($row=mysqli_fetch_array($query))
{
  	
   echo "<td>$row[s_username]</td>";	
    echo "<td>$row[title]</td>";	
	 echo "<td>$row[msg]</td>";	
	 echo "</tr>";
}
?>
<?php
if(isset($_POST["submit"]))
{
 header("Location: ../student/index.php");
	
	
}	
?>
</table>
</body>
</html>