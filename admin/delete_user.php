<?php
include('dbcon.php');
$get_id = $_GET['id'];
$conn->query("update user set delstatus=1 where user_id = '$get_id'");
header('location:admin_user.php');
?>