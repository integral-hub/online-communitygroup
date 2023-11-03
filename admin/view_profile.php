   <?php include('header.php');  ?> 
  <?php  include('navbar.php');  ?>
 <?php $get_id=$_GET['id']; ?>
 
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
      
                        <?php
			$query = $conn->query("select * from members where member_id = '$get_id'");
			$row = $query->fetch();
		?>
						<div class="jumbotron alert-info">
										<ul class="nav nav-tabs">
										<li class="active"><a href="#"><?php echo $row['firstname']."'s"; ?> Personal Information</a></li>
									  
										</ul>
                                        
                                        	 <table border="0" width="845"><tr><td></td></tr></table>
					 
<div class="panel panel-success">
  <div class="panel-heading">

       
   
              
	  <i class="fa fa-user"></i> &nbsp;&nbsp; <?php echo $access=$row['access']; ?>
      <div class="pull-right">
  <font size="4">  <i class="fa fa-clipboard"></i> Topic: <?php echo $row['topic_ctr'] ; ?> &nbsp;  | &nbsp;
          
			 <i class="fa fa-chain"></i> Threads: <?php echo $row['threads_ctr'] ; ?>  &nbsp; | &nbsp;
            
              <i class="fa fa-reply"></i> Reply: <?php echo $row['replies_ctr'] ; ?></font></div>
  </div>
  <div class="panel-body">
		
  		<div class="row">
        <div class="col-md-5">
			 
                  
	<center><a href="#change_profile_picture_modal" data-toggle="modal"> <img src="<?php echo  $row['image']; ?>" width="280" height="240" alt="..." class="img-square thumbnail"/></a></center>
  
			
			</div>
     
			<div class="col-md-5">
            <table>
            <tr><td>
            	<label class="block">Name: <?php echo $row['firstname']." ".$row['surname']; ?></label>
            </td></tr>
            <tr>
            <td>
            &nbsp;
            </td>
            </tr>
             <tr><td>
            	<label class="block">Date of Birth: <?php echo $row['date_of_birth']; ?></label>
            </td></tr>
              <tr>
            <td>
            &nbsp;
            </td>
            </tr>
            
             <tr><td>
            	<label class="block">Contact No: <?php echo $row['phnnumber']; ?></label>
            </td></tr>
              
              
              <tr>
            <td>
            &nbsp;
            </td>
            </tr>
            
             <tr><td>
              	<label class="block">Invite Phrase: <?php echo $row['invite']; ?></label>
            </td></tr>
        
              <tr>
            <td>
            &nbsp;
            </td>
            </tr>
               <tr>
           <td>
           	<label class="block">Gender: <?php echo $row['sex']; ?></label>
           </td> 
            </tr>
             
            
             
            </table>
			

			
			</div>
		 
		</div>
	
  </div>
   
     
</div>
						</div>
                        
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
	
  </body>
</html>