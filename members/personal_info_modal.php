<?php include ('header.php');
include ('dbcon.php');

$get_id= $_GET['id'];
			$query = $conn->query("select * from members where member_id = '$get_id'");
		 
            
            	while($row = $query->fetch())
                                    {
		?>
	 
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<a type="button" href="profile.php" class="close" >&times;</a>
				<h4 class="modal-title" id="myModalLabel">Update Personal Info</h4>
			</div>
			<div class="modal-body">
				 <form role="form" action="personal_info_save.php" class="login_form" method="post">
				 		<div class="row">
							<div class="col-xs-4"><label>First Name</label></div>
							<div class="col-xs-4"><label>Surname</label></div>
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
							<input name="birth" value="<?php echo $row['date_of_birth']; ?>" type="text" class="form-control" readonly>
							</div>
							<div class="col-xs-4">
								<input name="contact_no" value="<?php echo $row['phnnumber']; ?>" type="text" maxlength="11" class="form-control" />
							</div>
						</div>
						
						
					<div class="row">
					<div class="col-xs-12">
					<br>
						<button type="submit"  class="btn btn-success"><i class="fa fa-save"></i> Update Info</button>
					</div>				 
					</div>				 
			</form>
            <?php } ?>
			</div>
			<div class="modal-footer">
				<a href="profile.php"   class="btn btn-default"  ><i class="fa fa-times"></i> Close</a>
				
			</div>
			</div>
			
		</div>
	 
		  							