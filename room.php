		
		<!DOCTYPE html>
		<html>
		<head>
			<title>Room Registration</title>
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

		<div>
<nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                  <?php 
               $usr = $_GET['nme'];
                         include("connect.php");

              $sql = "select * from tbl_general";

              $result = $con->query($sql);

              $data = $result->fetch_array();
               ?>
                    <!-- Branding Image -->
                    <span class="navbar-brand" href="">
                       <img src="logo/<?php echo $data['logopic']; ?>" class="" width="50%" height="35px"  />
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
				    <a href="#">Link 1</a>
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
             <li><a href="">Contact us </a></li>
             <li><a href="gensetting.php?nme=<?php echo $usr;?>" >Settings </a></li>
             </ul>
            </nav> 
<div class= "main col-xs-9 form-style-8" style=" margin-top: 8%; margin-left: 35%;  max-width: 850px; ">

		<form method="post" action="dbroom_reg.php?nme=<?php echo $usr;?>">
			
 <?php 
if (isset($_GET['msg1'])) {
?><div style="font-size: 20px; border:1px solid black; max-width: 250px;" >
  <?php echo "<span class='glyphicon glyphicon-ok'> </span>"." ".$_GET['msg1'] ;
?>  </div><?php
}


 ?> 


			<p>	
			<input type="number" min=1  name="rn" autofocus placeholder="Room Number.." required/>
</p>
<p>
<?php
      $sql="SELECT * FROM tbl_add_roomtype";

      $res=$con->query($sql);

$nu=$res->num_rows;

$select= '<select name="select_roomtype" required>';
$select.='<option value="" disabled selected style="display: none;">'.'Choose Room Type...'.'</option>';
while($data1 = $res->fetch_array()){
      $select.='<option value="'.$data1['roomtypeid'].'">'.$data1['roomtype'].'</option>';
  }

$select.='</select>';
echo $select;
?>
			</p>


<p>
<?php
      $sql="SELECT * FROM tbl_add_bedtype";

      $res=$con->query($sql);

$nu=$res->num_rows;

$select= '<select name="select_bedtype" required>';
$select.='<option value="" disabled selected style="display: none;">'.'Choose Bed Type...'.'</option>';
while($data1 = $res->fetch_array()){
      $select.='<option value="'.$data1['bedtypeid'].'">'.$data1['bedtype'].'</option>';
  }

$select.='</select>';
echo $select;
?>
      </p>

<p>
  Select Hotel Facilities<br>
<?php
      $sql="SELECT * FROM tbl_hotel_facilities";

      $res=$con->query($sql);

$nu=$res->num_rows;


while($data1 = $res->fetch_array()){
   echo "<input type='checkbox' name='facil[]' value='".$data1['hotelfac_id']."'>".""
    .$data1['facilities']."<br>";
  }


?>

      </p>
			
			
			<p>
			<input type="number"  min=0 name="maxnumbed" placeholder=" Maximum number of Beds..."   autocomplete="on" required  />
			</p>
			 
      
      <p>
      <input type="number"  min=0 name="extrabed" placeholder=" Extra Bed..."   autocomplete="on" required  />
      </p>
			

      <p>
      <input type="number"  min=0 name="roomprice" placeholder=" Room price..."   autocomplete="on" required  />
      </p>


      <p>
      <input type="number"  min=0 name="maxper" placeholder=" Maximum Person..."   autocomplete="on" required  />
      </p>

      
      <p>
      <input type="number"  min=0 name="extraperson" placeholder=" Extra Persons..."   autocomplete="on" required  />
      </p>

      
      <p>
      <input type="number"  min=0 name="maxchild" placeholder=" Maximum number of Children..."   autocomplete="on" required  />
      </p>


			<p>
			<input type="submit" value="Add Room"  class="" name="btn_addroom" style="margin-bottom: 9%;">
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





</div>
		
		</body>
		<?php include "footer.php";?>
		</html>	