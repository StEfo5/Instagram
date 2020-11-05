<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'Instagram');
	mysqli_query($con,"UPDATE Posts SET text = '{$_GET['text']}' WHERE id = '{$_GET['id']}'");
	mysqli_query($con,"UPDATE Posts SET img = '{$_GET['img']}' WHERE id = '{$_GET['id']}'");
	header('Location: index.php');
 ?>