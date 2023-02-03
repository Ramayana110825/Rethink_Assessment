<?php
    require 'config.php';
	 $id=$_GET['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = date('m/d/Y h:i:s a', time());
    $query = "UPDATE `tb_blogs` SET title = '$title', content = '$content', DandT = '$date' WHERE id = '$id'";
    mysqli_query($conn, $query);
	header('location:index.php');
?>