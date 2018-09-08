<?php  
 session_start();
 
 
 include("include/connect.php");
 
 if(isset($_GET['edit'])){
	 
	 $id = $_GET['edit'];
	 
	 $query ="SELECT * FROM posts WHERE id = $id ";  
	 $result = mysqli_query($conn, $query);
	
	 if(count($result)==1){
		 
		 $row = mysqli_fetch_array($result);
		 
		 $id = $row["id"];
		 $title = $row['title'];
		 $body = $row['body'];
		 
	 }

 }

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
				    <h4 class="card-title">Edit Post</h4>
				    <form method="post" action="process.php">
					      <input type="hidden" name="id" value="<?php echo($id);?>">
						  <div class="form-group">
						    <label for="title">Title:</label>
						    <input type="name" class="form-control" value="<?php echo($title);?>" name="title" id="title">
						  </div>
						  <div class="form-group">
						    <label for="body">Body:</label>
						    <textarea rows="8" cols="50" type="name" class="form-control" name="body" id="body"><?php echo($body);?></textarea>
						  </div>
						  <button type="submit" name="update" class="btn btn-primary">Update</button>
						</form>
				  </div>
				</div>

                <br />  <br />  
                </div></br>
           </div>  
      </body>  
 </html>  
 
<?php include 'include/app.js';?>
