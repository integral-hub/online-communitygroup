	 <table border="0" width="845"><tr><td></td></tr></table>
     
     <?php 
     error_reporting(0);
      $conn = new PDO('mysql:host=localhost;dbname=bcc_forum', 'root', '');
     include('../session.php'); 
  ?>
<div class="jumbotron  alert-info">
 
<?php  
 

									$post_query = $conn->query("select * from post LEFT JOIN members on post.member_id = members.member_id where topic='DEVOPS' and post.delstatus=0 order by post_id DESC");
									while($post_row = $post_query->fetch()){
							 
                                    $ppppp=$post_row['post_id'];
                                
								$access_query = $conn->query("select * from post where post_id='$ppppp'");
									while($access_row = $access_query->fetch())
                                    {
									   $access=$access_row['access'];
                                        $user_idx=$access_row['member_id'];
									}
                                
								?>
 
										<div class="panel panel-success">
                                 <div class="panel-heading">
                               
                                 <table border="0">
                                 <tr>
                             
                                 <td> 
                                  <img src=" 
                                <?php 
                                 if($access=="Admin")
                                 {
                                    echo  "../images/logo_forum.png";
                                 }
                                 else
                                 {echo  "../".$post_row['image'];}?>" width="40" height="40" alt="..." class="img-square">
                                 </td>
                                 <td>
                                 &nbsp; 
                                </td>
                                 <td width="545">
                                <strong><?php 
                                
                                  if($access=="Admin")
                                 { 
                                  	$name_query = $conn->query("select * from user where user_id='$user_idx'");
									while($name_row = $name_query->fetch())
                                    {
									  echo $name_row['lname']." ".$name_row['fname']." - Admin";
									}
                                   
                                    }
                                 else
                                 {  
                                    echo $post_row['firstname']." ".$post_row['surname'];
                                     }
                                     
                                     
                              ?></strong></td>
                                  <td >
                                 &nbsp; 
                                </td>
                                 <td width="200"> <?php echo $post_row['date_posted'];?>  </td>
                                 
                                
                                    
                                
                                 <td> <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
          <ul class="dropdown-menu alert alert-danger">
           <li> <a href="post_editor.php<?php echo '?id='.$ppppp; ?>"><i class="fa fa-pencil"></i> Edit</a> </li>
            <li> <a href="delete_post.php<?php echo '?id='.$ppppp; ?>"><i class="fa fa-trash-o"></i> Delete</a> </li>
       
          </ul>
        </li>
      </ul></td>
    
      
                                 </tr></table>
  </div>
								<div class="panel-body">
                                <center>
                                <table><tr><td width="800">
                               
                                 <div class="panel-heading">
                                 <table border="0" width="800">
                                 
                                  <tr><td width="500">  
                                   <a href="add_views.php?id=<?php echo $ppppp ?>"><b>View Topic</b></a> | <b>Threads</b> ( <font color="red" size="4"><?php echo $post_row['threads'] ;?></font> ) | <b>Views</b> ( <font color="orange" size="4"><?php  echo $post_row['views']; ?></font> ) | <b>Replies</b> ( <font color="blue" size="4"><?php echo $post_row['replies']; ?></font> )</td>
                                  </tr>
                                  
                                   <tr>
                                   <td width="500">  
                                   &nbsp;
                                   </td>
                                  </tr>
                                  
                                 <tr><td width="500">  <textarea class="form-control" rows="2" readonly="true" disabled=""> <?php echo $post_row['post_title']; ?></textarea> </tr></table>
                            
                                 </div>
                                 
                           
                                
                                 </td></tr></table>
                                 </center>
                                <center>
					 
								</div>
                                
                         
                        
								</div>

								<?php } ?> 
               
 

 
