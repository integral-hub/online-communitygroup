  <?php  include('header.php');  ?>
<head>
<script type="text/javascript" src="jquery-1.10.2.js"></script>
<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#load_tweets').load('inbox.php') ;
}, 10000); //refresh div every 10000 milliseconds or 10 seconds

var auto_refresh = setInterval(
function ()
{
$('#load_tweets2').load('sidebar.php') ;
}, 10000); //refresh div every 10000 milliseconds or 10 seconds
</script>

</head>

 

     <div id="load_tweets">
  <body id="home">

  <?php  include('navbar.php');  ?>
  
   <center> <table width="1200" border="0"><tr><td>
  <div class="container-fluid">
<div class="row">
  		<div class="col-md-3">
            	<div class="alert alert-info">
             <form method="post" action="search_result.php">
                
                  <table><tr>
                  <td>
                  <input type="text" name="search" class="form-control" placeholder="Search . ." required> 
                  </td>
                  <td>&nbsp;</td>
                  <td>
                  <button type="submit" class="btn btn-info"><li class="fa fa-search"></li> Search</button>
                  </td>
                  </tr></table>
                  
                   </form>
                  <hr />
               <div id="load_tweets2"> 
   	<?php    include('sidebar.php'); ?>
       </div>
       </div>
       </div>
			<div class="col-md-9">
   
 
	<div class="alert alert-success"><i class="fa fa-envelope-o"></i> My Inbox  </div>
 
<div class="alert alert-info">
	<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" id="example" >
	
 
		<thead>
		<tr>
         
            	<th>Sender</th>
            	<th>Date</th>
                <th>Message</th>
            	<th>Status</th>
		 	 <th>Actions</th>
		</tr>
		</thead>
		<tbody>
		<?php
		$senderquery = $conn->query("select distinct message_id,sender_id from message where member_id='$session_id' and delstatus=0") or die(mysql_error());
	$num_row = $senderquery->rowcount();
    	if( $num_row <= 0 ) 
        {      
       ?>
    
       <div class="alert alert-danger"> You have no message at this moment.</div>
       <?php
		}
 		
    	while ($senderrow = $senderquery->fetch()) 
        {
		  $sender=$senderrow['sender_id'];
          $id_msg=$senderrow['message_id'];
          
         	
		  
	 	$msgquery = $conn->query("select * from message where sender_id='$sender' and message_id='$id_msg'") or die(mysql_error());
		while ($msgrow = $msgquery->fetch()) { 
		  $msg_id=$msgrow['message_id'];
		  $sssss=$msgrow['sender_id'];
	       $subject=$msgrow['subject'];
            $access=$msgrow['access'];
    
    
    if($access=="Admin")
    {
     $sndrquery = $conn->query("select * from user where username='$sssss'") or die(mysql_error());
		while ($sndrrow = $sndrquery->fetch())
         { 
            $ppiicc="../images/logo.png";
		  $sendby=$sndrrow['fname']." ".$sndrrow['lname']." ( Admin )";
   
		}
	      
    }
    else
    {
         $sndrquery = $conn->query("select * from members where member_id='$sssss'") or die(mysql_error());
		while ($sndrrow = $sndrquery->fetch())
         { 
            $ppiicc=$sndrrow['image'];
		  $sendby=$sndrrow['firstname']." ".$sndrrow['surname']." ( ".$sndrrow['access']." )";
   
		}
	  
    }
		?>
		<tr>
         
            	<td >
                <table>
                
                <tr>
                <td>
                  <img src="<?php echo $ppiicc; ?>" width="35" height="35" alt="..." class="img-square"/>
                </td>
                <td>
                &nbsp;
                </td>
                <td>
                  <?php echo $sendby; ?><br />
                    
                </td>
                </tr>
                </table>
             
                 
                 
                 </td> 
         
            	<td width="10"><?php echo $msgrow['date_messaged']; ?></td> 
                
                <td> <input class="form-control" id="exampleInputEmail1" value="<?php echo $msgrow['message_content']; ?>" readonly="true" /></td>
                
	 <td> <?php echo   $msgrow['status'];  ?>  </td> 
         <?php if($msgrow['status']=="Unread"){ ?>
            
            	<td class="empty" width="100">
        	<a data-placement="top" title="Click to read & reply meassage" id="view<?php echo $msg_id; ?>" href="read_msg.php<?php echo '?id='.$msg_id; ?>" class="btn btn-info"><i class="fa fa-list-alt"></i> Read</a>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#view<?php echo $msg_id; ?>').tooltip('show');
				$('#view<?php echo $msg_id; ?>').tooltip('hide');
			});
			</script>
  
	
		</td>
            
            
        <?php }else{  ?>
	 	<td class="empty" width="185">
        	<a data-placement="top" title="Click to read & reply meassage" id="view<?php echo $msg_id; ?>" href="read_msg.php<?php echo '?id='.$msg_id; ?>" class="btn btn-info"><i class="fa fa-list-alt"></i> Read</a>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#view<?php echo $msg_id; ?>').tooltip('show');
				$('#view<?php echo $msg_id; ?>').tooltip('hide');
			});
			</script>
  
		<a data-placement="top" title="Click to delete meassage" id="delete<?php echo $msg_id; ?>" href="delete_msg.php<?php echo '?id='.$msg_id; ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#delete<?php echo $msg_id; ?>').tooltip('show');
				$('#delete<?php echo $msg_id; ?>').tooltip('hide');
			});
			</script>
            
		</td>
        <?php }  ?>
		</tr>
	<?php } } ?>    
	
		</tbody>
	</table>

  </div>
  </div>
</div>
</div>
</td></tr></table>
  </center>
  </div>
 
  </body>
    </div>
</html>