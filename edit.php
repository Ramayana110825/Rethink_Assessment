<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id= $_GET["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_blogs WHERE id = '$id'");
  $row = mysqli_fetch_assoc($result);
  $username = $row["username"];
 
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
    <title>Edit Post</title>
  </head>
  <body>
  <div class="topnav">
    <a class="div2">Mini Blog</a>
    <a class="div1" href="index.php">Home</a>
  
  </div>
  <div class="container-forms">
    <h2>Edit Post</h2>
    <br>
    <form action="update.php?id=<?php echo $id; ?>" method='POST'>
    <input placeholde="Enter Title" type="text" value="<?php echo $row['title']; ?>" name="title" required class="form-control"><br>
    <textarea placeholder="Enter Content" type="text" value="<?php echo $row['content']; ?>" name="content" required class="form-control"><?php echo $row['content']; ?></textarea><br>
    <button type="submit" name="submit" class="btn btn-save">Save</button>
      </form>
</div>

  </body>
</html>
