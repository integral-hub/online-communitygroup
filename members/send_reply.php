
	<?php
						 
							 
                        include('header.php');             
  include('../session.php'); 
    $recep_id=$_GET['id'];
                              
       	                        $msg = $_POST['msg'];
                                $msg_id = $_POST['msg_id'];
                                $access = "Member";
       	                        $status =  "Unread";
								$date_posted = date('m'.'/'.'d'.'/'.'Y')."  |  ".date("h:i:sa");
                                
								$conn->query("insert into message (message_content,status,date_messaged,member_id,sender_id) 
                                                                  values('$msg','$status','$date_posted','$recep_id','$session_id')");
							?>
							<script>
                                alert('Message sent!');
								window.location = 'inbox.php';
							</script>	
						 