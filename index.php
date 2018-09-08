<?php  
 session_start();
 $page = "home";
 include("include/connect.php");
 $query ="SELECT * FROM posts ORDER BY id DESC";  
 $result = mysqli_query($conn, $query);  
 
 ?>  
 
 <?php
	  include("include/header.php");
	  
 ?>
 
           <br /><br />  
           <div class="container"> 
	           
	           	   <?php if(isset($_SESSION['message'])) : ?>
		           <div id="alert" class="text-center alert <?php echo($_SESSION['msg_type']);?> fade show">
					  <?php 
						  
						  echo "<b>" . $_SESSION['message'] . "</b>";
						  unset($_SESSION['message']);
						  
					  ?>
				   </div>
				   <?php endif ?> 
 
                <div class="card">
				<div class="card-body">
				<h3 align="center">All Posts Bootstrap</h3>  </br>
                <div class="table-responsive">  
                     <table id="data" class="table table-striped table-bordered" style="width:100%">  
                          <thead>  
                               <tr class="text-center">  
                                    <td><b>ID</td>  
                                    <td><b>Title</td>  
                                    <td><b>Body</td>  
                                    <td><b>Date</td> 
                                    <td><b>Action</td>   
                                    
                               </tr>  
                          </thead>               
                          <?php  
	                          
                          while($row = mysqli_fetch_array($result))  
                          { 
	                          	$id     = 	$row['id'];
								$title  = 	$row['title'];
								$body   = 	$row['body'];
								$date   = 	$row['date'];

                          ?> 
                               <tr>  
                                    <td class="text-center"><?php echo($id);?></td>  
                                    <td><?php echo($title);?></td> 
                                    <td><?php echo($body);?></td>  
                                    <td><?php echo($date);?></td>
                                    
                                    
                                    <td class="text-center"> 
										<div class="pull-left>"><a href="edit-post.php?edit=<?php echo($id);?>"
										class="btn btn-info"><i class="fa fa-pencil"></i></a></div>
										&nbsp;
										<div class="pull-right>" ><a href="process.php?delete=<?php echo($id);?>"
										class="btn btn-danger"><i class="fa fa-trash-o"></i></span></a></div>

									</td>
                               </tr>  
                            
                          <?php }?>
                     	</table>  
                      </div>  
           			</div>
                </div></br>
           </div>
           
      </body>  
 </html>  
 
 
<?php include 'include/app.js';?>
<?php include 'include/footer.php';?>