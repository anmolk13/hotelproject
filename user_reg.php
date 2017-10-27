<html>
<head>
<title>extra</title>
</head>
<body>

<fieldset>
<form  action="dbreg.php" method="post" autocomplete= "on">

<p>
<input type="text" name="fname" required placeholder="First Name" autofocus ><br/>
</p>

<p>
<input type = "text" name= "lname" required placeholder="Last Name"><br/>
</p>

<p>
<input type = "text" name= "unme" required placeholder="User Name"><br/>
</p>

<p>
<input type = "password" name= "psw" required placeholder="Password"><br/>
</p>

<p>Enter PP size photo:
<input type= "file" name = "ppic" autocomplete="off">
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
<input type= "file" name = "cpic"   autocomplete="off">
</p>


</p>

<p>
<input type = "submit" name="btn_reg" value ="Register">
</p>


</fieldset>







</form>








</body>
</html>