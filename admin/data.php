<?php include('header.php'); 
require_once('session.php');
?>
	<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" id="example" >
	
 
		<thead>
		<tr>
         
        	<th>User Name</th>
					<th>Fullname</th>
					<th>Gender</th>
					<th>Invite Phrase</th>
					<th>Contact Number</th>
					<th>Access</th>
                    	<th> </th>
					<th class="empty">Action</th>
		</tr>
		</thead>
		<tbody>
	  	<?php

		$query = $conn->query("select * from members where delstatus=0") or die(mysql_error());
		while ($row = $query->fetch()) {
			$id = $row['member_id'];
		?>
		<tr>
         
        	<td><?php echo $row['username']; ?></td> 
		<td><?php echo $row['firstname']." ".$row['surname']; ?></td> 
		<td><?php echo $row['sex']; ?></td> 
	 
		<td><?php echo $row['invite']; ?></td> 
		<td><?php echo $row['phnnumber']; ?></td> 
		<td><?php echo $row['access']."<br/>( ".$row['acct_status'].") "; ?></td> 
        	<td><?php 
            
            if($row['status']=="active"){  
                ?>
            <img src="../images/active.png" width="12" height="12" alt="..." class="img-circle">
                 <?php    
            }
            else
            {
                ?>
                <img src="../images/inactive.png" width="12" height="12" alt="..." class="img-circle">
             <?php    
            }
            
             ?> </td> 
	 
		<td class="empty" width="280">
        <form method="POST">
       
        <input name="edit_id" type="hidden" value="<?php echo $id; ?>" />
	<?php if($row['acct_status']=="Activated"){
	   ?>
       
         <input name="acct_status" type="hidden" value="Unactive" />
       	<button data-placement="left" title="Click to  Deactivate Member"  name="update"  class="btn btn-success">Deactivate</button>
		 
       
       <?php
       
	}  ?>
    	<?php if($row['acct_status']=="Unactive"){
	   ?>
        <input name="acct_status" type="hidden" value="Activated" />
       	<button data-placement="left" title="Click to  Activate Member"  name="update"  class="btn btn-success">Activate</button>
       <?php
       
	}  ?>
           
	 <a   title="Click to View all Details" id="view<?php echo $id; ?>" href="view_profile.php<?php echo '?id='.$id; ?>" class="btn btn-info"><i class="fa fa-list-alt"></i> View</a>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#view<?php echo $id; ?>').tooltip('show');
				$('#view<?php echo $id; ?>').tooltip('hide');
			});
			</script>
		
             <a   title="Click to Remove Member" id="remove<?php echo $id; ?>" href="delete_member.php<?php echo '?id='.$id; ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a>
           

			<script type="text/javascript">
			$(document).ready(function(){
				$('#remove<?php echo $id; ?>').tooltip('show');
				$('#remove<?php echo $id; ?>').tooltip('hide');
			});
			</script>
		              </form>
		</td>
		</tr>
 
	
		</tbody>
        	<?php } ?>   
	</table>
    	<?php
							if (isset($_POST['update'])){
							 
                                $edit_id =  $_POST['edit_id'];
							  
       	                        $acct_status =  $_POST['acct_status'];
                                   $status ="inactive";
								$conn->query("update members set acct_status='$acct_status', status='$status' where member_id='$edit_id'");
						
                        if($acct_status=="Activated"){
                           	?>
							<script>
                                alert('Successfully Activated.');
								window.location = 'home.php';
							</script>	
							<?php 
                        }
                        else
                        {
                            	?>
							<script>
                                alert('Successfully Deactivated.');
								window.location = 'home.php';
							</script>	
							<?php
                        }
                        	 
						  } ?>