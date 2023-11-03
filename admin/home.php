<?php include('header.php'); ?>
<?php include('session.php'); ?>
<head>
<script type="text/javascript" src="jquery-1.10.2.js"></script>
<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#load_tweets').load('data.php') ;
}, 10000); //refresh div every 10000 milliseconds or 10 seconds
var auto_refresh = setInterval(
function ()
{
$('#load_tweets2').load('home.php') ;
}, 10000); //refresh div every 10000 milliseconds or 10 seconds
</script>
 
</head>

 

 
  <body>
 
  <?php  include('navbar.php');  ?>
  
   <center> 
   <table width="1200" border="0"><tr><td>
  <div class="container-fluid">
<div class="row">
  
  <div class="col-md-12">

	<form method="GET">
    <input type="hidden" name="invi" value="set">
  <button type="submit" class="btn btn-danger">Generate Invite</button> </form>
    <br>
  
    
       <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" id="example" >
         <div class="alert alert-success">
              
    <h5>LIST OF INVITE TOKEN</h5> 
         </div>
  <?php 
$post_query = $conn->query("select * from invitemember where validity='1'");
        while($invite_row = $post_query->fetch()){
        
  ?>
    <tbody>
        <tr>
  <td><?php echo $invite_row['ilink']; }?></td>
</tr></tbody>
</table>

 <br><br>
	<div class="alert alert-success"><i class="fa fa-group"></i> Members Table</div>
		 
	<hr/>
    <div id="load_tweets">
<?php include('data.php'); ?>
    </div>
  
  </div>
</div>
</div>

</td></tr>


<tr><td align="center">  
 </td></tr></table>
  </center>
<?php   
// This function will return a random
function random_strings($length_of_string)
{
 
    // String of all alphanumeric character
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
 
    // Shuffle the $str_result and returns substring
    // of specified length
    return substr(str_shuffle($str_result),
                       0, $length_of_string);
}
if (!empty($_GET['invi'])) {

$get=$_GET['invi'];

if ($get=='set') {
 
 
// This function will generate
// Random string of length 10
  $random=random_strings(20);
$link="https://localhost/bcc/join.php?id=".$random;

$valid=1;
 
 $conn->query("insert into invitemember (phrase, ilink, validity ) values('$random','$link','$valid')");


?>
          <script>
                        window.location = 'home.php';
              </script>
<?php }}?>
  </body>

</html>