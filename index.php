<?php
include("header.php");
?>	

<div class="row">
			<div class="col-md-6">
				<h3 class="text">Welcome to MY YOLO</h3>
				<p class="text-justify">Every day thousands of animals are being adopted,but there are still
				millions that need a home.<strong>YOLO Pet</strong> is a new adoption agency that
				caters all sorts of animals that need to be adopted </p>
				<h3 class="text">Adoption:</h3>
				<p class="text-justify">Every day thousands of animals are being adopted,but there are still
				millions that need a home.YOLO Pet is a new adoption agency that
				caters all sorts of animals that need to be adopted</p>
				<p class="text-justify">YOLO Pet is a new adoption agency that
				caters all sorts of animals that need to be adopted</p>
			
                
				<a href="#" style="display: inline;">
				<img class="img-responsive center-block" src="images/click.jpg" width="100" height="100"/>
			</a>
					
					
			</div>
            
			<div class="col-md-6">
				<h3 class="text">Give Pet Details Here</h3>
                <div style="color:red">
                    <?php
                        if(isset($_SESSION['message'])){
                        echo $_SESSION['message'];
                        unset($_SESSION['message']); 
                        }
                    ?>
                </div>
				<form method="post"  action="getsubmit.php" enctype="multipart/form-data">
					<div class="form-group">
					  <label for="p_name">Pet's Name:</label>
					  <input type="text" class="form-control" name="p_name" placeholder="Name">
					</div>
					<div class="form-group">
					  <label for="p_type">Animal Type</label>
				
				
						<select class="form-control" name="p_type">
							<option>Select Animal</option>
							<option>DOG</option>
							<option>CAT</option>
							<option>RABBIT</option>
							<option>MOUSE</option>
						      </select>
					</div>
					<div class="form-group">
					  <label for="p_age">Animal Age:</label>
					  <input type="number" class="form-control" name="p_age" placeholder="Age">
					</div>
					<div class="form-group">
					  <label for="p_description">Animal Description:</label>
					  <textarea class="form-control" rows="3" name="p_description"></textarea>
					</div>
					<div class="form-group">
					  <label for="p_fee">Adoption Fee:</label>
					  <input type="text" class="form-control" name="p_fee" placeholder="$199">
					</div>
                    <div class="form-group">
					  <label for="image">Upload your pets pic:</label>
                    
                    <input class="finput" type="file" name="image" id="image">
                    </div>
				    <button type="submit" class="form-control button" class="btn btn-default">Submit</button>
				</form>
                
			</div>

		</div>
<?php
include("footer.php");
?>		
