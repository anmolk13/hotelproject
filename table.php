<?php
include  "connect.php";

if(isset($_GET['deletetableid']))
  {
      $id=$_GET['deletetableid'];
      $usr = $_GET['nme'];
    // it will delete an actual record from db
    $r="DELETE FROM tbl_table WHERE tableid ='$id'";
$con->query($r);
    
    header("Location: table.php?nme=".$usr);
  }

  ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
            <link rel ="stylesheet" type="text/css" href = "form.css" />
  <link rel="stylesheet" href="sidebar.css">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
      <script src="bootstrap/bootstrap.min.js"></script>
      <script src="JQuery.js"></script>
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
                  <?php  
               $usr = $_GET['nme'];
                                        

              $sql = "select * from tbl_general";

              $result = $con->query($sql);

              $data = $result->fetch_array();

               ?>
                    <!-- Branding Image -->
                    <span class="navbar-brand" href="" >
                       <img src="logo/<?php echo $data['logopic']; ?>" style="margin-bottom: 20px;" class="" width="50%" height="35px"  />

                    </span>
                    <span class="navbar-brand" href="admin.php?nme=<?php echo $usr;?>">
                      <?php 


							echo $data['namehotel'];

             			 ?>
                    </span>
                </div>
               


       <ul class="nav navbar-nav navbar-right">

       <li class="dropdown">
       	<a href="#" class="glyphicon glyphicon-user"> <?php echo $usr ?></a>

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
     <li><a href="laundry.php?nme=<?php echo $usr;?>" >Laundry Facilities </a></li>
     <li><a href="plans.php?nme=<?php echo $usr;?>" >Plans </a></li>
  </ul>
</nav>








<div class= "main col-xs-9 form-style-8" style=" margin-top: 10%; margin-left: 40%;  max-width: 800px; ">

    <form method="post" action="dbtable.php?nme=<?php echo $usr;?>">

 <?php 
if (isset($_GET['msg1'])) {?>

<div style="font-size: 20px; border:1px solid black; max-width: 250px;" >

  <?php echo "<span class='glyphicon glyphicon-ok'> </span>"." ".$_GET['msg1'] ;
   ?>  
</div>

<?php
}


 ?> 










  <p>
    <input type="text" name="tblnum" placeholder="Insert Table Number or Name.. "  required />
    </p>
    
    <p>
    <input type="submit" name="btntbl" value="SAVE">
    </p>
    
    </form>
<div>
<?php

$s="select * from tbl_table";
$result=$con->query($s);
$num=$result->num_rows; // it counts the number of rows affected
if($num>0)

{
  echo "<p style='font-size:20px ;text-decoration:underline; '>"."List of Table name/number:-</p>";
  $n=1;
while($data3 = $result->fetch_array()){
  ?>
  <p><?php
echo $n.")  "?> <a class="btn btn-default" style="" href="?deletetableid=<?php echo $data3['tableid'];?>&nme=<?php echo $usr?>" onclick="return confirm('sure to delete ?')"><span class="glyphicon glyphicon-remove-circle"></span>Delete</a> <?php echo $data3['tablenum']."<br>";
$n++;

?>
</p>
<?php
}

}
?>
</div>

</div>


<nav class="n">
  <ul class="mainmenu">
    <li><a href="">New Order</a></li>
    <li><a href="">View orders</a>
     
    </li>
    
  </ul>
</nav>


</body>
<?php include "footer.php";?>
</html>