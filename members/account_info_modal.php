<!-- Modal -->
		<div class="modal fade" id="account_info_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Update Personal Info</h4>
			</div>
			<div class="modal-body">
				 <form role="form" id="personal_info" class="login_form" method="post">
				 		<div class="row">
							<div class="col-xs-4"><label>First Name</label></div>
							<div class="col-xs-4"><label>Last Name</label></div>
						</div>
						<div class="row">
							<div class="col-xs-4">
								<input name="firstname" value="<?php echo $row['firstname']; ?>" type="text" class="form-control" readonly>
							</div>
				
							<div class="col-xs-4">
								<input name="lastname" value="<?php echo $row['surname']; ?>" type="text" class="form-control" readonly>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-4"><label>Sex</label></div>
							<div class="col-xs-4"><label>Date of Birth</label></div>
							<div class="col-xs-4"><label>Contact No</label></div>
						</div>
						<div class="row">
							<div class="col-xs-4">
									<select name="sex" class="form-control" readonly>
										<option><?php echo $row['sex']; ?></option>
										
									</select>
							</div>
							<div class="col-xs-4">
								<input name="date_of_birth" value="<?php echo $row['date_of_birth']; ?>" type="text" class="form-control" readonly>
							</div>
							<div class="col-xs-4">
								<input name="contact_no" value="<?php echo $row['phnnumber']; ?>" type="text" class="form-control">
							</div>
						</div>
					
						
					<div class="row">
					<div class="col-xs-12">
					<br>
						<button  class="btn btn-success"><i class="fa fa-save"></i> Update Info</button>
					</div>				 
					</div>				 
			</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
				
			</div>
			</div>
			
		</div>
		</div>
		  								<script>
												jQuery(document).ready(function(){
												jQuery("#personal_info").submit(function(e){
														e.preventDefault();
														var formData = jQuery(this).serialize();
														$.ajax({
															type: "POST",
															url: "personal_info_save.php",
															data: formData,
															success: function(html){
															alert('Personal Info Successfully Updated');
															window.location = 'profile.php';
															}
														});
														return false;
														});
										});
										</script>