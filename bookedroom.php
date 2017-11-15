<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="sidebar.css">
    <link rel ="stylesheet" type="text/css" href = "form.css" />
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
	    <script src="bootstrap/bootstrap.min.js"></script>
	    <script src="JQuery.js"></script>
<script >
  <?php include("connect.php");?>
  function showroom()
{
  var character =  document.getElementById('romno').value;
  var req;
  if(window.XMLHttpRequest)
  {
    req = new XMLHttpRequest();
    
  }
  else req = new ActiveXObject("Microsoft.XMLHTTP");
  req.onreadystatechange = function()
  {
    if(req.readyState==4)
    {
      document.getElementById('displayall').innerHTML = req.responseText;
    }
  }
req.open("GET", "showroom.php?roomnumber="+character, true)
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
   


    <li><a href="">Room</a>
     <ul class="submenu">
      
        <li><a href="bookedroom.php?nme=<?php echo $usr;?>">Booked Room</a></li>
        <li><a href="">Checked In</a></li>
        <li><a href="">Checked Out</a></li>
       
      </ul>
      </li>
    <li><a href="">View orders</a></li>
    
    <li><a href="">Contact us </a></li>
   
  </ul>
</nav>
<div class= "main col-xs-9 form-style-8" style=" margin-top: 7%; margin-left: 16.5%;  max-width: 900px; ">

<form>
  <h2 style="background-color: #FFF8DC;">BOOKED ROOM</h2>
<p>
<?php
      $sql="SELECT * FROM tbl_room";

      $res=$con->query($sql);

$nu=$res->num_rows;

$select= '<select name="select_roomnumber" id="romno" onclick="showroom()" required>';
$select.='<option value="" disabled selected style="display: none;">'.'Choose Room Number...'.'</option>';
while($data1 = $res->fetch_array()){
      $select.='<option value="'.$data1['roomid'].'">'.$data1['roomno'].'</option>';
  }

$select.='</select>';
echo $select;
?>
      </p>

      

<p id="displayall"></p>


<p>
<input type = "submit" name="btn_bookroom" value ="Booked Your Room">
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