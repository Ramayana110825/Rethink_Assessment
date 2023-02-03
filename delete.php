<?php
    require 'config.php';
	$id=$_GET['id'];
	mysqli_query($conn,"delete from tb_blogs where id='$id'");
	header('location:index.php');
?>