	<form method="post">
								<textarea name="post_content" class="form-control" rows="3" placeholder="Share your thoughts" required></textarea>
                                <br />
                                 <input type="file" name="comment_image" title="click to add image to your post" /> 
								<div class="pull-right">
								<button type="submit" name="post" class="btn btn-info"><i class="fa fa-share"></i> Post</button>
								</div>
						</form>
						<?php
							if (isset($_POST['post'])){
								$post_content = $_POST['post_content'];
								$date_posted = date('m'.'/'.'d'.'/'.'Y')." | ".date("h:i:sa");
                                
								$conn->query("insert into post (member_id,date_posted,post_content) values('$session_id','$date_posted','$post_content')");
							?>
							<script>
								window.location = 'profile.php';
							</script>	
							<?php } ?>