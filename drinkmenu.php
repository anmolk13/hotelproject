<?php
                         include("connect.php");
if(isset($_GET['deleteplanid']))
  {
      $id=$_GET['deleteplanid'];
      $usr = $_GET['nme'];
    // it will delete an actual record from db
    $r="DELETE FROM tbl_plan WHERE planid ='$id'";
$con->query($r);
    
    header("Location:plans.php?nme=".$usr);
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

<script >
  
       
       function drinkcode()
{
  var store = document.getElementById('drinkc').value; 
  var req;
  if(window.XMLHttpRequest)
  {
    req = new XMLHttpRequest();
    
  }else req = new ActiveXObject("Microsoft.XMLHTTP");
  req.onreadystatechange = function()
  {
    if(req.readyState==4)
    {
      document.getElementById('checkcode').innerHTML = req.responseText;
    }
  }
req.open("GET", "drinkcodechecked.php?drinkco="+store, true)
req.send();
} 

</script> 

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

<div class="main col-xs-9 form-style-8" style=" margin-top: 7%; margin-left: 17%;  max-width: 900px; ">

<form action="dbdrinkmenu.php?nme=<?php echo $usr;?>" method="post" >

  

	
<h2 style="background-color: #FFF8DC;"> <span class="glyphicon glyphicon-glass"></span> INSERT DRINK MENU INFORMATION</h2>

 <?php 
if (isset($_GET['msg1'])) {?>

<div style="font-size: 20px; border:1px solid black; max-width: 250px;" >

  <?php echo "<span class='glyphicon glyphicon-ok'> </span>"." ".$_GET['msg1'] ;
   ?>  
</div>

<?php
}


 ?> 

	<hr>
			
		
		    <div style="">	
			<p>
			<input type="text" name="drinknam" placeholder="Drink name EG: Vodka.."   autocomplete="on" required  />
			</p>

  			<p>
			<input type="text" placeholder="Drink Type EG. Hard.." name="drinkty" autocomplete="on"required />
			</p>
			
      <p>
      <input type="number" min=1 name="drinkcod" id="drinkc" onkeyup="drinkcode()" placeholder="Drink Code.."   autocomplete="on" required  />
      </p>
    <p id="checkcode"></p>
			<p>
			<input type="text" name="fprice" placeholder="Full Price.."   autocomplete="on" required  />
			</p>

  			<p>
			<input type="text" name="hprice" placeholder="Half Price.."   autocomplete="on" required  />
			</p>

        <p>
      <input type="text" name="qprice" placeholder="Quarter Price.."   autocomplete="on" required  />
      </p>

			<p>
			<input type="submit" value="Insert"  class="" name="btn_drinkmenu" style="margin-bottom: 5%;">
			</p>



			</div>

			


				
		

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

<?php include "footer.php";?>
</html>