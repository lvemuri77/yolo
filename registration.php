<?php
include("header.php");
?>
<br/>
<br/>

	<div class="container">
        <h3 class="text-center">Register</h3>

		<div class="col-md-12">
			<form action="regdetails.php" method="post" >
                <div class="form-group">
				<label for="firstname">First Name</label>
				<input type="text" class="form-control " name="firstname" id ="firstname"/>
                </div>
                <div class="form-group ">
                <label for="lastname">Last Name</label>
				<input type="text" class="form-control " name="lastname" id ="lastname" />
                </div>
                <div class="form-group ">
				<label for="username">User Name</label>
				<input type="text" class="form-control " name="username" id ="username" />
                </div>
                <div class="form-group ">
				<label for="pwd">Password</label>
				<input type="password" class="form-control " name="pwd" id ="pwd" />
				</div>
                <div class="form-group ">
				<label for="email">Email Id</label>
				<input type="text" class="form-control " name="email" id ="email" />
				</div>
                <div class="form-group ">
				<label for="contact">Phone Number</label>
				<input type="text" class="form-control " name="contact" id ="contact" />
                </div>
                <div class="form-group ">
                <label for="city">City</label>
				<input type="text" class="form-control " name="city" id ="city" />
				</div>
                <div class="form-group ">
                <label for="state">State</label>
				<input type="text" class="form-control " name="state" id ="state"/>
				</div>
                
                <div class="form-group ">
                <label for="zipcode">Zipcode</label>
				<input type="text" class="form-control " name="zipcode" id ="zipcode" />
				</div>
                <button  class="btn btn-success btn-lg center-block" type="submit">Register</button>
                
                </div>    
			</form>
		</div>
<br/>
<br/>
	</div>

<?php
include("footer.php");
?>		