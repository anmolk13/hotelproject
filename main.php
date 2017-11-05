<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
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
                    <!-- Branding Image -->
                    <span class="navbar-brand" href="">
                       Logo
                    </span>
                    <span class="navbar-brand" href="">
                      <?php 
                     		 include("connect.php");

							$sql = "select namehotel from tbl_general";

							$result = $con->query($sql);

							$data = $result->fetch_array();

							echo $data['namehotel'];

             			 ?>
                    </span>
                </div>
               <?php  
               $usr = $_GET['nme'];
               ?>


       <ul class="nav navbar-nav navbar-right">

       <li class="dropdown">
       	<a href="#" class="glyphicon glyphicon-user"> <?php echo $usr ?></a>

     			 <div class="dropdown-content" style="right:0;">
				    <a href="#">Link 1</a>
				   <a href="#">Link 2</a>
				    
				  </div>
          </li>
          </ul>
          </div>
          </nav>
          </div>


<nav class="navigation">
  <ul class="mainmenu">
    <li><a href="">New Order</a></li>
    <li><a href="">Room</a>
     <ul class="submenu">
      <li><a href="room.php">Register Room</a></li>
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