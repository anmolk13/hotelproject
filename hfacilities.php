<?php
                         include("connect.php");
if(isset($_GET['deleteid']))
  {
      $id=$_GET['deleteid'];
      $usr = $_GET['nme'];
    // it will delete an actual record from db
    $r="DELETE FROM tbl_hotel_facilities WHERE hotelfac_id ='$id'";
$con->query($r);
    
    header("Location: hfacilities.php?nme=".$usr);
  }


if(isset($_GET['deletebedid']))
  {
      $id=$_GET['deletebedid'];
      $usrr = $_GET['nme'];
    // it will delete an actual record from db
    $r="DELETE FROM tbl_add_bedtype WHERE bedtypeid ='$id'";
$con->query($r);
    
    header("Location: hfacilities.php?nme=".$usrr);
  }

if(isset($_GET['deleteroomid']))
  {
      $id=$_GET['deleteroomid'];
      $usrr = $_GET['nme'];
    // it will delete an actual record from db
    $r="DELETE FROM tbl_add_roomtype WHERE roomtypeid ='$id'";
$con->query($r);
    
    header("Location: hfacilities.php?nme=".$usrr);
  }


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
	 <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
	  <script src="bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="JQuery.js"></script>
            <link rel ="stylesheet" type="text/css" href = "form.css" />
	<link rel="stylesheet" href="sidebar.css">

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
<nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                  <?php 
                                $sql = "select * from tbl_general";

              $result = $con->query($sql);

              $data = $result->fetch_array();
               $usr = $_GET['nme'];?>
                    <!-- Branding Image -->
                    <span class="navbar-brand" href="">
                       <img src="logo/<?php echo $data['logopic']; ?>" style="margin-bottom: 20px;" class="" width="50%" height="35px"  />

                    </span>
                    <a class="navbar-brand" href="adminpanel.php?nme=<?php echo $usr;?>">
                      <?php 




							echo $data['namehotel'];







             		
                	 ?>
                    
                </div>
                <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
       	        <a href="#" class="glyphicon glyphicon-user">  <?php echo $usr ?></a>

       			 <div class="dropdown-content" style="right:0;">
				     <a href="user_reg.php?nme=<?php echo $usr;?>">Register User</a>
				   <a href="logout.php">Log Out</a>
				    
				  </div>	
				  </li>
				  </ul>
				  </div>
				  </nav>
				  </div>

               <nav class="navigation">
  			  <ul class="mainmenu">
 			  <li><a href="cuisinemenu.php?nme=<?php echo $usr;?>">Edit Menu Items</a>
    
      </li>
         <li><a href="drinkmenu.php?nme=<?php echo $usr;?>">Drinks Menu </a></li>



              


              <li><a href="">Room</a>
              <ul class="submenu">
              <li><a href="room.php?nme=<?php echo $usr;?>">Register Room</a></li>
              <li><a href="">Booked Room</a></li>
              <li><a href="">Checked In</a></li>
              <li><a href="">Checked Out</a></li>
              <li><a href="hfacilities.php?nme=<?php echo $usr;?>">Hotel Facilities</a></li>
             </ul>
             </li>
             <li><a href="">View orders</a></li>
             <li><a href="table.php?nme=<?php echo $usr;?>">Insert Table Number</a></li>
             <li><a href="">Contact us </a></li>
             <li><a href="gensetting.php?nme=<?php echo $usr;?>" >Settings </a></li>
             </ul>
            </nav> 



	
<div class="main col-xs-9 form-style-8" style=" margin-top: 7%; margin-left: 16.5%;  max-width: 900px; ">
<form action="dbhfacilities.php?nme=<?php echo $usr;?>" method="post" >

	
<h2 style="background-color: #FFF8DC;">  Insert Hotel Facilities</h2>

 <?php 
if (isset($_GET['msg1'])) {
?><div style="font-size: 20px; border:1px solid black; max-width: 250px;" >
  <?php echo "<span class='glyphicon glyphicon-ok'> </span>"." ".$_GET['msg1'] ;
?>  </div><?php
}


 ?> 

<div>
<?php

