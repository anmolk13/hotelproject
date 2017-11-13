<?php
include ("connect.php");


if (isset($_POST['btn_reg']))

{

$usr =$_GET['nme'];

$fnam = $_POST['fname'];
$lnam = $_POST['lname'];
$usrnm = $_POST['unme'];
$ps  = $_POST ['psw'];
$ad = $_POST['add']; 
$em = $_POST['eml'];
$cnum = $_POST['cnum'];
$jdate= $_POST['jdate'];
$mstat = $_POST['mstat'];
$wstat = $_POST['wstat'];
$gen = $_POST['gender'];



$sql = "insert into tbl_user_registration (userid, fname, lname,userpic,address,email,cnum, joindate,maritialstatus,workstatus,gender,citizenship,username, password) 
values (NULL,'$fnam','$lnam','','$ad','$em','$cnum','$jdate','$mstat','$wstat','$gen','','$usrnm','$ps')";
 
$query =  $con ->query($sql);
//for image uploading.
$insert_id = $con->insert_id; // the insert id will be one.
$insert_id2 = $con->insert_id;



$fname_old = $_FILES['oo']['name'];//retrieves old file name.
$fname_old2 = $_FILES['cp']['name'];

$ex = pathinfo($fname_old,PATHINFO_EXTENSION);// gets the extension of the file or image.
$exten = pathinfo($fname_old2,PATHINFO_EXTENSION);





if($ex=='jpg' || $ex=='png' ||$ex=='gif')//check the extension of file as not to allow anything other than image to be uploaded.
{
$fname_new = "user_".$insert_id."_pic.".$ex;//provides new name for uploaded image.


 if(move_uploaded_file($_FILES['oo']['tmp_name'],"pic/".$fname_new)){
         $query2 = "update tbl_user_registration set userpic ='$fname_new' where userid = '$insert_id'";
        $check2 = $con->query($query2); 


}
}

if($exten='jpg' || $exten='png'|| $exten=='gif')
{
//$fname_new1 = "citizenship_".$insert_id2."_pic.".$exten;
$fname_new1 = "citizenship_".$insert_id2."_pic.".$ex;

if(move_uploaded_file($_FILES['cp']['tmp_name'],"cit/".$fname_new1))
{

	 $query3 = "update tbl_user_registration set citizenship ='$fname_new1' where userid = '$insert_id2'";
    $check3 = $con->query($query3);
   
  header("refresh:0;user_reg.php?nme=".$usr."&msg1=Successfully Inserted");



}


}









}
?>