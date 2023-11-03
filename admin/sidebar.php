 <?php
 error_reporting(0);
  include('header.php');  
  include('session.php'); 
  ?> 
 
    
 	<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" id="example"  >
	
 
 
	
		<tr>
         <td>
           Online Members:
                  <hr />
           	<?php
		$query = $conn->query("select * from members order by surname ASC") or die(mysql_error());
		while ($row = $query->fetch()) {
		$id = $row['member_id'];
        if($id==$session_id){}else{
       
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
        	<td colspan="2"><a href="view_profile.php?id=<?php echo $id; ?>"><?php echo $row['firstname']." ".$row['lastname']; ?></a></td> 
            
            	 
        </tr>
       
        
         
        	</table>
                <hr />
               <?php
              }}?>    
        </td>
        </tr>

	
	 
	</table>
 