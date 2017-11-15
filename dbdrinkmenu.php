<?php 

if (isset($_POST['btn_drinkmenu'])){

include("connect.php");
$usr = $_GET['nme'];

$dname =$_POST['drinknam'];
$dtype = $_POST['drinkty'];
$dcode = $_POST['drinkcod'];
$full = $_POST['fprice'];
$half = $_POST['hprice'];
$quarter = $_POST['qprice'];

$query= "insert into tbl_drinkmenu values (NULL,'$dname','$dtype','$dcode','$full','$half','$quarter')";

	$run= $con->query($query);
	
	
 if ($run) {
 header("refresh:0;drinkmenu.php?nme=".$usr."&msg1=Successfully Inserted.");
 }else{
 	header("refresh:0;drinkmenu.php?nme=".$usr."&msg1=Something went wrong. TRY AGAIN.");
 }





             


}
?>