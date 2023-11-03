
<?php
include('header.php');
$msg_id=$_GET['id'];
?>

<br />
<body id="home">
<center>
<table><tr><td>
<div class="alert alert-info">


<?php
 

$conn->query("update message set status='Read' where message_id='$msg_id'");

$query = $conn->query("select * from message where message_id='$msg_id'") or die(mysql_error());
while ($row = $query->fetch()) 
{
            
$message_to=$row['member_id'];
$message_from=$row['sender_id'];
$recep_access=$row['access'];

}
            
            
$msg_query = $conn->query("select * from message where member_id='$message_to' and sender_id='$message_from' order by message_id ASC") or die(mysql_error());
while ($msg_row = $msg_query->fetch()) 
{
$message_content=$msg_row['message_content'];
$message_tox=$msg_row['member_id'];
$message_fromx=$msg_row['sender_id'];
$message_date=$msg_row['date_messaged'];
$accessx=$msg_row['access'];
              
                
if($accessx=="Admin")
{
$query = $conn->query("select * from user where username='$message_fromx'") or die(mysql_error());
while ($row = $query->fetch()) 
{
$name= $row['fname']." ".$row['lname']." - Admin";
}  
}
else
{
$query = $conn->query("select * from members where member_id='$message_fromx'") or die(mysql_error());
while ($row = $query->fetch()) 
{
$name= $row['firstname']." ".$row['surname']." - ".$row['access'];
}  
}
?>
     
<center>
<table border="0" width="530">
<tr>
<td >
              	    
					<div class="form-group">
						<label for="exampleInputEmail1">From: <?php echo $name; ?></label>
					</div>
                       </td> 
                        
                      </tr> 
                    
                     </table>
                     
                     
                     
                      <table border="0">
                       <tr>
                       <td width="530"> 
				 <div class="panel panel-success">
                                 <div class="panel-heading">
                             Message
                                 </div>
                                 
                                 	<div class="panel-body">
                                    <center>
                                    <table> 
                                
                                 <tr>
                                <td width="700">
                                  <textarea rows="5" readonly="true" class="form-control"> 	<?php  echo nl2br($message_content); ?></textarea>
                                  
                                       
                      </td> 
                      </tr></table>
           </div>
       </div>

 </td></tr></table> 
 <hr />              
              <?php    
		}
        
  ?> 
 </center>
  
		  <form role="form" class="login_form" method="post" action="send_reply.php?id=<?php echo  $message_from; ?>" enctype="multipart/form-data">
                 
  	<input name="msg_id" type="hidden"   value="<?php echo $msg_id; ?>"/>
                     
                 <table border="0" width="530"><tr>
                      <table border="0">
                       <tr>
                       <td width="530"> 
					<div class="form-group">
						<label for="exampleInputPassword1">Quick Reply</label>
						 <textarea rows="10" name="msg" class="form-control" id="exampleInputPassword1" spellcheck="true" placeholder="Write your Message here!" required="true"></textarea>
					</div>
                      </td>
                       
                      </tr>
                      <tr>
                      <td>
                      <br />
                  
                   
				 <button  class="btn btn-info"  ><i class="fa fa-check-square-o"></i> Send Reply</button>&nbsp; <a href="inbox.php" class="btn btn-default"  >Cancel</a>
                      </td>
                      </tr>
                      
                      </table>
                      
			</form>
       </div>
     
       </td>
       </tr>
       </table>
       
            </body>