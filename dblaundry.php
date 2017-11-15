<?php
include  "connect.php";



if (isset($_POST['btn_laundry']))
{
$name = $_POST['itemname'];
$price = $_POST['itemprice'];
$usr = $_GET['nme'];
$sql1 = "insert into tbl_laundry 
values (NULL,'$name','$price')";
 
 $con ->query($sql1);
header("refresh:0;laundry.php?nme=".$usr."&msg1=Successfully added.");
}
