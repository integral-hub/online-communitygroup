<?php
include('dbcon.php');

$del_msg=$_GET['del_id'];

	$conn->query("update message set delstatus=1  where message_id = '$del_msg'");
					
                    ?>
			 <script>
	window.location = 'inbox.php';
</script>
                  