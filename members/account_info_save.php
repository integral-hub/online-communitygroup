<?php
include('dbcon.php');
include('session.php');
$contact_no = $_POST['phnnumber'];

$conn->query("update members set phnnumber = '$contact_no' where member_id = '$session_id'");
?>