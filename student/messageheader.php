<?php

include 'dbh.inc.php';
$tot=0;
$res=mysqli_query($conn, "select * from messages where d_username='$_SESSION[u_uid]' and read1='n'");
$tot=mysqli_num_rows($res);
echo $tot;

?>