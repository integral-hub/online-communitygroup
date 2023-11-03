<?php
include('dbcon.php');
include('../session.php');


$contact_no = $_POST['contact_no'];

$conn->query("update members set phnnumber = '$contact_no' where member_id = '$session_id'");
?>

<script>
alert('Personal Info Successfully Updated');
window.location = 'profile.php';
</script>