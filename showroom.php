<?php
include("connect.php");

$check = $_GET['roomnumber'];
if(!empty($check)){
$s="select * from tbl_room where roomid =  '$check' ";

$query= $con->query($s);

//$num= $query->num_rows; // it counts the number of rows affected
       $data5 = $query->fetch_array();
  			$rom=$data5['roomtypeid'];

  $rt="select roomtype from tbl_add_roomtype where roomtypeid='$rom'";
   $query1= $con->query($rt);
   $data2 = $query1->fetch_array();

  echo "Room type : ".$data2['roomtype']."<br>";

  if(!empty($data5['singlebed'])){
   echo "Single Bed Quantity : ".$data5['singlebed']."<br>";
   }
   if(!empty($data5['doublebed'])){
   echo "Double Bed Quantity : ".$data5['doublebed']."<br>";
   }
   if(!empty($data5['kingbed'])){
   echo "King Bed Quantity : ".$data5['kingbed']."<br>";
   }
   if(!empty($data5['twinsbed'])){
   echo "Twins Bed Quantity : ".$data5['twinsbed']."<br>";
   }
   echo "Hotel Facilities : "."<br>";
   $hf=$data5['hotelfacilitiesid'];
$hotel=explode(",", $hf);//split value of checkbox value
$k=sizeof($hotel);//count array
$cou=1;
foreach ($hotel as $a) {
	
for ($i=1; $i <=$k ; $i++) { 
	$hfac="select facilities from tbl_hotel_facilities where hotelfac_id='$a'";
	   $query3= $con->query($hfac);
   $data4 = $query3->fetch_array();
}

echo "<span style='margin-left:80px;'>"."$cou".") ".$data4['facilities']."</span><br>";
$cou=$cou+1;	
}
 

     echo "Room Price : Rs. ".$data5['roomprice']."<br>";
	echo "Maximum Person : ".$data5['maxperson']."<br>";
	echo "Extra Person Charge : Rs. ".$data5['extrapersoncharge']."<br>";
	echo "Maximum Children Charge : Rs. ".$data5['maxnumchildcharge']."<br>";

  }



 ?>