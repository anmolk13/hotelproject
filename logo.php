<?php

if(isset($_POST['btnsave']))
	{
		include("connect.php");
		$hotelname = $_POST['hotel_name'];
		
		
		$imgFile = $_FILES['img_logo']['name'];
		$tmp_dir = $_FILES['img_logo']['tmp_name'];
		$imgSize = $_FILES['img_logo']['size'];
		
	
		
			$upload_dir = 'logo/'; // upload directory
	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		
			// rename uploading image
			$logopic = rand(100,100000).".".$imgExt;
				
			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions)){			
				// Check file size '5KB'
				if($imgSize > 200000)				{
					$errMSG = "Sorry, your file is too large.";

				}
				elseif ($imgSize==0) {
					$errMSG = "Sorry, your file is too large.";					
				}
				else{
					move_uploaded_file($tmp_dir,$upload_dir.$logopic);
				}
			}
			else{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
			}
		
		
		
		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			$stmt = $con->prepare("INSERT INTO tbl_general(namehotel,logopic) VALUES('$hotelname', '$logopic')");
		
			
			if($stmt->execute())
			{
				$successMSG = "new record succesfully inserted ... Please wait";
				header("refresh:5;gensetting.php"); // redirects image view page after 5 seconds.
			}
			else
			{
				$errMSG = "error while inserting....";
			}
		}
	}


?>






<!DOCTYPE html>
<html>
<head>
	<title>Logo </title>
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
	 <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
	  <script src="bootstrap/bootstrap.min.js"></script>
</head>
</head>
<body>





	<?php


	if(isset($errMSG)){
			?>
            <div class="alert alert-danger">
            	<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
            </div>
            <?php
	}
	else if(isset($successMSG)){
		?>
        <div class="alert alert-success">
              <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
        </div>
        <?php
	}



	?>   


	<form method="post" enctype="multipart/form-data" class="form-horizontal">
	    
	<table class="table table-bordered table-responsive">
	
    <tr>
    	<td><label class="control-label">Hotel Name</label></td>
        <td><input class="form-control" type="text" name="hotel_name" placeholder="Enter Hotel Name"  required /></td>
    </tr>
    
    <tr>
    	<td><label class="control-label">Hotel Logo</label></td>
        <td>
        	
        	<input class="input-group" type="file" name="img_logo" accept="image/*"  /></td>
    </tr>
    
    <tr>
        <td colspan="2"><button type="submit" name="btnsave" class="btn btn-default">
        <span class="glyphicon glyphicon-save"></span> &nbsp; Save
        </button>
       
        </td>
    </tr>
    
    </table>
    
</form>

</body>
</html>