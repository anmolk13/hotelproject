<!DOCTYPE html>
<html>
<head>
	<title>General Settings</title>
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
	 <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
	  <script src="bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="JQuery.js"></script>

<?php 
                     		 include("connect.php");

							$sql = "select genid from tbl_general";

							$result = $con->query($sql);
                            $row = $result->num_rows;
							


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





	
	
			<div class="page-header" >
    	<h1 class="h2">Add hotel Logo and Name: <a class="btn btn-default" id = "btn1" href="logo.php"> <span class="glyphicon glyphicon-plus"></span> &nbsp; ADD HERE </a>


    		<a class="btn btn-default"  id="btn2" href="logo.php"> <span class="glyphicon glyphicon-edit" ></span> &nbsp; UPDATE HERE </a>

    	</h1>
    </div>

	<form method="post" action="dbgensetting.php" enctype="multipart/form-data">
		
    
			
			
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

</body>
</html>