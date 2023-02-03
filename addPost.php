<?php
require 'config.php';
if(!empty($_SESSION["id"])){

    if(isset($_POST["submit"])){
     $uid = $_GET["id"];
       $title = $_POST["title"];
       $content = $_POST["content"];
       $date = date('m/d/Y h:i:s a', time());
      $query = "INSERT INTO tb_blogs (username, title, content, DandT) VALUES('$uid','$title','$content','$date')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Post Added'); </script>";
     header("Location: index.php");
    }
}else{
    header("Location: index.php");
}
   
    

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Add Post</title>
  </head>
  <body>
  <div class="topnav">
    <a class="div2">Mini Blog</a>
    <a class="div1" href="index.php">Home</a>
  </div>
  <div class="container-forms">
    <h2>Edit Post</h2>
    <br>
    <form action="" method='POST'>
    <input placeholder="Enter Title" type="text"  name="title" required class="form-control"><br>
    <textarea placeholder="Enter Content" type="text" name="content" required class="form-control"></textarea><br>
    <button  type="submit" name="submit" class="btn btn-primary">POST</button>

      </form>
</div>

  </body>
</html>
