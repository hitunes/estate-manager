<?php 

	
	$db = mysqli_connect('localhost', 'root', '', 'e-reg');

	// initialize variables
	$name = "";
	$address = "";
	$id = 0;
	

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];

		mysqli_query($db, "INSERT INTO info (name, address) VALUES ('$name', '$address')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: index.php');
	}

	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$address = $_POST['address'];
	
		mysqli_query($db, "UPDATE info SET name='$name', address='$address' WHERE id=$id");
		$_SESSION['message'] = "Address updated!"; 
		header('location: index.php');
	}

	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($db, "DELETE FROM comments WHERE id=$id");
		 
		header('location: users.php');
	}

	if (isset($_POST['save'])){
		if(empty($_POST['id']) & empty($_POST['name']) & empty($_POST['address'])){
			exit;
		}
		
	}

