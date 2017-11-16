<?php
include  "connect.php";



if (isset($_POST['btn_plan']))
{
$code = $_POST['plancode'];
$name = $_POST['planname'];
$detail = $_POST['plandetail'];
$price = $_POST['planprice'];
$usr = $_GET['nme'];
$sql1 = "insert into tbl_plan 
values (NULL,'$code','$name','$detail','$price')";
 
 $con ->query($sql1);
 header("refresh:0;plans.php?nme=".$usr."&msg1=Successfully added.");
}
