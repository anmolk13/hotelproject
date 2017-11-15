


<?php
include("connect.php");

$check = $_GET['drinkco'];
if(!empty($check)){
$s="select * from tbl_drinkmenu where drink_code =  $check ";

$query= $con->query($s);

$num= $query->num_rows; // it counts the number of rows affected
if($num>0)
{
 
  echo "<font color='red'>Already Exit Drink Code . Failed to Add Drink Code</font>";
}
else
{
	echo "<font color='green'>Drink Code available</font>";
	
}
}




 ?>