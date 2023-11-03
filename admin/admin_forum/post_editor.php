    
    
     
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
   	<?php    include('navbar.php'); 
       
       $get_id=$_GET['id'];
       
       	$post_query = $conn->query("select * from post LEFT JOIN members on post.member_id = members.member_id where post_id='$get_id'");
									while($post_row = $post_query->fetch())
                                    {
								 $topic = $post_row['topic'];
							 	$post_title = $post_row['post_title'];
								$post_content = $post_row['post_content'];
									}
       
       ?>
    
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
									 
                                        	 <table border="0" width="845"><tr><td></td></tr></table>
				<div class="panel panel-success">
  <div class="panel-heading">

      <br />
		<h4 class="panel-title">EDIT TOPIC ( * is Required ) </h4>
 
    <br />
  </div>
  <div class="panel-body">
	<form method="post" enctype="multipart/form-data">
    <center>
    <table width="800">
    <input type="hidden" name="id" value="<?php echo $get_id; ?>" />
    <tr>
    <td>
    *Select Topic:<br /><br />
     <select name="topic" class="form-control">
     <option><?php echo $topic; ?></option>
    <option>DEVFEST</option>
      <option>GOOGLE I/O</option>
        <option>MOBILE APP</option>
          <option>DEVOPS</option>
    </select>
    <br />
    </td>
    <td width="600"> </td>
    </tr>
    <tr>
    
    <td colspan="2">
     *Topic Title:<br /><br />
    <textarea name="post_title" class="form-control" rows="2" placeholder="Title" required> <?php echo 	$post_title; ?></textarea>
                                <br />
                                *Topic Content:<br /><br />
								<textarea name="post_content" class="form-control" rows="12" placeholder="Contents" required><?php echo $post_content; ?></textarea>
                                <br />
                                  <!-- <input type="url" name="link" class="form-control" placeholder="Enter URL" >
                                  <br /> -->
                                  
    </td>
    </tr>
    </table> 
    
                            	<div class="pull-right">
								<button type="submit" name="edit" class="btn btn-success"><i class="fa fa-save"></i> Update Topic</button>&nbsp;	<a href="home.php" class="btn btn-default">Cancel</a>
								</div>
						</form>
                        </center>
						<?php
							if (isset($_POST['edit'])){
							 
                                    
   $id = $_POST['id'];
                         $topic = $_POST['topic'];
							 	$post_title = $_POST['post_title'] ;
								$post_content = $_POST['post_content'];
								$date_posted = date('m'.'/'.'d'.'/'.'Y')." | ".date("h:i:sa");
                                
								$conn->query("update post set date_posted='$date_posted',post_content='$post_content',post_title='$post_title',topic='$topic' where post_id='$id'");
						if($topic=="DEVFEST")
                        {
						  
			 
                        	?>
                            
							<script>
								window.location = 'home.php';
							</script>	
							<?php
                            	}
                        elseif($topic=="GOOGLE I/O")
                        {
                           	?>
                            
							<script>
								window.location = 'googleio.php';
							</script>	
							<?php 
                        }
                        elseif($topic=="MOBILE APP")
                        {
                           	?>
                            
							<script>
								window.location = 'mobileapp.php';
							</script>	
							<?php 
                        }
                        else
                        {
                          	?>
                            
							<script>
								window.location = 'devops.php';
							</script>	
							<?php  
                        }
                            
                             } ?>
	
  </div>
  
     
</div>
 
 
						</div>
                        
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
  </body>
</html>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
