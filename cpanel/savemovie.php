<?php
session_start();
if(isset($_SESSION['admin_id'])){
	//store the inputs in variables
	$poster = $_FILES['poster']['name'];
	$tmp_name = $_FILES['poster']['tmp_name'];	
	
	$name = $_POST['name'];
	$starring = $_POST['starring'];
	$desc = $_POST['desc'];
	$type = $_POST['type'];
	$releasedate = $_POST['releasedate'];
	
	$jjlink = $_POST['jjlink'];
	$xglink = $_POST['xglink'];
	$thunderlink = $_POST['thunderlink'];
	
	$uploadtime = date("Y-m-d H:i");
	
	//move the file to the images folder
	move_uploaded_file($tmp_name, "../images/posters/$poster");
	
	
	//connect
	$conn = new PDO('mysql:host=localhost; dbname=movie', '', '');
	$conn -> query("set names utf8");
	$sql = "INSERT INTO movie
	          (poster, name, starring, description,type, releasedate, xglink, jjlink, thunderlink, uploadtime ) 
			 VALUES
			  ('$poster','$name', '$starring', '$desc', '$type', '$releasedate', '$xglink', '$jjlink', '$thunderlink', '$uploadtime')";
			  	
	$conn ->exec($sql);
	$conn = null;
	
	header('location:add.php');

	}else{header('location:adminlogin.html');};
?>