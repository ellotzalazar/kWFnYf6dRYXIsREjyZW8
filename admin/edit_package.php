	<div id="edit<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Edit Package</strong></div>
	<form class="form-horizontal" method="post">

			<div class="control-group">
   			<label class="control-label" for="inputEmail">Service</label>
    		<div class="controls">
			<select name="service" required>
			<option></option>
			<?php $query=mysql_query("select * from service")or die(mysql_error());
				while($row=mysql_fetch_array($query)){
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

				<?php 
	$package_query = mysql_query("select * from package where package_id='$id'")or die(mysql_error());
	$package_row= mysql_fetch_array($package_query);
	?>


			<div class="control-group">
			

			<label class="control-label" for="inputEmail">Description</label>

			<div class="controls">
				
				
				<input type="hidden" value="<?php echo $package_row['package_id']; ?>" name="id" id="inputEmail"  required>
			
			<input type="text" value="<?php echo $package_row['description']; ?>" name="description" id="inputEmail"  required>
			
			</div>
			</div>
			<?php  ?>

			<?php 
	$package_query = mysql_query("select * from package where package_id='$id'")or die(mysql_error());
	$package_row= mysql_fetch_array($package_query);
	?>
			
			<div class="control-group">

			<label class="control-label" for="inputEmail">Price</label>
			<div class="controls">
			
			<input type="text" value="<?php echo $package_row['price']; ?>" name="price" id="inputEmail"  required>

			</div>


			</div>
<?php  ?>


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
	
	
	mysql_query("update package set service_offer='$service_offer',package_name='$package',description='$description',price='$price' where package_id='$package_id'")or die(mysql_error()); ?>
	<script>
	window.location="package.php";
	</script>
	<?php
	}
	?>