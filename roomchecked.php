


<?php
include("connect.php");

$check = $_GET['checkrm'];
if(!empty($check)){
$s="select * from tbl_room where roomno =  $check ";

$query= $con->query($s);

$num= $query->num_rows; // it counts the number of rows affected
if($num>0)
{
 
  echo "<font color='red'>Already Exit Room . Failed to Add Room</font>";
}
else
{
	echo "<font color='green'>Room number available</font>";
	
}
}




 ?>