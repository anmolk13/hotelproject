<?php 

if (isset($_POST['btn_save'])){

include("connect.php");
$usr = $_GET['nme'];

$categry =$_POST['mainfood'];
$item = $_POST['fitem'];
$full = $_POST['fprice'];
$half = $_POST['hprice'];

$query= "insert into tbl_foodmenu(item_category,item_name,fprice,hprice) values ('$categry','$item','$full','$half')";

	$run= $con->query($query);
	
	
 if ($run) {
 header("refresh:0;cuisinemenu.php?nme=".$usr."&msg1=Successfully Inserted.");
 }else{
 	header("refresh:0;cuisinemenu.php?nme=".$usr."&msg1=Something went wrong. TRY AGAIN.");
 }





             


}
?>