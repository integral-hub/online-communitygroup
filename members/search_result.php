 <?php
 error_reporting(0);
  include('header.php');  
  
  ?> 
  <br />
  <br />
  <center>
  <table width="1000"><tr><td>
	<div class="alert alert-info">
    
 	<table width="1000" border="0">
     <tr>
 <td colspan="3">
<font size="5"> Search Result for:  <?php echo $search=$_POST['search']; ?></font>
 
 </td>
 </tr>
  <tr>
  <td>Search Member Category</td>
  <td></td>
  <td>Search Topic Category</td>
 </tr>
	<tr>
    <td>
        <table>

 <tr>
 <td>
 &nbsp;
 </td>
 </tr>
	
		<tr>
        
         <td  width="500">
           
           	<?php
         
		$query = $conn->query("select * from members where firstname like '%$search%' or lastname like '%$search%' or middlename like '%$search%' or email like '%$search%' or address like '%$search%' or username like '%$search%' or access like '%$search%'") or die(mysql_error());
		while ($row = $query->fetch()) {
		  
		$id = $row['member_id'];
      
       
      
		?>
        
  
         <table  width="230" border="0">
        
         <tr>
        
   <td rowspan="2"  ><img src="<?php echo $row['image']; ?>" width="40" height="40" class="img-square" /></td>
    <td rowspan="2">&nbsp;</td>
        	<td width="150"><?php echo $row['username']." | ".$row['access']; ?> &nbsp; <a href="compose_msg.php?id=<?php echo $id;  ?>" title="click to send a message to <?php echo $row['firstname']." ".$row['surname']; ?>"><i class="fa fa-comment-o"></i></a></td> 
 
	 <td  rowspan="2" width="5"><?php 
            
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
               }?>    
        </td>
        </tr>
 
 
	 
	</table>
    </td>
    
    
    
    
    
     <td>&nbsp;</td>
    
    
    
    
    
    
    <td>
    
    
    
    
        <table>
 
 <tr>
 <td>
 &nbsp;
 </td>
 </tr>
	
		<tr>
  
         <td  width="500">
           
           	<?php
        
		$topic_query = $conn->query("select * from post where post_content like '%$search%' or post_title like '%$search%' or topic like '%$search%'") or die(mysql_error());
		while ($topic_row = $topic_query->fetch()) {
		  
		$topic_id = $topic_row['post_id'];
      
       
      
		?>
        
  
         <table  width="500">
       
               <tr>
        
   <td>
    Topic
   
   </td>
   <td>&nbsp;</td>
   <td>
  Title
   
   </td>
    <td>&nbsp;</td>
   <td>
      Contents
   </td>
    <td>&nbsp;</td>
 <td> </td>
	    
		</tr>
        
         <tr>
        
   <td>
     <textarea class="form-control" rows="3" readonly="true">  <?php echo $topic_row['topic'];?></textarea>
   

   
   </td>
   <td>&nbsp;</td>
   <td>
   <textarea class="form-control" rows="3" readonly="true">  <?php echo $topic_row['post_title'];?></textarea>
   
   
   </td>
    <td>&nbsp;</td>
   <td>
       <textarea class="form-control" rows="3" readonly="true">  <?php echo $topic_row['post_content'];?></textarea>
   
   </td>
    <td>&nbsp;</td>
 <td>  <a href="add_views.php?id=<?php echo $topic_row['post_id']; ?>">View Topic</a></td>
	    
		</tr>
        
         
        	</table>
                <hr />
               <?php
               }?>    
        </td>
        </tr>

	
	 
	</table>
    </td>
    </tr>
   <tr>
<td colspan="3">
<a href="home.php">Back to Home</a>
</td>
</tr>
    </table>

	</div>
    </td></tr></table>
    </center>