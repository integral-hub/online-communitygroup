 
<?php
error_reporting(0);
 include('header.php'); ?>
<?php include('../session.php'); ?>

<nav class="navbar navbar-default alert-success " role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
   
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
          <font size="5">
            <a href="home.php"><img src="../images/logo.png" width="50" height="50" alt="..." class="img-square"/></a> GDGIBADAN ONLINE COMMUNITY
         </font>
        
      <ul class="nav navbar-nav navbar-right">
      
      
      	<li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
        	<li><a href="profile.php"><img src="<?php echo $imgxyz; ?>" width="25" height="25" alt="..." class="img-square"/> <?php echo $name." ( ".$member_type." ) "; ?></a></li>
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
        
         
            <li><a href="../logout.php?id=<?php echo $session_id; ?>"><i class="fa fa-sign-out"></i> Logout</a></li>
 
         
      </ul>
 
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>