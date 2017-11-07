<?php

include("connect.php");

$uname = $_POST['usrnme'];
$pass = $_POST['psw'];





$query = "select email from tbl_user_registration where username = '$uname'";
$check = $con->query($query);
$row = $check->num_rows;
//first check whether the username is in the database table or not. 

//and counts no. of rows. if the row exists, then only it changes or updates the password. else it doesn't update.
 if ($row==1 AND $pass != ""){

 	$query2 = "update tbl_user_registration set password='$pass' where username ='$uname'";
 	$check2 = $con->query($query2);
    echo"successfully updated";


// 	echo"password successfully updated";
}else if($pass ==""){

	echo"password field is empty";
}else{
	echo"The username is incorrect. Try again";

}



if (isset($_POST['back'])){

 header("location:index.php");

}





?>