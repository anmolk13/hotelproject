<?php 

include("connect.php");

$emailhotel =$_POST['eml'];
$cont =$_POST['contct'];
$address =$_POST['add'];
$site =$_POST['web'];
$pob =$_POST['pan'];
$vat = $_POST['vat'];
$usr = $_GET['nme'];
$hid=$_GET['id'];
	 $query1="update tbl_general set emailhotel='$emailhotel',contact='$cont',address='$address',site='$site',pan='$pob',vat='$vat' where genid='$hid'";
 $con->query($query1);
header("location:gensetting.php?nme=".$usr."&msg1=Successfully Inserted.");
?>