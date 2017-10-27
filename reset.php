<?php

include("connect.php");

 $email = $_POST['checkemail'];



echo $query = "select email from tbl_user_registration where email='$email'";

 $result = $con-> query($query);



$num = $result->num_rows;

if ($num == 1){

	header("location:changepsw.php");
}else{
    header("location:login.php");

}









?>
