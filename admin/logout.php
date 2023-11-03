<?php
include('dbcon.php');
include('session.php');
 
$conn->query("update user set status = 'inactive' where user_id = '$session_id'");
 
session_destroy();
header('location:index.php');
?>