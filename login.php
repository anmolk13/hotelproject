<!doctype html>
<html>
<head>
<title>hotel</title>
<link rel ="stylesheet" type="text/css" href = "ds.css" />
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
<form method="post" action="dblogin.php">
<p><label> Username: </label>
<input type="text" name ="usrnme" size = "20" placeholder="Your Username.." required/></p>

<p><label> Password: </label> 
<input type="password" name = "psw" size = "20" placeholder="Your Password.." required/></p>

<p><input type="submit" value="Log In" name="btn_login" class="" /></p>

<p><?php if (isset($_GET['error1'])){ echo $_GET['error1'] ;} ?>  </p>

<p><button class ="buttonlog" onclick="document.getElementById('id01').style.display='block'" style="width:auto; color:blue; cursor: pointer;">Forgot your Password?</button> </p>

</form>
</div>

<div id="id01" class="modal">
<form class="modal-content animate" method="post" action="reset.php">

			<div class="imgcontainer">
				<span onclick="document.getElementById('id01').style.display='none'" 
				class="close" title="Close Modal"> &times;</span>
			</div>
	
<p class="fieldgap"><input class="label" type = "text" name ="checkemail" placeholder="Enter Your Email.." autofocus required></p>
<p class="btngap"><input class="button" type="submit" name="btn_confirm" value="Confirm" ></p>

</form>
</div>





</body>
</html>
