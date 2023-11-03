<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['username']) || ($_SESSION['username'] == '')) {
 header("location:index.php");
    exit();
}
$session_id=$_SESSION['username'];
$user_query = $conn->query("select * from user where username = '$session_id'");
$user_row = $user_query->fetch();
$name = $user_row['fname'];
 
$access = "Admin";

 
 

?>