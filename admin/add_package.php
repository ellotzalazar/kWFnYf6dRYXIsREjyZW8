						    <!-- Button to trigger modal -->
    <a href="#add_packages" role="button" class="btn btn-info" data-toggle="modal"><i class="icon-plus icon-large"></i>&nbsp;Add Package</a>
     <br>
     <br>
    <!-- Modal -->
    <div id="add_packages" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
	<div class="alert alert-info">Add Package</div>
    </div>
    <div class="modal-body">
		<form class="form-horizontal" method="POST">
		
			<div class="control-group">
   			<label class="control-label" for="inputEmail">Service</label>
    		<div class="controls">
			<select name="service" required>
			<option></option>
			<?php $query=fetchData($con,"select * from service");
				while($row=$query->fetch_array()){
				?>
			<option value="<?php echo $row['service_id']; ?>"><?php echo $row['service_offer'] ?></option>
			<?php } ?>
			</select>
			</div>
			</div>


			<div class="control-group">
			<label class="control-label" for="inputEmail">Package Name</label>
			<div class="controls">
			<select name="package" required>
			<option>Package A</option>
			<option>Package B</option>
			<option>Package C</option>
			<option>Package D</option>
			<option>Special Offer</option>
			</select>
			</div>
			</div>

			
			<div class="control-group">
			<label class="control-label" for="inputEmail">Description</label>
			<div class="controls">
			<textarea name="description" id="inputEmail" placeholder="Description" required></textarea>
			</div>
			</div>


			<div class="control-group">
			<label class="control-label" for="inputEmail">Price</label>
			<div class="controls">
			<input type="text" name="price" id="inputEmail" placeholder="price" required>
			</div>
			</div>


			
			<div class="control-group">
			<div class="controls">
			<button type="submit" name="ad" class="btn btn-info">Add</button>
			</div>
			</div>
	</form>
	</div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    </div>
    </div>
	
	<?php
	
	if (isset($_POST['ad'])){
	$service_id=$_POST['service'];
	$package=$_POST['package'];
	$description=$_POST['description'];
	$price=$_POST['price'];

	
	
	executeUpdate($con,"insert into package (service_id,package_name,description,price) values('$service_id','$package','$description','$price')")or die(mysql_error());
	?> 
	<script>
	window.location="package.php";
	</script>
	<?php
	}
	?>