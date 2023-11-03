<!-- Modal -->
		<div class="modal fade" id="<?php echo $c_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Edit Comment</h4>
			</div>
			<div class="modal-body">
				  <center>
                                     	<form method="post" enctype="multipart/form-data">
                                         <?php	$ccomment_query = $conn->query("select * from comment where comment_id='$c_id'");
									while($ccomment_row = $ccomment_query->fetch()){
									   
								 
                                       $post_idd =$ccomment_row['post_id'];
                                       	 $com_content=$ccomment_row['comment_content'];
                                         
                                       	$cmem_query = $conn->query("select * from post where post_id='$post_idd'");
									while($cmem_row = $cmem_query->fetch()){
									 $com_topic=$cmem_row['topic'];
                                      
                                       }
                                       }
                                       
                                       ?>
                               <table border="0">
                                <tr>
                             
                                <td width="710">
                             	 <input type="hidden" name="topic" value="<?php echo $com_topic; ?>" />
                                	 <input type="hidden" name="comment_id" value="<?php echo $c_id; ?>" />
								<textarea name="comment_content" class="form-control" rows="2" placeholder="Comment. ." required><?php echo $com_content; ?></textarea>
             
                        </td>
                       
                      
                       </tr>
                       <tr>
                       <td>
                       &nbsp;
                       </td>
                       </tr>
                       <tr>
                        <td >
                       <table border="0" class="pull-right"><tr> <td> <button type="submit" name="comment" class="btn btn-info pull-right">Comment</button></td> <td>&nbsp;</td> </tr></table>
                     
                        
                        
                         
                       
	 
					</td>
                        </tr>
                        
                        </table>
                        	</form>
                          </center>
                       
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
				
			</div>
			</div>
			
		</div>
		</div>
		  					<?php
							if (isset($_POST['comment'])){
							 
                             
                             
						     	$topic = $_POST['topic'];
								$comment_content = $_POST['comment_content'];
							 $comment_id = $_POST['comment_id'];
							 
                             
                            	$conn->query("update comment set comment_content='$comment_content' where comment_id='$comment_id' ");
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
				