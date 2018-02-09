	<div id="edit<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Edit Service</strong></div>
	<form class="form-horizontal" method="post">
			<div class="control-group">
				<label class="control-label" for="inputEmail">Service Offer</label>
				<div class="controls">
				<input type="hidden" id="inputEmail" name="id" value="<?php echo $row['service_id']; ?>" required>
				<input type="text" id="inputEmail" name="service_offer" value="<?php echo $row['service_offer']; ?>" required>
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
	
	$user_id=$_POST['id'];
	$service=$_POST['service_offer'];
	
	
	doInsertFunction($con,"update service set service_offer='$service' where service_id='$user_id'"); ?>

	<script>
	window.location="service.php";
	</script>

	<?php
	//include ('update2.php');
	}


	?>
