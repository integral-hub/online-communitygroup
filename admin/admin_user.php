<?php include('header.php'); 
require_once('session.php');
?>

  <body>
  <?php  include('navbar.php');  ?>
  <center>
  <table width="1000"><tr><td>
  <div class="container-fluid">
<div class="row">
  
  <div class="col-md-12">
	

	
	<div class="alert alert-success"><i class="fa fa-user"></i> Admin Users Table</div>
	<a data-toggle="modal" href="#add_user" id="delete"  class="btn btn-info" name=""><i class="fa fa-plus"></i> Add Admin User</a>
	<?php include('modal_add_user.php') ?>	
	<hr/>
	<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" id="example" >
	
 
		<thead>
		<tr>
					<th>Name</th>
					<th>Username</th>
					<th>Last Log</th>
				 
					<th class="empty"></th>
		</tr>
		</thead>
		<tbody>
			<?php
			$query = $conn->query("select * from user where delstatus=0") or die(mysql_error());
			while ($row = $query->fetch()) {
			
			$id = $row['user_id'];
			?>
			<tr>
				<td><?php echo $row['fname']." ".$row['lname']; ?></td> 
				<td><?php echo $row['username']; ?></td> 
				<td><?php echo $row['last_logtime']; ?></td> 
				<?php if ($row['username']!=="admin") {
				
				?>
				<td class="empty" width="170"><a href="delete_user.php<?php echo '?id='.$id; ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a> 
				<a data-placement="left" title="Click to Edit" id="edit<?php echo $id; ?>" data-toggle="modal" href="#<?php echo $id; ?>"  class="btn btn-success"><i class="fa fa-pencil"></i> Edit</a>
				
					<script type="text/javascript">
					$(document).ready(function(){
						$('#edit<?php echo $id; ?>').tooltip('show');
						$('#edit<?php echo $id; ?>').tooltip('hide');
					});
					</script>
				<?php include('modal_edit_user.php') ?>	
				</td>
			</tr>
			<?php }}?>    
	
		</tbody>
	</table>
	
  	<?php include('footer.php'); ?>
  </div>
</div>
</div>
</td></tr></table>
  </center>

  </body>
</html>