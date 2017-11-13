<?php 

if (isset($_POST['btntbl'])){

include("connect.php");
$usr = $_GET['nme'];

$num =$_POST['tblnum'];


$query= "insert into tbl_table(tablenum) values('$num')";

	$run= $con->query($query);
	
	
 if ($run) {
 header("refresh:0;table.php?nme=".$usr."&msg1=Successfully Inserted.");
 }else{
 	header("refresh:0;cuisinemenu.php?Snme=".$usr."&msg1=Something went wrong. TRY AGAIN.");
 }





             


}
?>