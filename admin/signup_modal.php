<!-- Modal -->
		<div class="modal fade" id="add_member" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Create Your Account Here</h4>
			</div>
			<div class="modal-body">
				 <form  action="signup_save.php" class="login_form" method="post">
					 <center>
				 
					<table border="0">
                    <tr>
                    <td width="250"><div class="form-group">
						<label for="exampleInputPassword1">Access</label>
						<select name="access" class="form-control">
					  
							<option>Professional</option>
                            
						</select>
					</div></td>
                    <td>&nbsp;</td>
                    <td>  </td>
                     <td></td>
                    <td></td>
                    </tr>
                    
                   
                     <tr>
                    <td>	 <div class="form-group">
						<label for="exampleInputPassword1">Firstname</label>
						<input name="fname" type="text" class="form-control" id="exampleInputPassword1" placeholder="Firstname" required>
					</div></td>
                     <td>&nbsp;</td>
                    <td width="250">	<div class="form-group">
						<label for="exampleInputPassword1">Lastname</label>
						<input name="lname" type="text" class="form-control" id="exampleInputPassword1" placeholder="Lastname" required>
					</div></td>
                    </tr>
                    
                    
                    <tr>
                    <td>	 <div class="form-group">
						<label for="exampleInputPassword1">Gender</label>
					<select name="gender" class="form-control">
					  	<option>Male</option>
							<option>Female</option>
                            
						</select>
					</div></td>
                      <td>&nbsp;</td>
                    <td width="250">	<div class="form-group">
						<label for="exampleInputPassword1">Contact Number</label>
						<input  name="cnum" type="text" class="form-control" id="exampleInputPassword1" placeholder="Contact Number" maxlength="11" required>
					</div></td>
                     <td>&nbsp;</td>
                    <td width="250">	<div class="form-group">
						<label for="exampleInputPassword1">Email Address</label>
						<input name="email" type="email" class="form-control" id="exampleInputPassword1" placeholder="Email Address" required>
					</div></td>
                    </tr>
                    
                    
                    
                     <tr>
                     
                      
                    <td width="250" colspan="5">	<div class="form-group">
						<label for="exampleInputPassword1">Address</label>
						<input name="address" type="text" class="form-control" id="exampleInputPassword1" placeholder="Address" required>
					</div></td>
                     
                    </tr>
                    
                    
                    <tr>
                    <td>	 <div class="form-group">
						<label for="exampleInputPassword1">Username</label>
						<input name="username" type="text" class="form-control" id="exampleInputPassword1" placeholder="Username" required>
					</div></td>
                      <td></td>
                    <td width="250">	<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
					</div></td>
                    <td></td>
                    <td width="250">	<div class="form-group">
						<label for="exampleInputPassword1">Re-enter Password</label>
						<input name="re_password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Re-enter Password" required>
					</div></td>
                    </tr>
                    </table>
					
                    </center>
		 
		 &nbsp;&nbsp;&nbsp;<button  class="btn btn-success" type="submit"><i class="fa fa-save"></i> Add Member</button>
			</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
				
			</div>
			</div>
			
		</div>
		</div>
		  							 