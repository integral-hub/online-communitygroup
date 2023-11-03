    
  
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
    <?php    include('navbar.php'); ?>
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
    <h4 class="panel-title">COMPOSE TOPIC ( * is Required ) </h4>
 
    <br />
  </div>
  <div class="panel-body">
  <form method="post" enctype="multipart/form-data">
    <center>
    <table width="800">
    <tr>
    <td>
    *Select Topic:<br /><br />
     <select name="topic" class="form-control">
    <option>DEVFEST</option>
      <option>GOOGLE I/O</option>
        <option>MOBILE APP</option>
          <option>DEVOPS</option>
          <option>PROGRAMMING</option>
          <option>HARDWARE</option>
    </select>
    <br />
    </td>
    <td width="600"> </td>
    </tr>
    <tr>
    
    <td colspan="2">
     *Topic Title:<br /><br />
    <textarea name="post_title" class="form-control" rows="2" placeholder="Title" required></textarea>
                                <br />
                                *Topic Content:<br /><br />
                <textarea name="post_content" class="form-control" rows="12" placeholder="Contents" required></textarea>
                                <br />
                                  <!-- <input type="url" name="link" class="form-control" placeholder="Enter URL" >
                                  <br /> -->
                                   Topic Image:<br /><br />
                                 <input type="file" name="image" title="click to add image to your post" /> 
              
    </td>
    </tr>
    </table>
   
    
                              <div class="pull-right">
                <button type="submit" name="post" class="btn btn-info"><i class="fa fa-share"></i> Post Topic</button>
                </div>
            </form>
                        </center>
            <?php
              if (isset($_POST['post'])){
               
                                      

                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);

                                move_uploaded_file($_FILES["image"]["tmp_name"], "../post_images/" . $_FILES["image"]["name"]);
                                $location = "../post_images/" . $_FILES["image"]["name"];
             
                                $topic = $_POST['topic'];
                $post_title = $_POST['post_title'];
                $post_content = $_POST['post_content'];
                $date_posted = date('m'.'/'.'d'.'/'.'Y')." | ".date("h:i:sa");
                                
                                
          $query_topic_ctr = $conn->query("select * from members where member_id='$session_id'") or die(mysql_error());
    while ($row_query_topic_ctr = $query_topic_ctr->fetch()) 
        {
            $ctr_topic=$row_query_topic_ctr['topic_ctr']+1;
              $conn->query("update members set topic_ctr='$ctr_topic' where member_id='$session_id'");
        }
                              
                                 
                                
                $conn->query("insert into post (member_id,date_posted,post_content,post_title,post_image,topic,access) values('$session_id','$date_posted','$post_content','$post_title','$location','$topic','Member')");
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
                       elseif($topic=="DEVOPS")
                        {
                            ?>
                            
              <script>
                window.location = 'devops.php';
              </script> 
              <?php  
                        }
                         elseif($topic=="PROGRAMMING")
                        {
                            ?>
                            
              <script>
                window.location = 'program.php';
              </script> 
              <?php  
                        }
                         else 
                        {
                            ?>
                            
              <script>
                window.location = 'hardware.php';
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
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
