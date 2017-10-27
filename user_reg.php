<html>
<head>
<title>User Registration</title>
<script type="text/javascript" src="JQuery.js"></script>
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

<fieldset>
<form  action="dbreg.php" method="post" autocomplete= "on" enctype="multipart/form-data">

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


</fieldset>
</form>
</body>
</html>