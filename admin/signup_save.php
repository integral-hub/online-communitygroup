<?php
include('dbcon.php');
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$cnum=$_POST['cnum'];
$email=$_POST['email'];
$address=$_POST['address'];
$access = $_POST['access'];
$username = $_POST['username'];
$password = $_POST['password'];
  $repass = $_POST['re_password'];
  
$acct_status =  "Activated";
    $status ="inactive";

        if($password==$repass)
                             {
                                if ($gender=="Male")
                                {$iamge="../images/m.jpg";}
                                else
                                {$iamge="../images/f.jpg";}
 
                                
	$conn->query("insert into members (image,firstname,lastname,middlename,sex,address,contact_no,username,email,password,access,status,acct_status)
                                 values('$iamge','$fname','$lname','$mname','$gender','$address','$cnum','$username','$email','$password','$access','$status','$acct_status')");
                          ?>
                       
                          	<script>
						 alert('Member Successfully added.');
                     	window.location = 'home.php';
							</script>
                            <?php	
                             }
							 	else
                                {
                                   ?>
                                   	<script>
						 alert('Password did not match! try again.');
                       	window.location = 'home.php';
							</script>	
                                   <?php 
                                }  
 
?>

  