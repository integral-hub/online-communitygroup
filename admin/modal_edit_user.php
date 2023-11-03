	<?php include('dbcon.php'); ?>
    <!-- Modal -->
		<div class="modal fade" id="<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Edit Admin User</h4>
			</div>
			<div class="modal-body">
				 <form role="form" class="login_form" method="post">
					<div class="form-group">
						<label for="exampleInputEmail1">Firstname</label>
						<input name="user_id" value="<?php echo $row['user_id']; ?>" type="hidden" class="form-control" id="exampleInputEmail1" placeholder="Firstname" required>
						
                        <input name="firstname" value="<?php echo $row['fname']; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Firstname" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Lastname</label>
						<input name="lastname" value="<?php echo $row['lname']; ?>" type="text" class="form-control" id="exampleInputPassword1" placeholder="Lastname" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Username</label>
						<input name="username" value="<?php echo $row['username']; ?>" type="text" class="form-control" id="exampleInputPassword1" placeholder="Username" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input name="password" value="<?php echo $row['password']; ?>" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
					</div>
                    	<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input name="repassword"   type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
					</div>
				 <button name="update" class="btn btn-success"><i class="fa fa-save"></i> Update</button>
			</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
			</div>
			</div>
			
		</div>
		</div>
        
        
         
<?php

if (isset($_POST['update'])){
    
$user_id = $_POST['user_id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];

if($repassword==$password)
{
  $conn->query("update user set fname = '$firstname', lname = '$lastname' , username = '$username' , password = '$password' where user_id = '$user_id'");
  ?>
                                   	<script>
						 alert('Successfully Updated');
                       	window.location = 'admin_user.php';
							</script>	
                                   <?php  
}
else
{
 ?>
                                   	<script>
						 alert('Password did not match! try again.');
                       	window.location = 'admin_user.php';
							</script>	
                                   <?php 
 
 }}
?>