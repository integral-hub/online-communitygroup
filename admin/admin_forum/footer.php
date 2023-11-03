	  <div class="container-fluid">
  <div class="row">
   <div class="col-md-12">
	<footer>
	      <ul class="nav navbar-nav navbar-right">
      
      
      	<li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
  
    	<li><a href="poster.php"><i class="fa fa-share-square-o"></i> Post Topic</a></li>
     <?php
     $mctr=0;
     	$msg_query = $conn->query("select * from message where member_id='$session_id' and status='Unread' order by message_id ASC");
									while($msg_row = $msg_query->fetch())
                                    {
									   $mctr=$mctr+1;
									}
									  
              
                                       ?>
       	<li><a href="inbox.php"><i class="fa fa-envelope"></i> Messages<?php if($mctr==0){}else{ ?>&nbsp;<span class="badge badge-info alert-danger"><?php echo $mctr; ?> </span> <?php } ?></a></li>
        
         
            <li><a href="../home.php"><i class="fa fa-sign-out"></i> Back to Admin Panel</a></li>
 
         
      </ul>
	</footer>
	</div>
	</div>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>