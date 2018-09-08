<?php  
 session_start();
 $page = "add-post";
 
 include("include/connect.php");

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
				    <h4 class="card-title">Insert Post</h4>
				    <form method="post" action="process.php">
						  <div class="form-group">
						    <label for="title">Title:</label>
						    <input type="name" class="form-control" name="title" id="title">
						  </div>
						  <div class="form-group">
						    <label for="body">Body:</label>
						    <textarea rows="8" cols="50" type="name" class="form-control" name="body" id="body"></textarea>
						  </div>
						  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
						</form>
				  </div>
				</div>

                <br />  <br />  
                </div></br>
           </div>  
      </body>  
 </html>  
 
<?php include 'include/app.js';?>
