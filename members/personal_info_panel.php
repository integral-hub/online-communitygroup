 	<?php
			$query = $conn->query("select * from members where member_id = '$session_id'");
			$row = $query->fetch();
		?>
<div class="panel panel-success">
  <div class="panel-heading">

    <div class="pull-right">
		<h4 class="panel-title"><a href="personal_info_modal.php?id=<?php echo $session_id; ?>"   ><i class="fa fa-pencil"></i> Update</a></h4>
	</div>
    <br />
  </div>
  <div class="panel-body">
	
  		<div class="row">
        <div class="col-md-5">
			 
                   <?php include('profile_picture.php'); ?>
		 
			</div>
     
			<div class="col-md-5">
            <table>
            <tr><td>
            	<label class="block">Name: <?php echo $row['firstname']." ".$row['surname']; ?></label>
            </td></tr>
            <tr>
            <td>
            &nbsp;
            </td>
            </tr>
             <tr><td>
            	<label class="block">Date of Birth: <?php echo $row['date_of_birth']; ?></label>
            </td></tr>
              <tr>
            <td>
            &nbsp;
            </td>
            </tr>
            
             <tr><td>
            	<label class="block">Contact No: <?php echo $row['phnnumber']; ?></label>
            </td></tr>
              <tr>
            <td>
            &nbsp;
            </td>
            </tr>
              
            
             <tr><td>
              	<label class="block">Invite Phrase: <?php echo $row['invite']; ?></label>
            </td></tr>
              <tr>
            <td>
            &nbsp;
            </td>
            </tr>
          
               <tr>
           <td>
           	<label class="block">Gender: <?php echo $row['sex']; ?></label>
           </td> 
            </tr>
            </table>
			

			
			</div>
		 
		</div>
	
  </div>
    
     
</div>