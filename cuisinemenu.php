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
               $usr = $_GET['nme'];?>
                    <!-- Branding Image -->
                    <span class="navbar-brand" href="">
                       Logo
                    </span>
                    <a class="navbar-brand" href="adminpanel.php?nme=<?php echo $usr;?>">
                      <?php 
                     		 include("connect.php");

							$sql = "select namehotel from tbl_general";

							$result = $con->query($sql);

							$data = $result->fetch_array();

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
			
			<p>
			
			<h2 style="background-color: #FFF8DC;" > Insert Nepali Cusine..</h2>
			</p>
					
			<p>
			<input type="text" style="border-left: 1px solid #ddd; border-top: 1px solid #ddd; border-right: 1px solid #ddd; margin-bottom: 0px;"    name="mainfood" placeholder="food item EG. Veg khana set.."   autocomplete="on" required  />
			
			<textarea placeholder="Description EG.daal,Rice..etc" style=" resize:none; border-left: 1px solid #ddd; border-right: 1px solid #ddd; margin-bottom: 0px; height:90px;" name="desc" required></textarea>
			
			

			
			<input type="text" style="border-left: 1px solid #ddd; border-right: 1px solid #ddd;" class="" name="price" placeholder="Price.. Eg. NRS.250"   autocomplete="on" required  />
			</p>

			<p>
			<input type="submit" value="Save"  class="" name="btnnepali">
			</p>

			<hr/>

				<p>
			
			<h2 style="background-color: #FFF8DC;" > Insert Indian Cusine..</h2>
						</p>
					
			<p>
			<input type="text" style="border-left: 1px solid #ddd; border-top: 1px solid #ddd; border-right: 1px solid #ddd; margin-bottom: 0px;"    name="mainfood" placeholder="food item EG. Veg. Thali Set.."   autocomplete="on" required  />
			
			<textarea placeholder="Description EG.Chapati,Mixed Veg..etc" style=" resize:none; border-left: 1px solid #ddd; border-right: 1px solid #ddd; margin-bottom: 0px; height:90px;" name="desc" required></textarea>
			
			

			
			<input type="text" style="border-left: 1px solid #ddd; border-right: 1px solid #ddd;" class="" name="price" placeholder="Price.. Eg. NRS.250"   autocomplete="on" required  />
			</p>

			<p>
			<input type="submit" value="Save"  class="" name="btnindian">
			</p>

			<hr/>

		    <p>
		  <h2 style="background-color: #FFF8DC;" > Insert Chinese Cusine..</h2>
			</p>
					
			<p>
			<input type="text" style="border-left: 1px solid #ddd; border-top: 1px solid #ddd; border-right: 1px solid #ddd; margin-bottom: 0px;"    name="mainfood" placeholder="food item EG. Veg. Soup.."   autocomplete="on" required  />
			
			<!-- <textarea placeholder="Description EG.daal,Rice..etc" style=" resize:none; border-left: 1px solid #ddd; border-right: 1px solid #ddd; margin-bottom: 0px; height:90px;" name="desc" required></textarea> -->
			
			

			
			<input type="text" style="border-left: 1px solid #ddd; border-right: 1px solid #ddd;" class="" name="price" placeholder="Price.. Eg. NRS.250"   autocomplete="on" required  />
			</p>

			

			<p style="margin-bottom: 10%;">
			<input type="submit" value="Save"  class="" name="btnchinese">
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

<?php include "footer.html";?>
</html>