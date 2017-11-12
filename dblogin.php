<?php 
include ("connect.php");

$usrnm = $_POST['usrnme'];
$ps = $_POST['psw'];

$query = "select * from tbl_user_registration where username = '$usrnm' AND password = '$ps'";

$result = $con->query($query);
$num = $result->num_rows;

if ($num==1){
header("location:adminpanel.php"."?"."nme=".$usrnm);



}else{

	header("location:index.php?error1=Username or password invalid");
}




?>