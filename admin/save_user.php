<?php include('dbcon.php'); ?>
<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$conn->query("insert into users (firstname,lastname,username,password) values('$firstname','$lastname','$username','$password')");
header('location:admin_user.php');
?>