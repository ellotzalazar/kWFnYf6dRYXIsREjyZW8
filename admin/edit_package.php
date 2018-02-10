	
	<div id="edit<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Edit Package</strong></div>
	<form class="form-horizontal" method="post">
	<?php 
		$package_query = fetchData($con,"select * from package where package_id='$id'");
		$package_row= $package_query->fetch_array();
		?>

			<div class="control-group">
				<label class="control-label" for="inputEmail">Service</label>
				<div class="controls">
					<select name="service" required>
					<option></option>
					<?php $query=fetchData($con,"select * from service");
						while($row=$query->fetch_array()){
					?>
						<option <?php echo $package_row['service_id'] == $row['service_id'] ? 'selected' : ''?> value="<?php echo $row['service_id']; ?>"><?php echo $row['service_offer'] ?></option>
					<?php } ?>

					</select>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputEmail">Package Name</label>
				<div class="controls">
					<select name="package" required>
						<option <?php echo $package_row['package_name'] == 'Package A' ? 'selected' : ''?>>Package A</option>
						<option <?php echo $package_row['package_name'] == 'Package B' ? 'selected' : ''?>>Package B</option>
						<option <?php echo $package_row['package_name'] == 'Package C' ? 'selected' : ''?>>Package C</option>
						<option <?php echo $package_row['package_name'] == 'Package D' ? 'selected' : ''?>>Package D</option>
						<option <?php echo $package_row['package_name'] == 'Special Offer' ? 'selected' : ''?>>Special Offer</option>
					</select>
				</div>
			</div>

				

			<div class="control-group">
			

			<label class="control-label" for="inputEmail">Description</label>

			<div class="controls">
				
				
				<input type="hidden" value="<?php echo $package_row['package_id']; ?>" name="id" id="inputEmail"  required>
			
			<textarea name="description" id="inputEmail"  required><?php echo $package_row['description']; ?></textarea>
			
			</div>
			</div>

		
			<div class="control-group">

				<label class="control-label" for="inputEmail">Price</label>
				<div class="controls">
					<input type="text" value="<?php echo $package_row['price']; ?>" name="price" id="inputEmail"  required>

				</div>


			</div>

			<div class="control-group">
				<div class="controls">
				<button name="edit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
				</div>
			</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
	<?php
	if (isset($_POST['edit'])){
	
	$package_id=$_POST['id'];
	$package=$_POST['package'];
	$description=$_POST['description'];
	$service_offer=$_POST['service'];
	$price=$_POST['price'];
	executeUpdate($con,"update package set service_id='$service_offer',package_name='$package',description='$description',price='$price' where package_id='$package_id'");
	
	?>
	
	<script>
		alert('You have successfully updated a package.');
		window.location="package.php";
	</script>
	<?php
	}
	?>