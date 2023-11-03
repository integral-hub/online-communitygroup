<?php
 include('header.php');
 
  $recep_id=$_GET['id'];
  
  	$query = $conn->query("select * from members where member_id='$recep_id'") or die(mysql_error());
		while ($row = $query->fetch()) 
        {
           $to_id = $row['member_id'];
		  $recep_name=$row['firstname']." ".$row['surname']." - ".$row['access'];
		}
  ?>

  <body id="home">
  	<div class="modal-dialog">
    <div class="modal-content">
			<div class="modal-header">
				<a type="button" class="close" href="home.php" aria-hidden="true">&times;</a>
				<h4 class="modal-title" id="myModalLabel">Compose Message</h4>
			</div>
			<div class="modal-body">
				 <form role="form" class="login_form" method="post" action="send_msg.php?id=<?php echo $recep_id; ?>" enctype="multipart/form-data">
                 
 
                 <table border="0" width="530"><tr>
                 <td >
              	    
					<div class="form-group">
						<label for="exampleInputEmail1">To</label>
						<input name="recep_name" type="text" class="form-control" id="exampleInputEmail1"  value="<?php echo $recep_name; ?>" readonly>
					</div>
                       </td> 
                        
                      </tr> 
                      <tr>
                 
                        <td>&nbsp;</td>
                        
                      </tr> 
                      <tr> 
                    
                      </tr> 
                     </table>
                     
                     
                     
                      <table border="0">
                       <tr>
                       <td width="530"> 
					<div class="form-group">
						<label for="exampleInputPassword1">Message</label>
						 <textarea rows="10" name="msg" class="form-control" id="exampleInputPassword1" spellcheck="true" placeholder="Write your Message here!" required="true"></textarea>
					</div>
                      </td> 
                      </tr></table>
				 <button  class="btn btn-info"  ><i class="fa fa-check-square-o"></i> Send</button>
			</form>
            
            
            
			</div>
		 
			</div>
			</div>
            </body>