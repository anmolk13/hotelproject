<html>
<head>
<title>User Registration</title><link rel="stylesheet" href="bootstrap/bootstrap.min.css">
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







<script>
function usercheck()
{
	var store = document.getElementById('uname').value; 
	var req;
	if(window.XMLHttpRequest)
	{
		req = new XMLHttpRequest();
		
	}else req = new ActiveXObject("Microsoft.XMLHTTP");
	req.onreadystatechange = function()
	{
		if(req.readyState==4)
		{
			document.getElementById('checksameusername').innerHTML = req.responseText;
		}
	}
req.open("GET", "checkusername.php?usrnme="+store, true)
req.send();
}

function checkpsw()
{
   
    var psw1 = document.getElementById('psw1');
    var psw2 = document.getElementById('psw2');
    var message = document.getElementById('confirmMessage');
   
    var pass = "blue";
    var fail = "red";
   
    if(psw1.value == psw2.value){
        psw2.style.backgroundColor = pass;
        message.style.color = pass;
        message.innerHTML = "Passwords Match!"
    }else{
        psw2.style.backgroundColor = fail;
        message.style.color = fail;
        message.innerHTML = "Passwords Do Not Match!"
    }
}  

    var modal = document.getElementById('id01');

    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}




</script>
</head>
<body>


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
             </ul>
            </nav> 

<div class="main col-xs-9 form-style-8" style=" margin-top: 7%; margin-left: 17%;  max-width: 900px; ">
<form  action="dbreg.php?nme=<?php echo $usr;?>" method="post" autocomplete= "on" enctype="multipart/form-data">

<h2 style="background-color: #FFF8DC;"> <span class="glyphicon glyphicon-pencil"></span> REGISTER USER HERE </h2>


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
<input type="text" name="fname" required placeholder="First Name" autofocus ><br/>
</p>

<p>
<input type = "text" name= "lname" required placeholder="Last Name"><br/>
</p>

<p>
<input type = "text" name= "unme" onkeyup = "usercheck()" id ="uname" required placeholder="User Name"><br/>
</p>

<p id ="checksameusername"></p> 

<p>
<input type = "password" id= "psw1" name= "psw" required placeholder="Password"><br/>
</p>

<p>
<input type = "password" id="psw2" name= "psw1" required placeholder="Re-Enter Password.." onkeyup="checkpsw()"><br/>
</p>
<p id = "confirmMessage"> </p>


<p>Enter PP size photo:
<input type= "file" name = "oo" autocomplete="off">
</p>


<p>
<input type ="text" name= "add" required placeholder="Address"><br/>
</p>

<p>
<input type ="text" name= "eml" required placeholder="Email" autocomplete="off"><br/>
</p>

<p>
<input type ="text" name = "cnum" required placeholder="Contact Number" autocomplete="off"><br/>
</p>

<p>
<input type="date" name = "jdate" required placeholder="Joined date"><br/>
</p>

<p>Maritial Status:<br/>
<input type="radio" name="mstat" value="Married" checked>Married<br/>

<input type="radio" name ="mstat" value="Single">Single<br/>

</p>

<p>Work status:<br/>

<input type = "radio" name = "wstat" value="working" checked>Working<br/>
<input type = "radio" name = "wstat" value = "notworking">Not working<br/>
</p>
<p>Gender:<br/>
<input type = "radio" name = "gender" value="male" checked>Male<br/>
<input type = "radio" name = "gender" value = "female">	Female<br/>
<input type = "radio" name = "gender" value = "other">Other<br/>
</p>

<p>Citizenship: pp size photo required
<input type= "file" name = "cp"   autocomplete="off">
</p>


</p>

<p>
<input type = "submit" name="btn_reg" value ="Register">
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
</html>