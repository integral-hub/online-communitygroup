
 
<?php
include('dbcon.php');
$get_id=$_GET['id'];
$conn->query("update members set status = 'inactive' where member_id = '$get_id'");
?>
 <script>				 
window.location = 'close.php';  
</script>