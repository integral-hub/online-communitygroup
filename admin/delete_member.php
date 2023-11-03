<?php
include('dbcon.php');
$get_id = $_GET['id'];
$conn->query("delete from members where member_id = '$get_id'");
header('location:home.php');
?>