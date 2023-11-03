   <?php  include('navbar.php');  ?>
<head>
<script type="text/javascript" src="jquery-1.10.2.js"></script>
<script type="text/javascript">
 
var auto_refresh = setInterval(
function ()
{
$('#load_tweets2').load('sidebar.php') ;
}, 10000); //refresh div every 10000 milliseconds or 10 seconds
</script>
 
</head>
  <body id="home">

<center>
  <table>
  <tr>
  <td>
 
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
        
						<div class="jumbotron alert-info">
										<ul class="nav nav-tabs">
										<li ><a href="profile.php">Personal Information</a></li>
									 	<li class="active"><a href="account.php">Account Activities</a></li>
										</ul>
                                        	 <table border="0" width="845"><tr><td></td></tr></table>
						<?php include('account_info_panel.php'); ?>
 
						</div>
                        
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
 
  </body>
</html>