<?php
		include('dbcon.php');
		session_start();
        
		$email = $_POST['email'];
		$password = $_POST['password'];
        
 
		/* student */
			$query = $conn->query("SELECT * FROM members WHERE username='$email' AND password='$password' AND acct_status='Activated'");
			$row = $query->fetch();
			$num_row = $query->rowcount();
		if( $num_row > 0 ) 
        { 
            
        $xxx=$row['member_id'];
		$_SESSION['id']=$row['member_id'];
        
        $conn->query("update members set status = 'active'  where member_id = '$xxx'");
        
   ?>
      <script> 
										window.location = 'members/home.php';  
								 
									 
						</script>
     <?php
 
		}
        else
        { 
            
            
	 ?>
      <script> 
										window.location = 'index.php';  
										alert('Please Check Your Username and Password');
									 
						</script>
     <?php
		}	
				
		?>