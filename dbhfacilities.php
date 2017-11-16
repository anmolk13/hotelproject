<?php
include  "connect.php";



if (isset($_POST['btn_facili']))
{
$fac = $_POST['facility'];
$usr = $_GET['nme'];
$sql1 = "insert into tbl_hotel_facilities 
values (NULL,'$fac')";
 
 $con ->query($sql1);


header("refresh:0;hfacilities.php?nme=".$usr."&msg1=Successfully added.");
}






if (isset($_POST['btn_rtype']))
{
$roomtype = $_POST['rtype'];
$usr = $_GET['nme'];
$sql2 = "insert into tbl_add_roomtype 
values (NULL,'$roomtype')";
 
 $con ->query($sql2);

header("refresh:0;hfacilities.php?nme=".$usr."&msg3=Successfully added.");
}



?>