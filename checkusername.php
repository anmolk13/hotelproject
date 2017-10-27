<?php
include("connect.php");

$check = $_GET['usrnme'];
$s="select * from tbl_user_registration where username =  '$check' ";

$query= $con->query($s);

$num= $query->num_rows; // it counts the number of rows affected
if($num>0)
{
 if(!empty($check)){
  echo "Username already exists, use new username";
}
else
{
	echo "Username available";
	
}
}




 ?>