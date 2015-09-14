<?php 	
	//store inoput in variable and hash the password
	$username = $_POST['username'];
	//$password = hash('sha512',$_POST['$password']);
	$password = $_POST['password'];
	
	//conect to the database
	$conn = new PDO('mysql:host=localhost;dbname=movie','','');
	
	$sql = "SELECT id FROM admin WHERE username = '$username' AND password = '$password'";
	
	$result = $conn->query($sql);
	
	//store the number of resultes in a variable
	$count = $result -> rowCount();
	
	if ($count == 1) {		
		foreach  ($result as $row) {
			//access the existing session created automatically by the server
			session_start();
			//take the user's id from the database and store it in a session variable
			$_SESSION['admin_id'] = $row['id'];
			//redirect the user
			header('Location:add.php');				
		};			
	}else {
		header('Location:adminlogin.html');
	}	
	
	$conn = null;	
?>