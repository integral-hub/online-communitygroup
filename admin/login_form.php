  
  <form role="form" id="admin_in" method="post"  >
  <table border="0" class="pull-right"><tr><td>
  
 
    <input type="text" class="form-control" id="" name="username" placeholder="Username" required>
   
 </td>
  <td>&nbsp;</td>
   <td>
  
 
    <input type="password" class="form-control" id="" name="password" placeholder="Password" required>
  
   </td> 
  <td>&nbsp;</td>
   <td>
    
 
   <button type="submit" class="btn btn-info"><i class="fa fa-sign-in"></i> Login</button>
    
   </td>
   </tr>
   </table>
</form>
  
 
  
  								<script>
												jQuery(document).ready(function(){
												jQuery("#admin_in").submit(function(e){
														e.preventDefault();
														var formData = jQuery(this).serialize();
														$.ajax({
															type: "POST",
															url: "login.php",
															data: formData,
															success: function(html){
															if(html=='true'){
															window.location = 'home.php'
															}else if(html == 'false')
															{
																$.jGrowl("Please Check Your Username and Password", { header: 'Login  Failed' });
															}
															}
														});
														return false;
													});
									});
									</script>