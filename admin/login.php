<?php
		include('dbcon.php');
          date_default_timezone_set('Asia/Manila'); 
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];
		/* student */
		$resultFilms = $conn->prepare("select * from user where username = '$username' and password = '$password'")or die(mysql_error());
		$resultFilms->execute();
		$num_row = $resultFilms->rowcount();
		$row = $resultFilms->fetch();
		if( $num_row > 0 ) { 
		  	$user=$row['user_id'];
		$_SESSION['username']=$row['username'];
           $conn->query("update user set status = 'active'  where user_id = '$user'");
        $date_log = date('m'.'/'.'d'.'/'.'Y')." | ".date("h:i:sa");
        
 	    $conn->query("update user set last_logtime='$date_log' where user_id='$user'");
        
		echo 'true';
        	
		 } else{ 
				echo 'false';
		}	
		?>