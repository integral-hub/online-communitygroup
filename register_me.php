 <?php
$get=$_GET['id'];
 ?>
<div class="alert alert-success">
<br />
        <center>
        <table border="0"> 
        <tr>

       	<div class="panel panel-info">
       <div class="panel-heading">
     <h3> Join our Community</h3>
        </div>
        			<div class="panel-body">
       <center>
          <form method="post"  enctype="multipart/form-data">
       
       <table border="0">
       
       
       
       <tr>
       <td>
       <input  type="text" name="fname" class="form-control" rows="2" placeholder="Firstname" required> 
       </td>
       <td>
       &nbsp;
       </td>
         <td>
       	<input type="text" name="lname" class="form-control"  placeholder="Surname" required> 
       </td>
         <td>
       &nbsp;
       </td>
         <td>
       	<input type="text" name="pnum" class="form-control" maxlength="11"  placeholder="Phone Number" required> 
       </td>
      </tr>
      
      
 
        
         <tr>
      <td>
      &nbsp;
      </td>
      </tr>
      
       <tr>
       
        <td>
      <select name="gender" class="form-control">
        <option value="">-- Gender --</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      </select>
       </td>
        <td>
      &nbsp;
      </td>
        <td>
       	<input type="date" name="bdate" class="form-control" title="mm-dd-yyyy"  placeholder="Date of Birth" required> 
       </td>
        <td>
      &nbsp;
      </td>
        <td>
      <select name="experience" class="form-control">
         <option value="">--Tech Experience --</option>
      <option value="Beginner">Beginner</option>
      <option value="Intermediate">Intermediate</option>
      <option value="Professional">Professional</option>
      
      </select>
       </td>
        </tr>
         
   
        <tr>
      <td>
      &nbsp;
      </td>
      </tr>
      
      <?php
if ($get=='') {
  
       ?>
      
        <tr>
        <td colspan="5">
       	<input type="hidden" name="invite" class="form-control" value="null"   readonly> 
       </td>
       </tr>
         <?php }else {?>
           <tr>
        <td colspan="5">
        <input type="hidden" name="invite" class="form-control" value="<?php echo $get; ?>"   readonly> 
       </td>
       </tr>
     <?php }?>
     
       <tr>
      <td>
      &nbsp;
      </td>
      </tr>
       <tr>
           <td>
       <input type="text" name="uname" class="form-control"   placeholder="Username" required> 
       </td>
     
        <td>
      &nbsp;
      </td>
       <td>
       <input maxlength="15" type="password" name="pass" class="form-control"  placeholder="Password" required> 
       </td>
        <td>
      &nbsp;
      </td>
       <td>
       <input  maxlength="15" type="password" name="repass" class="form-control"  placeholder="Re-Enter Password" required> 
       </td>
      </tr>
      
       <tr>
      <td>
      &nbsp;
      </td>
      </tr>
		
        <tr>
       <td colspan="5">

        <br />
       </td>
       </tr>
       <tr>
       <td colspan="5">

        <div class="pull-right">
		<button type="submit" name="post" class="btn btn-info"><i class="fa fa-check-circle-o"></i> Submit</button>
		</div>
       </td>
       </tr>
       </table>
       
       	</form>
        </div> </div>
					 
       </center>
       
       
       
        </td>
               
       <td width="600">
      
        </tr>
        </table>
        </center>
        </div>
      <?php 
      
    $conn = new PDO('mysql:host=localhost;dbname=bcc_forum', 'root', '');
      
      
      	if (isset($_POST['post'])){ 
 
	 				 
							 
                                 $pass = $_POST['pass'];
    				                 $repass = $_POST['repass'];
                                 $fname = $_POST['fname'];
       	                         $sname = $_POST['lname'];
                                 $uname = $_POST['uname'];
                                 $bdate = $_POST['bdate'];
                                 $gender = $_POST['gender'];
                                 $pnum = $_POST['pnum'];
                                 $invite = $_POST['invite'];
                                 $access = $_POST['experience'];
                                 $status ="inactive";
                                 $acct_stat="Unactive";
                                            
                       
                                                             
            $query = $conn->query("SELECT * FROM invitemember WHERE phrase='$invite'");
      $row1 = $query->fetch();
      $num_row1 = $query->rowcount();

            $query = $conn->query("SELECT * FROM members WHERE username='$uname' OR invite='$invite'");
			$row = $query->fetch();
			$num_row = $query->rowcount();
           
		if( $num_row <= 0 && $num_row1 >= 1 && $row1['validity']==1) 
        { 
          if($pass==$repass)
                             {
                                if ( $_POST['gender']=="Male")
                                {$img="../images/m.jpg";}
                                else
                                {$img="../images/f.jpg";}
                                
                                
	$conn->query("insert into members (image,firstname,surname,sex,invite,phnnumber,date_of_birth,username,password,access,status,acct_status)
                                 values('$img','$fname','$sname','$gender','$invite','$pnum','$bdate','$uname','$pass','$access','$status','$acct_stat')");

  $conn->query("update invitemember set validity='0' where phrase='$invite'");
                          ?>
                       
                          	<script>
						 alert('Your request has been submitted to the administrator, Pls. wait for Admin verification. Thank you.');
                     	window.location = 'index.php';
							</script>
                            <?php	
                             }
							 	else
                                {
                                   ?>
                                   	<script>
						 alert('Password did not match! try again.');
                       
							</script>	
       <?php    
                                  
             } 
             
             
             }
             else
             {
          
              ?>
              <script>
			alert('ERROR: Provide Valid Invitation phrase or Choose Another Username.');
             </script>
                 
          <?php }  } ?>
        
        
      