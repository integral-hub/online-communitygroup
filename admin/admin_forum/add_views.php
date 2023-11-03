<?php
include('header.php');
$get_id=$_GET['id'];
	$post_query = $conn->query("select * from post where post_id='$get_id'");
									while($post_row = $post_query->fetch())
                                    {
  $views=$post_row['views']+1;
  }
 $conn->query("update post set views='$views' where post_id='$get_id' ");
?>
                   
						<script>
								window.location = 'comment.php<?php echo "?id=".$get_id; ?>';
							</script>	
						 