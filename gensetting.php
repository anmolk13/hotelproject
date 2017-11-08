<!DOCTYPE html>
<html>
<head>
	<title>General Settings</title>
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

<?php 
                     		 include("connect.php");

							$sql = "select genid from tbl_general";

							$result = $con->query($sql);
            
              $row = $result->num_rows;
							
              $usr = $_GET['nme'];


             			 ?>


<script>
function enable(){
 
 var rows = "<?php  echo $row  ?>";

if (rows ==1){

// alert("hjj");
//document.getElementById("h").disabled = true;
document.getElementById('btn1').style.visibility = 'hidden';
   document.getElementById("btn1").style.display = 'none';
//document.getElementById('btn1').href = '#';
}else{
	document.getElementById('btn2').style.visibility = 'hidden';
}




}

 	



    			
</script>
</head>
<body onload="enable()">



<div>

	<nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <!-- Branding Image -->
                    <span class="navbar-brand" href="">
                       Logo
                    </span>
                    <a class="navbar-brand" href="adminpanel.php?nme=<?php echo $usr;?>">
                      <?php 
                     		

							$sql = "select * from tbl_general";

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
	
	<div class="main col-xs-9 form-style-8"  style=" margin-top: 5%; margin-left: 30%;  max-width: 700px;">
			<div class="page-header" >
    	<h1 class="h2">Add hotel Logo and Name: <a class="btn btn-default" id = "btn1" href="logo.php"> <span class="glyphicon glyphicon-plus"></span> &nbsp; ADD HERE </a>


    		<a class="btn btn-default" title="click to update" id="btn2"        href="updatelogo.php?nme=<?php echo $usr?>&id=<?php echo $data['genid']?>"> 
        <span class="glyphicon glyphicon-edit" ></span> &nbsp; UPDATE HERE </a>

    	</h1>
    </div>

	<form method="post" action="dbgensetting.php" enctype="multipart/form-data" style=" ">
		
    
			
			
			<p>
			<input type="email" class="" name="eml" placeholder="E-mail of Hotel.."   autocomplete="on" required/>
			</p>
					
			<p>
			<input type="text"  class="" name="contct" placeholder="Contact..."   autocomplete="on" required  />
			</p>
			 
			<p>
			<input type="text"  class="" name="add" placeholder="Address..."   autocomplete="on" required  />
			</p>

			<p>
			<input type="text"  class="" name="pob" placeholder="P.O.Box ..."   autocomplete="on" required  />
			</p>

			

			<p>
			<input type="submit" value="Confirm"  class="" name="btn_gensetting">
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