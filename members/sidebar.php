 <?php
 error_reporting(0);
  include('header.php');  
  include('../session.php'); 
  ?> 

    
 	<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" id="example"  >
	
 
 
 
 
 
	<tr>
<td>
   Forum Administrators :
                  <hr />
	<?php
		$query = $conn->query("select * from user order by lname ASC") or die(mysql_error());
		while ($row = $query->fetch()) {?>
        
        
         <table cellpadding="0" cellspacing="0" border="0"   id="example" width="220">
         
         <tr>
        
   <td rowspan="2"><img src="../images/logo.png" width="25" height="35" class="img-square" /></td>
    <td rowspan="2">&nbsp;</td>
        	<td width="197"><?php echo $row['username']." | Admin"; ?> &nbsp; <a href="compose_msg_admin.php?id=<?php echo $row['user_id'] ;  ?>" title="click to send a message to <?php echo $row['fname']." ".$row['lname']; ?>"><i class="fa fa-comment-o"></i></a></td> 
 
	 <td  rowspan="2"><?php 
            
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
 
	    
		</tr>
       
        
        <tr>
        	<td colspan="2"> <?php echo $row['fname']." ".$row['lname']; ?> </td> 
            
            	 
        </tr>
       
        
         
        	</table>
        <?php
		  
          
          
		}?>
</td>
</tr>





		<tr>
         <td>
           Forum Members :
                  <hr />
                
           	<?php
		$query = $conn->query("select * from members order by surname ASC") or die(mysql_error());
		while ($row = $query->fetch()) {
		$id = $row['member_id'];
        
        if($id==$session_id){
            
            
                        
            	$query1 = $conn->query("select * from members where member_id='$session_id'") or die(mysql_error());
		while ($row1 = $query1->fetch()) 
        {
		   if($row1['acct_status']=="Unactive") 
           
           {
            ?>
            <script>
						 alert('Your account has been Deactivated by the Administrator. Pls. contact the admin for clarifications. Thank you.');
                     	window.location = 'logout.php';
							</script>
            <?php
           }
		}
            
        }else{
       
		?>
        
  
         <table cellpadding="0" cellspacing="0" border="0"   id="example" width="220">
         
         <tr>
        
   <td rowspan="2"><img src="<?php echo $row['image']; ?>" width="25" height="35" class="img-square" /></td>
    <td rowspan="2">&nbsp;</td>
        	<td width="197"><?php echo $row['username']." | ".$row['access']; ?> &nbsp; <a href="compose_msg.php?id=<?php echo $id;  ?>" title="click to send a message to <?php echo $row['firstname']." ".$row['surname']; ?>"><i class="fa fa-comment-o"></i></a></td> 
 
	 <td  rowspan="2"><?php 
            
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
 
	    
		</tr>
       
        
        <tr>
        	<td colspan="2"><a href="view_profile.php?id=<?php echo $id; ?>"><?php echo $row['firstname']." ".$row['surname']; ?></a></td> 
            
            	 
        </tr>
       
        
         
        	</table>
                <hr />
               <?php
              }}?>    
        </td>
        </tr>

	
	 
	</table>
 