<?php 
include ("connect.php");

$usrnm = $_POST['usrnme'];
$ps = $_POST['psw'];

$query = "select * from tbl_user_registration where username = '$usrnm' AND password = '$ps'";

$result = $con->query($query);
$num = $result->num_rows;

if ($num==1){
header("location:main.php");



}else{

	header("location:login.php?error1=username or password invalid");
}




?>