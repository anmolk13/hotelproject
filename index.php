<!doctype html>
<html>
<head>
<title>hotel</title>
 <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
<link rel ="stylesheet" type="text/css" href = "form.css" />
<script type="text/javascript" src="JQuery.js"></script>
<script>
//create a variable and get the id from below.
var model = document.getElementById('id01');
//close the popup when clicked anywhere outside the poped up box
window.onclick = function(event){
	if(event.target==model){
		model.style.display="none";
	}
}

</script>
</head>
<div>
<nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <!-- Branding Image -->
                    <span class="navbar-brand" href="">
                       
                    </span>
                </div>
                 <ul class="nav navbar-nav">
                      <li style="margin-left: 555%;"><a href="#">WELCOME </a></li>
                      
                    </ul>

                     <ul class="nav navbar-nav navbar-right">
      <li><a href="#"> Sign Up</a></li>
      
    </ul>
            </div>
            </nav>
</div>














<div class="form-style-8">

<form method="post" action="dblogin.php" style="margin-top:5%; margin-left: 40%;">

<input type="text" name ="usrnme" size = "20" placeholder="Your Username.." required/>

 
<input type="password" name = "psw" size = "20" placeholder="Your Password.." required/>

<input type="submit" value="Log In" name="btn_login"  />

<p><?php if (isset($_GET['error1'])){ echo $_GET['error1'] ;} ?>  </p>
</form>
<input value="Forgot your Password?" " type="submit" style="margin-left: 35%;"  onclick="document.getElementById('id01').style.display='block'" />

</div>

<div id="id01" class="modal">
<form class="modal-content animate" method="post" action="reset.php" style="     background-color: #555;">

			<div class="imgcontainer">
				<span onclick="document.getElementById('id01').style.display='none'" 
				class="close" title="Close Modal"> &times;</span>
			</div>
	
<p class="fieldgap"><input style="width:220px;
    height: 30px;" type = "text" name ="checkemail" placeholder="Enter Your Email.." autofocus required></p>
<p class="btngap"><input class="button" type="submit" name="btn_confirm" value="Confirm" ></p>

</form>
</div>




<?php include("footer.html");
?>
</body>
</html>
