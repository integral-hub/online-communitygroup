
	<!-- Modal -->
		<div class="modal fade" id="add_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Add Admin User</h4>
			</div>
			<div class="modal-body">
				 <form role="form" class="login_form" method="post">
					<div class="form-group">
						<label for="exampleInputEmail1">Firstname</label>
						<input name="firstname" type="text" class="form-control" id="exampleInputEmail1" placeholder="Firstname" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Lastname</label>
						<input name="lastname" type="text" class="form-control" id="exampleInputPassword1" placeholder="Lastname" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Username</label>
						<input name="username" type="text" class="form-control" id="exampleInputPassword1" placeholder="Username" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
					</div>
                    	<div class="form-group">
						<label for="exampleInputPassword1">Retype Password</label>
						<input name="repassword" type="password" class="form-control" id="exampleInputPassword1" placeholder="RetypePassword" required>
					</div>
				 <button name="save"  class="btn btn-success"><i class="fa fa-save"></i> Save</button>
			</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
				
			</div>
			</div>
			
		</div>
		</div>
        
        <?php
if (isset($_POST['save'])){
    
 
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];

 $query = $conn->query("SELECT * FROM user WHERE username='$username'");
			$row = $query->fetch();
			$num_row = $query->rowcount();
            
            
if( $num_row <= 0 ) 
        { 
if($repassword==$password)
{



$conn->query("insert into user (fname,lname,username,password) values('$firstname','$lastname','$username','$password')");
  ?>
                                   	<script>
						 alert('Successfully Added');
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
                                  
             } 
             
             
             }
             else
             {
              ?>
              <script>
			alert('Username cannot used. Please try something else.');
             </script>
             <?php	
             } } ?>