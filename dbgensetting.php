<?php 

include("connect.php");
$namehotel =$_POST['hname'];
$emailhotel =$_POST['eml'];
$cont =$_POST['contct'];
$address =$_POST['add'];
$pob =$_POST['pob'];

	 $query1="insert into tbl_general values(NULL,'$namehotel','$emailhotel','$cont','$address','$pob','')";
 $con->query($query1);


//for image uploading.
 $insert_id = $con->insert_id; // the insert id will be one.


 $fname_old = $_FILES['img']['name'];//retrieves old file name.


 $ex = pathinfo($fname_old,PATHINFO_EXTENSION);// gets the extension of the file or image.

 if($ex=='jpg' || $ex=='png' ||$ex=='gif')//check the extension of file as not to allow anything other than image to be uploaded.
 {
 $fname_new = "logo_".$insert_id."_pic.".$ex;//provides new name for uploaded image.


  if(move_uploaded_file($_FILES['img']['tmp_name'],"logo/".$fname_new)){
          $query2 = "update tbl_general set logopic ='$fname_new' where genid = '$insert_id'";
         $check2 = $con->query($query2); 
         echo "success";


 }
 }






//}

?>