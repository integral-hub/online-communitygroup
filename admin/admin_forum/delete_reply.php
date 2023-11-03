 

<br />
<br />

 
<?php

	include('header.php');
    
    $post_id=$_GET['post_id'];  
    $repz_id=$_GET['repz_id'];
   	$post_query = $conn->query("select * from repz LEFT JOIN members on repz.member_id = members.member_id where reply_id='$repz_id'");
									while($post_row = $post_query->fetch())
                                    {
									   
								
    
?>
<form method="post">

<input name="del_id" type="hidden" value="<?php  echo $repz_id;  ?>" />
<input name="post_id" type="hidden" value="<?php  echo $post_id;  ?>" />

<div class="alert alert-danger">
<center>
<table width="600" border="0">
<tr>
<td  >
<div class="alert alert-info">
 <font size="5">
 <center>
 CONFIRMATION </center></font> </div>
</td><td></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td colspan="2">
 <font size="5">
Are you sure you want to delete this Reply?
 </font>
</td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td> <font size="4"><?php echo "Replied by: ".$post_row['firstname']." ".$post_row['surname'];?> </font></td>
<td> <font size="4"><?php echo  "Date Reply: ".$post_row['date_replied'] ;?> </font></td>
</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td colspan="2"> <font size="4"><?php echo "Reply Content: ".$post_row['reply_content'] ;?> </font></td>
 </tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td width="300">
<button class="btn btn-danger" name="delete" ><li class="fa fa-trash-o"></li> Delete</button>
 &nbsp;<a href="home.php" class="btn btn-default"  >Cancel</a>
</td>
<td></td>
</tr>

</table></center>
</div>
</form>



	<?php }
							if (isset($_POST['delete'])){
					  
                         $del_id = $_POST['del_id'];
                         $post_id = $_POST['post_id'];
					   
						$conn->query("update repz set delstatus=1 where reply_id = '$del_id'");
                                
                               
				$post_query = $conn->query("select * from post where post_id='$post_id'");
				while($post_row = $post_query->fetch())
                {
                $reply=$post_row['replies']-1;
                }
                $conn->query("update post set replies='$reply' where post_id='$post_id' ");
					
                    ?>
			 <script>
	window.location = 'home.php';
</script>
                     <?php   }		?>