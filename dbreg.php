<?php
include ("connect.php");


if (isset($_POST['btn_reg']))
{
$fnam = $_POST['fname'];
$lnam = $_POST['lname'];
$usrnm = $_POST['unme'];
$ps  = $_POST ['psw'];
$usrpic  = $_POST ['ppic'];
$ad = $_POST['add']; 
$em = $_POST['eml'];
$cnum = $_POST['cnum'];
$jdate= $_POST['jdate'];
$mstat = $_POST['mstat'];
$wstat = $_POST['wstat'];
$gen = $_POST['gender'];
$cit =$_POST['cpic'];


$sql = "insert into tbl_user_registration (userid, fname, lname, userpic,address,email,cnum, joindate,maritialstatus,workstatus,gender,citizenship,username, password) 
values (NULL,'$fnam','$lnam','$usrpic' ,'$ad','$em','$cnum','$jdate','$mstat','$wstat','$gen','$cit','$usrnm','$ps')";
 
 $query =  $con ->query($sql);

 if ($query){
	 
	 echo "success";
	 header ("location:login.php");
 }else{
	 
	 echo "fail";
 }
}
?>