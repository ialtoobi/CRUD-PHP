<?php
	
session_start();
	
include 'include/connect.php';

$id = 0;

if(isset($_POST['submit'])) {

	$title 	= $_POST['title'];
	$body 	= $_POST['body'];
	
	$xtitle = mysqli_real_escape_string($conn, $title);
	$xbody = mysqli_real_escape_string($conn, $body);
	
	
	if(trim($title) == '' || trim($body) == '')
	{
		$_SESSION['message'] = "You did not fill out the required fields.";	
		$_SESSION['msg_type'] = "alert-danger";
		
	   echo "You did not fill out the required fields.";
	   header('Location: add-post.php');
	
	}else{
	
	$query ="INSERT INTO posts (title, body,date) VALUES ('$xtitle', '$xbody',NOW())";  
	
	if (mysqli_query($conn, $query)) {
		
	    $_SESSION['message'] = "Post has been added!";	
		$_SESSION['msg_type'] = "alert-success";
	    
	    header('Location: add-post.php');
	    
	
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	  }
	}
}

if(isset($_GET['delete'])) {
	 
	$id = $_GET['delete'];
	
	$query ="DELETE FROM posts WHERE id = '$id'";
	if (mysqli_query($conn, $query)) {
	
	$_SESSION['message'] = "Post has been deleted!";	
	$_SESSION['msg_type'] = "alert-warning";
	
	header('Location: index.php');
	
	
	} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}


if(isset($_POST['update'])) {
	
		$id = $_POST['id'];
		$title = $_POST['title'];
		$body = $_POST['body'];
		
		$xtitle = mysqli_real_escape_string($conn, $title);
		$xbody = mysqli_real_escape_string($conn, $body);
		
		
		$query ="UPDATE posts SET title = '$xtitle', body = '$xbody' WHERE id = '$id'";  
		
		if (mysqli_query($conn, $query)) {
		
		    $_SESSION['message'] = "Post has been updated!";	
			$_SESSION['msg_type'] = "alert-success";
		    header('Location: index.php');
		    
		
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	
}

mysqli_close($conn);
?>