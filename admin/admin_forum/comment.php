<?php include('header.php'); ?>
<?php   include('../session.php');  ?>

<?php $get_id=$_GET['id']; ?>
 
 
<script type="text/javascript" src="jquery-1.10.2.js"></script>
<script type="text/javascript">
 
var auto_refresh = setInterval(
function ()
{
$('#load_tweets2').load('sidebar.php') ;
}, 10000); //refresh div every 10000 milliseconds or 10 seconds

 


var auto_refresh = setInterval(
function ()
{
$('#load_tweets3').load('navbar.php') ;
}, 10000); //refresh div every 10000 milliseconds or 10 seconds

</script>
 <div id="load_tweets3"> 
<?php
 // Turn off error reporting

  include('navbar.php'); 
 
  ?>
 </div>
 
 
 
<body id="home">
  
    <center>
        <table >
        <tr>
        <td>
 
            <div class="container-fluid">
	 
                <div class="row">
		 
         
         
         
                    <div class="col-md-3">
                    <div class="alert alert-info">
                    <form method="post" action="search_result.php">
                
                    <table>
                    <tr>
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
                  
                    <div id="load_tweets2"><?php  include('sidebar.php'); ?></div>
                    </div>
                    </div>
			
            
            
            
            
                        <div class="col-md-9">
                            <div class="jumbotron alert-success">
  
 
                            <?php
                            $post_query = $conn->query("select * from post where post_id='$get_id'");
                            while($post_row = $post_query->fetch())
                            {  
							 
                            $ppppp=$post_row['post_id'];
                            $mmmmm=$post_row['member_id'];
                            $ttttt=$post_row['topic'];
                            $views=$post_row['views']+1;
                            $access=$post_row['access'];
                            $replies=$post_row['replies'];
                            $threads=$post_row['threads'];
                                 
                            	
                            if($access=="Admin")
                            {   
                            $pmem_query = $conn->query("select * from user where user_id='$mmmmm'");
                            while($pmem_row = $pmem_query->fetch())
                            {
                            $pmimg="../images/logo.png";
                            $pmname=$pmem_row['fname']." ".$pmem_row['lname']." - Admin";
                            } 
                                 
                            }
                            else
                            {   
                            $pmem_query = $conn->query("select * from members where member_id='$mmmmm'");
                                 
                            while($pmem_row = $pmem_query->fetch())
                            {
                            $pmimg="../".$pmem_row['image'];
                            $pmname=$pmem_row['firstname']." ".$pmem_row['surname'];
                            } 
                            }
                            ?>
                        <ul class="nav nav-tabs">
                        
                        <?php if($ttttt=="DEVFEST"){ ?>
                            	<li ><a href="home.php"><img src="../images/windows.png" width="40" height="40" />DEVFEST</a></li>
                            
                            
                      <?php  }
                      
                        if($ttttt=="GOOGLE I/O"){ ?>
                            	<li ><a href="googleio.php"><img src="../images/mac.png" width="40" height="40" /> GOOGLE I/O</a></li>
                            
                        <?php } ?>
                        
                        
                        <?php  
                       if($ttttt=="MOBILE APP")
                        { ?>
                              <li ><a href="mobileapp.php"><img src="../images/linux.png" width="40" height="40" />MOBILE APP</a></li>
                            
                        <?php } ?>
                        
                        
                            <?php   if($ttttt=="DEVOPS"){ ?>
                            	<li  ><a href="devops.php"><img src="../images/android.png" width="40" height="40" /> DEVOPS</a></li>
                        <?php } ?>
                        
                        
                            <?php   if($ttttt=="PROGRAMMING"){ ?>
                             <li ><a href="program.php"><img src="../images/program.png" width="40" height="40" /> PROGRAMMING</a></li>
                            
                        <?php } ?>
                        
                          <?php   if($ttttt=="HARDWARE"){ ?>
                            	<li ><a href="hardware.php"><img src="../images/hardware.png" width="40" height="40" /> HARDWARE</a></li>
                            
                        <?php } ?>
								
									 
                                      
									  
									 
										  
									 
                                        </ul>
                                        	 
                            <div class="panel panel-info">
                            
                                <div class="panel-heading">
                                     
                                <table border="0">
                                <tr>
                                <td><img src="<?php echo $pmimg;?>" width="40" height="40" alt="..." class="img-square" /></td>
                                <td>&nbsp;</td>
                                <td><strong><?php echo $pmname; ?></strong></td>
                                <td width="430">&nbsp;</td>
                                <td width="150"> <?php echo $post_row['date_posted'];?>  </td>

                                   <td >&nbsp;</td>
                                        <td width="5"><a href="delete_post.php?post_id=<?php echo $get_id; ?>"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                </table>
                                
                                </div>
                                
                                    <div class="panel-body">
                                <center>
                                <table>
                                <tr>
                                <td width="730">
                                
                                <div class="panel panel-success">
                                    <div class="panel-heading"> <textarea class="form-control" rows="1" readonly="true"> <?php echo $post_row['post_title']; ?></textarea></div>
                                        <div class="panel-body">
                                        
                                      
                                            <div class="col-md-12">
                                        <textarea class="form-control" rows="4" readonly="true"><?php  echo nl2br($post_row['post_content']); ?></textarea>  </div> 
                                        </div>
                                            
                                        </div>
                                   
                                </center>
                                </div> 
                
                      </td>
                                </tr>
                                </table>
                
                
                <div class="pull-left"> <h2>&nbsp;&nbsp;&nbsp;&nbsp;Threads</h2> </div> 
                            
                                <center>
				                <table>
                                <?php	
                                $ccomment_query = $conn->query("select * from comment where post_id='$ppppp' and delstatus=0 order by comment_id ASC");
				                while($ccomment_row = $ccomment_query->fetch())
                                {
				                $cm_id= $ccomment_row['member_id'];
                                $access =$ccomment_row['access'];
                                $ccccc=$ccomment_row['comment_id'];
                                          
                                if($access=="Admin")
                                {	
                                    $cmem_query = $conn->query("select * from user where user_id='$cm_id'");
				                    while($cmem_row = $cmem_query->fetch())
                                    {
				                    $cpics ="../images/logo.png";
                                    $cmname =$cmem_row['fname']." ".$cmem_row['lname']." - Admin";
                                    }
                                }
                                else
                                {	
                                    $cmem_query = $conn->query("select * from members where member_id='$cm_id'");
				                    while($cmem_row = $cmem_query->fetch())
                                    {
				                    $cpics ="../".$cmem_row['image'];
                                    $cmname =$cmem_row['firstname']." ".$cmem_row['surname']." - ".$cmem_row['access'];
                                    }
                                }
                                ?>
                                <tr>
                                <td>
                                <div class="panel panel-info">
                                 
                                    <div class="panel-heading">
                                        <table border="0" width="697">
                                        <tr>
                                        <td width="45"><img src="<?php echo $cpics; ?>" width="40" height="40" alt="..." class="img-square"  /></td>
                                        <td>&nbsp;</td>
                                        <td><strong><?php echo $cmname;?></strong></td>
                                        <td >&nbsp;</td>
                                        <td width="180" align="right"> <?php echo $ccomment_row['date_commented'];?>  </td>
                                        
                                       
                                        <td >&nbsp;</td>
                                        <td width="5"><a href="del_comment.php?comment_id=<?php echo $ccccc;?>&post_id=<?php echo $get_id; ?>"><i class="fa fa-trash-o"></i></a></td>
                                        
                                        
                                        </tr>
                                        </table>
                                    </div>
                                   
                
                
				                <div class="panel-body">
                                    <center>
                                    <table border="0"  width="670">
                                    <tr>
                                    <td>
                                    
                                    <div class="col-md-12">
                                    
                                     <textarea class="form-control" rows="3" readonly="true"><?php  echo nl2br($ccomment_row['comment_content']); ?> </textarea>
                                    
                                    </div>                                   
                                 
                                    </td>
                                    </tr>
                                    
                                   
                                    <tr>
                                    <td>
                                      <div class="pull-left"> <h2>Replies</h2> </div> <br /> 
                                    <hr />
                                    <?php	$repz_query = $conn->query("select * from repz where comment_id='$ccccc' and delstatus=0 order by reply_id ASC");
				                    while($repz_row = $repz_query->fetch())
                                    {
                                    $repz_id= $repz_row['reply_id'];
				                    $rm_id= $repz_row['member_id'];
                                    $r_access =$repz_row['access'];
                                          
                                    if($r_access=="Admin")
                                    {	
                                    $rmem_query = $conn->query("select * from user where user_id='$rm_id'");
                    				while($rmem_row = $rmem_query->fetch())
                                    {
                    				$rpics ="../images/logo.png";
                                    $rmname =$rmem_row['fname']." ".$rmem_row['lname']." - Admin";
                                    }
                                    }
                                    else
                                    {	
                                    $rmem_query = $conn->query("select * from members where member_id='$rm_id'");
                    				while($rmem_row = $rmem_query->fetch())
                                    {
                    				$rpics ="../".$rmem_row['image'];
                                    $rmname =$rmem_row['firstname']." ".$rmem_row['surname']." - ".$rmem_row['access'];
                                    }
                                    }
                                    ?>
                
                
                
                                        <div class="panel panel-warning">
                
                                            <div class="panel-heading">
                                                <table border="0" width="660">
                                                <tr>
                                                <td width="45"><img src="<?php echo $rpics; ?>" width="40" height="40" alt="..." class="img-square" /></td>
                                                <td width="5">&nbsp;</td>
                                                <td width="300"><strong><?php  echo $rmname;  ?></strong></td>
                                                <td width="5">&nbsp;</td>
                                                <td width="150" align="right"> <?php echo $repz_row['date_replied'];?>  </td>
                                            
                                               
                                                  <td width="5">&nbsp;</td>
                                                <td width="5"><a href="delete_reply.php?repz_id=<?php echo $repz_id;?>&post_id=<?php echo $get_id; ?>"><i class="fa fa-trash-o"></i></a></td>
                                               

                                                </tr>
                                                </table>
                                            </div>
                
                                            <div class="panel-body">
                                                  
                                                <div class="col-md-12">
                                              
                                                 <textarea class="form-control" rows="3" readonly="true"> <?php  echo nl2br($repz_row['reply_content']); ?></textarea>
                                              
                                                </div>
                                             
                                            </div>
                                   
                                        </div>
                                        <hr />
                                        
                                        
                                    <?php 
                                    } ?>  
                                       <form method="post" enctype="multipart/form-data">
                                    <center>
                                   
                                    <table border="0" width="650">
                                    <tr>
                                    <td align="center" >
                                    <input type="hidden" name="post_id" value="<?php echo $get_id; ?>" />
                                    <input type="hidden" name="comment_id" value="<?php echo $ccomment_row['comment_id'];; ?>" />
                    				<textarea name="reply_content" class="form-control" rows="2" placeholder="Compost Reply here . ." required="true"></textarea>
                                    </td>
                                    </tr>
                                    <td>&nbsp;</td>
                                    <tr>
                                    <td >
                                    <table border="0" class="pull-right">
                                    <tr> 
                                    <td> <button type="submit" name="reply" class="btn btn-info pull-right">Reply</button></td>
                                    </tr>
                                    </table>
                                    </td>
                                    </tr>
                                    </table>
                                  
                                    </center>
                                           </form>  
                                    </td>
                                    </tr>
                                    </table>
                                </div>
                            </div>
                            </td>
                            </tr>
                            <?php } ?>
                            </table>
				            </center>
				            </div>
                
                
                
                 <!-- check -->
                <center>
                <form method="post" enctype="multipart/form-data">
                <table border="0">
                
                <tr>
                <td width="710">
                <input type="hidden" name="topic" value="<?php echo $ttttt; ?>" />
                <input type="hidden" name="post_id" value="<?php echo $get_id; ?>" />
				<textarea name="comment_content" class="form-control" rows="3" placeholder="Compost Thread here . ." required="true"></textarea>
                </td>
                </tr>
                
                
                <tr>
                <td><br />&nbsp;</td>
                </tr>
                
              
                <tr>
                <td >
                <table border="0" class="pull-right">
                <tr>
                <td><button type="submit" name="comment" class="btn btn-info pull-right">Post Thread</button> </td>
                <td>&nbsp;</td>
                <td>
                <?php if($ttttt=="DEVFEST"){ ?><a href="home.php" class="btn btn-default pull-right">Back</a> <?php } ?>
                 <?php if($ttttt=="GOOGLE I/O"){ ?><a href="googleio.php" class="btn btn-default pull-right">Back</a> <?php } ?>
                  <?php if($ttttt=="MOBILE APP"){ ?><a href="mobileapp.php" class="btn btn-default pull-right">Back</a> <?php } ?>
                   <?php if($ttttt=="DEVOPS"){ ?><a href="devops.php" class="btn btn-default pull-right">Back</a> <?php } ?>
                    <?php if($ttttt=="PROGRAMMING"){ ?><a href="program.php" class="btn btn-default pull-right">Back</a> <?php } ?>
                     <?php if($ttttt=="HARDWARE"){ ?><a href="hardware.php" class="btn btn-default pull-right">Back</a> <?php } ?>
                
                
                 </td></tr></table>
                       
               
              
                </form>
                    </td></tr></table>
                       
                </center>
                 <!-- check -->
                 
                <br />
                        
                </div>

				<?php 
                } ?> 
	 
            	<?php
                     $QUERY=$conn->query("Select * from user where username='$session_id'") or die(mysql_error());
                  $row = $QUERY->fetch(); 
                  $user_id=$row['user_id'];    

				if (isset($_POST['reply']))
                {


				$topic_id = $_POST['post_id'];
				$comment_id = $_POST['comment_id'];
				$reply_content = $_POST['reply_content'];
				$date_replied = date('m'.'/'.'d'.'/'.'Y')." | ".date("h:i:sa");
                
                
			 $query_replies_ctr = $conn->query("select * from members where member_id='$session_id'") or die(mysql_error());
		while ($row_query_replies_ctr = $query_replies_ctr->fetch()) 
        {
            $ctr_replies=$row_query_replies_ctr['replies_ctr']+1;
            	$conn->query("update members set replies_ctr='$ctr_replies' where member_id='$session_id'");
        }
              
              
                            
                $conn->query("insert into repz (member_id,date_replied,reply_content,comment_id,access) values ('$user_id','$date_replied','$reply_content','$comment_id','Admin')");
					 	
                $post_query = $conn->query("select * from post where post_id='$topic_id'");
				while($post_row = $post_query->fetch())
                {
                $replies=$post_row['replies']+1;
                }
                $conn->query("update post set replies='$replies' where post_id='$topic_id' ");
                ?>
                <script>window.location = 'comment.php<?php echo "?id=".$topic_id; ?>';</script>	
				<?php 
                } ?>
                <?php
							
                            
                
                
                if (isset($_POST['comment']))
                {
                    
				$topic = $_POST['topic'];
				$post_idx = $_POST['post_id'];
				$comment_content = $_POST['comment_content'];
				$date_comment = date('m'.'/'.'d'.'/'.'Y')." | ".date("h:i:sa");
						
                        
                         $query_threads_ctr = $conn->query("select * from members where member_id='$session_id'") or die(mysql_error());
		while ($row_query_threads_ctr = $query_threads_ctr->fetch()) 
        {
            $ctr_threads=$row_query_threads_ctr['threads_ctr']+1;
            	$conn->query("update members set threads_ctr='$ctr_threads' where member_id='$session_id'");
        }
        	
                $conn->query("insert into comment (member_id,date_commented,comment_content,post_id,access) values ('$user_id','$date_comment','$comment_content','$post_idx','Admin')");
				$post_query = $conn->query("select * from post where post_id='$post_idx'");
				while($post_row = $post_query->fetch())
                {
                $threads=$post_row['threads']+1;
                }
                $conn->query("update post set threads='$threads' where post_id='$post_idx' ");
                ?>
                <script>window.location = 'comment.php<?php echo "?id=".$post_idx; ?>';</script>	
				<?php
                } ?>
                             
                </div>
                </div>
                    </div>
                </div>
               
          
        </td>
        </tr>
        </table>
    </center>
             
</body>
	