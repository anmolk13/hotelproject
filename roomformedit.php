<div style="margin-left:40%; margin-right:35%;  padding-left:5%; border: 2px solid black; margin-top:10%;">

		<form name=""   method="post" action="dbroom_reg.php">
			
			<p>	
			<input type="number" min=1 class="" name="rn" autofocus placeholder="Room Number.." required/>
			</p>
			
			<p>
			<input type="text" class="" name="rtype" placeholder="Room Type.."   autocomplete="on" required/>
			</p>
					
			<p>
			<input type="number"  class="" min=1 name="numbed" placeholder=" Number of beds..."   autocomplete="on" required  />
			</p>
			 


			<p>
			<label> Attached Bathroom:
			<input type = "radio" name = "attb" value="yes" checked>Yes
			<input type = "radio" name = "attb" value = "no">No
			</label>
			</p>
			

			<p>
			<input type="submit" value="Add Room"  class="" name="btn_addroom">
			</p>

		</form>
	    </div>