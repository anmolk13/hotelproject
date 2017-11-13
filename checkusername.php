<?php
include("connect.php");

$check = $_GET['usrnme'];
if(!empty($check)){
$s="select * from tbl_user_registration where username =  '$check' ";

$query= $con->query($s);

$num= $query->num_rows; // it counts the number of rows affected
if($num>0)
{
 
  echo "<font color='red'>Username already exists, use new username</font>";
}
else
{
	echo "<font color='green'>Username available</font>";
	
}
}




 ?>