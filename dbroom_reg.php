<?php 

include("connect.php");





if (isset($_POST['btn_addroom'])){
	$usr=$_GET['nme'];
$roomno =$_POST['rn'];
$room_type =$_POST['select_roomtype'];
$sin =$_POST['single'];
$dou =$_POST['double'];
$kin =$_POST['king'];
$tw =$_POST['twins'];
$hotel_fac =$_POST['facil'];
$hotel=implode(",", $hotel_fac);


$maxnobed =$_POST['maxnumbed'];
$extrabed =$_POST['extrabed'];
$rprice =$_POST['roomprice'];
$maxperson =$_POST['maxper'];
$extraper =$_POST['extraperson'];
$maxchildern =$_POST['maxchild'];

$qu="select roomno from tbl_room where roomno='$roomno'";
$res=$con->query($qu);

$nu=$res->num_rows;



// $chk=""; 
// $hotel=0;
// foreach($hotel_fac as $chk1) 
// { 
// $chk .= $chk1.","; 

// } 
// echo $chk;


	$quer="insert into tbl_room (roomno,roomtypeid,singlebed,doublebed,kingbed,twinsbed,hotelfacilitiesid,maxnumbed,extrabed,roomprice,maxperson,extraperson,maxnumchild) values('$roomno','$room_type','$sin','$dou','$kin','$tw','$hotel','$maxnobed','$extrabed','$rprice','$maxperson','$extraper','$maxchildern')";
$con->query($quer);
header("refresh:0;room.php?nme=".$usr."&msg1=Successfully Inserted");

}

?>