<?php
session_start();
if(isset($_SESSION['admin_id'])){
	
	$showid = $_POST['showid'];
	$seriesid = $_POST['seriesid'];
	
	$jjlink = $_POST['jjlink'];
	$xglink = $_POST['xglink'];
	$thunderlink = $_POST['thunderlink'];
	
	$uploadtime = date("Y-m-d H:i");
	
	//connect
	$conn = new PDO('mysql:host=localhost; dbname=movie', '', '');
	$conn -> query("set names utf8");
	
	$sql = "INSERT INTO series
	          (showid, seriesid, xglink, jjlink, thunderlink, uploadtime ) 
			 VALUES
			  ('$showid','$seriesid',  '$xglink', '$jjlink', '$thunderlink', '$uploadtime')";
			  	
	$conn ->exec($sql);
	$conn = null;
	
	header('location:add.php');

	}else{header('location:adminlogin.html');};
?>