<?php 

include("connect.php");





if (isset($_POST['btn_addroom'])){
$roomno =$_POST['rn'];
$room_type =$_POST['rtype'];
$nobed =$_POST['numbed'];
$attach =$_POST['attb'];
$a =$_POST['ac'];


$qu="select roomno from tbl_room where roomno='$roomno'";
$res=$con->query($qu);

$nu=$res->num_rows;

if($nu!=0){
	echo "Already Exit Room . Failed to Add Room";
	die();
	
}

	$quer="insert into tbl_room values(NULL,'$roomno','$room_type','$nobed','$attach','$a')";
$con->query($quer);
echo "success";

}

?>