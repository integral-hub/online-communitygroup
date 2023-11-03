<!-- Modal -->
 <?php include ('header.php');
include ('dbcon.php');

$get_id= $_GET['id'];
?>
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<a href="profile.php" type="button" class="close"  >&times;</a>
				<h4 class="modal-title" id="myModalLabel">Change Profile Picture</h4>
			</div>
			<div class="modal-body">
					<form method="post" action="update_profile_picture.php" enctype="multipart/form-data">
							<div class="form-group">
								<label for="exampleInputFile">File input</label>
								<input name="image" type="file" id="exampleInputFile" required>
							</div>
							<button type="submit" class="btn btn-success"><li class="fa fa-save"></li> Update</button>
					</form>
			</div>
			<div class="modal-footer">
				<a href="profile.php" type="button" class="btn btn-default"  ><i class="fa fa-times"></i> Close</a>
				
			</div>
			</div>
			
		</div>
	 