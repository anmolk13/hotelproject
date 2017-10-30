		
		<!DOCTYPE html>
		<html>
		<head>
			<title></title>
		</head>
		<body>

		<form name=""   method="post" action="room_reg.php">
			
			<p >	
			<label> Room no.
			<input type="number" min=1 class="" name="rn" autofocus placeholder="Room Number...." required/>
			</label>
			</p>
			
			<p >
			<label> Room type
			<input type="text" class="" name="rtype" placeholder="Room Type.."   autocomplete="on" required/>
			</label>	
			</p>
					
			<p >
			<label> No. of beds
			<input type="number"  class="" min=1 name="numbed" placeholder=" Number of beds..."   autocomplete="on" required  />
			
			</label>
			</p>
			 


			<p>
				<label> Attached Bathroom:
			<input type = "radio" name = "attb" value="yes" checked>Yes
			<input type = "radio" name = "attb" value = "no">No
			</label>
			</p>
			

			<p ><label>
			<input type="submit" value="Add Room"  class="" name="btn_addroom">
			</label>	
			</p>

		</form>
		
		</body>
		</html>	