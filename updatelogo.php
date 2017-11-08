<?php 
error_reporting( ~E_NOTICE );

require_once'connect.php';




  if(isset($_GET['id']) && !empty($_GET['id']))
  {
    $id = $_GET['id'];
    $select=('SELECT namehotel,logopic FROM tbl_general');
    $stmt_edit = $con->query($select);

    $rows = $stmt_edit->fetch_array();
  }
  else
  {
    header("gensetting.php");
  }
  



if(isset($_POST['btnupdate'])){
$hotelname = $_POST['hotel_name'];

$imgFile = $_FILES['img_logo']['name'];
$tmp_dir = $_FILES['img_logo']['tmp_name'];
$imgSize = $_FILES['img_logo']['size'];

if ($imgFile) {


$upload_dir = 'logo/';
$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); 
//gets image extensions nd converts file =name to all lowercase.
$valid_extensions = array('jpeg','jpg','png');
//the extension that are allowed to upload.
$logopic = rand(10,10000).".".$imgExt;

if (in_array($imgExt, $valid_extensions)) {
  
if($imgSize> 200000){

$errMSG = "Sorry, your file is too large.";



}elseif ($imgSize==0) {

  $errMSG = "Sorry, your file is too large."; 
} else{
 unlink($upload_dir.$rows['logopic']);
 move_uploaded_file($tmp_dir, $upload_dir.$logopic);
}
}
else{
  $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
}
  
}else{
  $logopic = $rows['logopic'];
}


//incase of no error, continue..

if (!isset($errMSG)) {
$updatequery = "update tbl_general set namehotel='$hotelname', logopic='$logopic'";



if ($ress=$con->query($updatequery)){?>
                <script>
        alert('Successfully Updated ...');
        window.location.href='gensetting.php?nme=<?php echo $usr;?>';
        </script>
                <?php
 }else{?>
                <script>
        alert('Update Failed ...');
        window.location.href='gensetting.php?nme=<?php echo $usr;?>';
        </script>
                <?php

  }
 
 }
 
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>update Logo </title>
		<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
            <link rel ="stylesheet" type="text/css" href = "form.css" />
	<link rel="stylesheet" href="sidebar.css">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
	    <script src="bootstrap/bootstrap.min.js"></script>
	    <script src="JQuery.js"></script>

	  <script src="bootstrap/bootstrap.min.js"></script>

	  
<style>
	
	.dropdown {
    	position: relative;
    	display: inline-block;
	}

	.dropdown-content {
    	display: none;
    	position: absolute;
    	right: 0;
    	background-color: #f9f9f9;
    	min-width: 160px;
    	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    	z-index: 1;
	}

	.dropdown-content a {
    	color: black;
    	padding: 12px 16px;
    	text-decoration: none;
    	display: block;
	}

	.dropdown-content a:hover {background-color: #f1f1f1}

	.dropdown:hover .dropdown-content {
    	display: block;
	}

	.dropdown:hover .dropbtn {
    	background-color: #3e8e41;
	}

   


</style>
</head>

<body>
<div>
	<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
    <div class="navbar-header">
    <span class="navbar-brand" href="">Logo</span>

<?php   

			$usr = $_GET['nme'];
     
    //  $id = $_GET['id'];
      //  $sql = ('SELECT namehotel, logopic FROM tbl_general WHERE genid='$id'');
      // $res = $con -> query($sql);
      // $data3 = $res->fetch_array();



 ?>


    <a class="navbar-brand" href="adminpanel.php?nme=<?php echo $usr;?>">
    <?php 
    include "connect.php";

     $sql6 = "select namehotel from tbl_general";
      $result6 = $con->query($sql6);
      $data2 = $result6->fetch_array();

       
       echo $data2['namehotel'];

	?>
                    
    </div>
    <ul class="nav navbar-nav navbar-right">
   	<li class="dropdown">
    <a href="#" class="glyphicon glyphicon-user"> <?php echo $usr ?></a>
    <div class="dropdown-content" style="right:0;">
	<a href="#">Link 1</a>
	<a href="logout.php">Log Out</a>
	</div>	
    </li>
	</ul>
    </div>
	</nav>
    </div>


<!-- <?php


    if(isset($errMSG)){
        ?>
              <div class="alert alert-danger">
              <span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
                </div>
    <?php
    }
  else if(isset($successMSG)){
    ?>
        <div class="alert alert-success">
              <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
        </div>
        <?php
  }
  ?>   --> 











    


    <nav class="navigation">
  			  <ul class="mainmenu">
              <li><a href="">New Order</a></li>
              <li><a href="">Room</a>
              <ul class="submenu">
              <li><a href="room.php?nme=<?php echo $usr;?>">Register Room</a></li>
              <li><a href="">Booked Room</a></li>
              <li><a href="">Checked In</a></li>
              <li><a href="">Checked Out</a></li>
              <li><a href="">Room Details</a></li>
             </ul>
             </li>
             <li><a href="">View orders</a></li>
             <li><a href="">Contact us </a></li>
             <li><a href="gensetting.php?nme=<?php echo $usr;?>" >Settings </a></li>
             </ul>
            </nav> 


<div class= "main col-xs-9 form-style-8" style=" margin-top: 10%; margin-left: 40%;  max-width: 600px; ">

		<form method="post" enctype="multipart/form-data">
	<p>
    <input type="text" name="hotel_name" placeholder="<?php echo $rows['namehotel'] ?>"  required />
    </p>
    
    <p>
    <label>Hotel Logo</label>
    <input class="input-group" type="file" name="img_logo" accept="image/*"  />
    </p>

    <p><img src="logo/<?php  echo $rows['logopic'] ?>" height="150" width="150" /></p>
    
    <p>
    <button type="submit" name="btnupdate" id="btn2" class="btn btn-default">
    <span class="glyphicon glyphicon-edit"></span> &nbsp; update
    </button>
    </p>
    
		</form>
</div>


 <nav class="n">
   <ul class="mainmenu">
   <li><a href="">New Order</a></li>
   <li><a href="">View orders</a>
   </li>
   </ul>
</nav>
 






</body>

<?php include "footer.html" ?>

</html>