<?php
 include('header.php');
 
 include('navbar.php');

$get_id=$_GET['id'];

 ?>
<body id="home">

 <center> <table width="800" border="0"><tr><td>
  <div class="container-fluid">
<div class="row">
  
  <div class="col-md-12">
 
	<div class="alert alert-success"><i class="fa fa-group"></i> Edit Member</div>
	 <form method="POST">
<div class="alert alert-info">
<?php
	$query = $conn->query("select * from members where member_id='$get_id'") or die(mysql_error());
		while ($row = $query->fetch()) {
		  ?>
<table width="750">
<tr><td colspan="5">
<div class="alert alert-success"><li class="fa fa-user"></li> Personal Information</div>
</td></tr>
<tr>
<td>
<input name="edit_id" type="hidden" value="<?php echo $get_id; ?>" />
Lastname<br />
<input name="lname" type="text" value="<?php echo $row['lastname']; ?>" class="form-control" placeholder="Lastname" required="" /></td>
<td>&nbsp;</td>
<td>
Firstname<br />
<input name="fname" type="text" value="<?php echo $row['firstname']; ?>" class="form-control" placeholder="Firstname" required="" /></td>
<td>&nbsp;</td>
<td>
Middlename<br />
<input name="mname" type="text" value="<?php echo $row['middlename']; ?>" class="form-control" placeholder="Middlename" required="" /></td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr>
 <td colspan="5">
<table width="750"><tr>
 <td>
Gender<br />
<select name="gender" class="form-control">
<option>
 <?php echo $row['sex']; ?> 
</option>
<option>
Male
</option>
<option>
Female
</option>
</select>
</td>
<td>&nbsp;</td>
<td>
Date of Birth<br />
<input name="birthday" type="text" value="<?php echo $row['date_of_birth']; ?>" class="form-control" placeholder="mm-dd-yyyy" required="" /></td>
<td>&nbsp;</td>
<td>
Year Level<br />
<select name="yrlvl" class="form-control">
<option>
 <?php echo $row['yrlvl']; ?> 
</option>
<option>
1st Year
</option>
<option>
2nd Year
</option>
<option>
3rd Year
</option>
<option>
4th Year
</option>
</select>
</td>
<td>&nbsp;</td>
<td>
Contact Number<br />
<input name="cnum" type="text" value="<?php echo $row['contact_no']; ?>" class="form-control" placeholder="Contact Number" required="" /></td>

 </tr></table>
</td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr>
<td colspan="3">
Address<br />
<input name="address" type="text" value="<?php echo $row['address']; ?>" class="form-control" placeholder="Address" required="" /></td>
<td>&nbsp;</td>
<td>
Email Address<br />
<input name="email" type="text" value="<?php echo $row['email']; ?>" class="form-control" placeholder="Email Address" required="" /></td>
</tr>
</table>
<br />
<table width="750">
<tr><td colspan="7">
<div class="alert alert-success"><li class="fa fa-lock"></li> Account Information</div>
</td></tr>
<tr>
<td>
Access<br />
<select name="access" class="form-control">
<option>
 <?php echo $row['access']; ?> 
</option>
<option>
Student
</option>
<option>
Professional
</option>
</select>
</td>
<td>&nbsp;</td>
<td>
Username<br />
<input type="text" value="<?php echo $row['username']; ?>" class="form-control" placeholder="Firstname" required="" readonly="" /></td>
<td>&nbsp;</td>
<td>
Password<br />
<input type="password" value="<?php echo $row['password']; ?>" class="form-control" placeholder="Middlename" required="" readonly="" /></td>
<td>&nbsp;</td>
<td>
Account Status<br />
<select name="acct_status" class="form-control">
<option>
 <?php echo $row['acct_status']; ?> 
</option>
<option>
Activated
</option>
<option>
Unactive
</option>
<option>
Banned
</option>
</select>
</td>
</tr>
</table>
<br />
<div class="pull-right">
<a href="home.php" class="btn btn-default">Cancel</a>&nbsp;&nbsp;
<button type="submit" name="update" class="btn btn-success"><li class="fa fa-save"></li> Update</button>
</div>
<?php } ?>
</form>
<br /><br />
</div>
 
  </div>
</div>
</div>
</td></tr></table>
  </center>


	
</body>