$s="select * from tbl_hotel_facilities";
$result=$con->query($s);
$num=$result->num_rows; // it counts the number of rows affected
if($num>0)

{
  echo "List of All Hotel Facilities-<br>";
  $n=1;
while($data3 = $result->fetch_array()){
  ?>
  <p><?php
echo $n.")  "?> <a class="btn btn-default" style="" href="?deleteid=<?php echo $data3['hotelfac_id'];?>&nme=<?php echo $usr?>" onclick="return confirm('sure to delete ?')"><span class="glyphicon glyphicon-remove-circle"></span>Delete</a> <?php echo $data3['facilities']."<br>";
$n++;

?>
</p>
<?php
}

}
?>
</div>
	<hr>
							
			<p>
			<input type="text"  name="facility" placeholder="Eg: wifi, tv etc"   autocomplete="on" required  />
		</p>
			
						<p>
			<input type="submit" value="Save"  class="" name="btn_facili">
			</p>

			


</form>

</div>


<div class="main col-xs-9 form-style-8" style=" margin-top: 5%; margin-left: 16.5%;  max-width: 900px; ">

<form action="dbhfacilities.php?nme=<?php echo $usr;?>" method="post" >

	
<h2 style="background-color: #FFF8DC;">  Add Bed Types</h2>

 <?php 
if (isset($_GET['msg2'])) {
?><div style="font-size: 20px; border:1px solid black; max-width: 250px;" >
  <?php echo "<span class='glyphicon glyphicon-ok'> </span>"." ".$_GET['msg2'] ;
?>  </div><?php
}


 ?> 


<div>
<?php

$s="select * from tbl_add_bedtype";
$result=$con->query($s);
$num=$result->num_rows; // it counts the number of rows affected
if($num>0)

{
  echo "List of All Bed Types -<br>";
  $n=1;
while($data2 = $result->fetch_array()){
  ?> <p><?php
echo $n.")  " ?> <a class="btn btn-default" href="?deletebedid=<?php echo $data2['bedtypeid'];?>&nme=<?php echo $usr?>" onclick="return confirm('sure to delete ?')"><span class="glyphicon glyphicon-remove-circle"></span>Delete</a>

<?php echo $data2['bedtype'];?><?php 
$n++;
?></p><?php
}

}
?>
</div>

	<hr>
			
			
					
			<p>
			<input type="text" name="btype" placeholder="Eg: deluxe etc"   autocomplete="on" required  />
		    </p>
			
			<p>
			<input type="submit" value="Save"  class="" name="btn_btype">
			</p>






</form>

</div>


<div class="main col-xs-9 form-style-8" style=" margin-top: 5%; margin-bottom: 7%; margin-left: 16.5%;  max-width: 900px; ">

<form action="dbhfacilities.php?nme=<?php echo $usr;?>" method="post" >

	
<h2 style="background-color: #FFF8DC;">  Add Room Types</h2>

 <?php 
if (isset($_GET['msg3'])) {
?><div style="font-size: 20px; border:1px solid black; max-width: 250px;" >
  <?php echo "<span class='glyphicon glyphicon-ok'> </span>"." ".$_GET['msg3']."<br>" ;
?>  </div><?php
}


 ?> 


<div>
<?php

$s="select * from tbl_add_roomtype";
$result=$con->query($s);
$num=$result->num_rows; // it counts the number of rows affected
if($num>0)

{
  echo "List of All Room Types -<br>";
  $n=1;
while($data1 = $result->fetch_array()){
  ?> <p><?php
echo $n.")  " ?> <a class="btn btn-default" href="?deleteroomid=<?php echo $data1['roomtypeid'];?>&nme=<?php echo $usr?>" onclick="return confirm('sure to delete ?')"><span class="glyphicon glyphicon-remove-circle"></span>Delete</a>

<?php echo $data1['roomtype'];?><?php 
$n++;
?></p><?php
}

}
?>
</div>

	<hr>	
			<p>
			<input type="text" name="rtype" placeholder="Eg: Standard etc"   autocomplete="on" required  />
		</p>
			
						<p>
			<input type="submit" value="Save"  class="" name="btn_rtype">
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

<?php include "footer.php"; ?>


</html>