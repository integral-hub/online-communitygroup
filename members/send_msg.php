
	<?php
						 
							 
include('header.php');             
  include('../session.php'); 
    $recep_id=$_GET['id'];
                                

       	                        $msg = $_POST['msg'];
                                  $access = "Member";
       	                        $status =  "Unread";
								$date_posted = date('m'.'/'.'d'.'/'.'Y')."  |  ".date("h:i:sa");
                                
								$conn->query("insert into message (message_content,status,date_messaged,member_id,sender_id,access) 
                                                                  values('$msg','$status','$date_posted','$recep_id','$session_id','$access')");
							?>
							<script>
                            alert('Message sent!');
								window.location = 'home.php';
							</script>	
						 