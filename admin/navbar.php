<?php require_once('session.php'); 
  ?>
<nav class="navbar navbar-default alert-success" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">GDGIBADAN - Admin</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="home.php"><i class="fa fa-group"></i> Members</a></li>
        <?php
      $query = $conn->query("select * from user where username = '$session_id'") or die(mysql_error());
      $row = $query->fetch();
        if ($row['username']=="admin") {
        
            ?>
			<li><a href="admin_user.php"><i class="fa fa-user"></i> Admin Users</a></li>
      <?php 
}else{
}
      ?>
        	<li><a href="admin_forum/home.php"><i class="fa fa-comment"></i> Forum Page</a></li>
            <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>

         
       
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>