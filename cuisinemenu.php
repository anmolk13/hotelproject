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
 			  <li><a href="">Menu Items</a>
    
         <ul class="submenu">
        <li><a href="cuisinemenu.php?nme=<?php echo $usr;?>">Cuisine Menu</a></li>
        <li><a href="">Noodles Menu</a></li>
        <li><a href="">Non-Veg Curry Menu</a></li>
      </ul>
      </li>




              


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

<div class="main col-xs-9 form-style-8" style=" margin-top: 4%; margin-left: 17%;  max-width: 900px; ">
<form>

	<hr>
<h2 style="background-color: #FFF8DC;"> <span class="glyphicon glyphicon-cutlery"></span> INSERT MENU INFORMATION</h2>
	<hr>
			
			<hr/>
		    <div style="">	
			<p>
			<input type="text" style=""    name="mainfood" placeholder="Category Eg. Nepali, Indian"   autocomplete="on" required  />
			</p>

  			<p>
			<input type="text" placeholder="food item EG. Veg khana set.." name="desc" required />
			</p>
			

			<p>
			<input type="text" name="fprice" placeholder="Full Price.."   autocomplete="on" required  />
			</p>

  			<p>
			<input type="text" name="hprice" placeholder="Half Price.."   autocomplete="on" required  />
			</p>

			<p>
			<input type="submit" value="Save"  class="" name="btnnepali">
			</p>

			</div>

			<hr/>
             
             <p>
			 <h2 style="background-color: #FFF8DC;" > </h2>
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

<?php include "footer.php";?>
</html>