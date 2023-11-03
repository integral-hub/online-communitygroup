<?php
include('dbcon.php');
$get_id = $_GET['id'];
$conn->query("update message set delstatus=1  where message_id = '$get_id'");
header('location:inbox.php');
?>