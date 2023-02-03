<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_users WHERE id = '$id'");
  $row = mysqli_fetch_assoc($result);
  $username = $row["username"];
}
else{
  header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Index</title>
  </head>
  <body>
  <div class="topnav">
    <a class="div2">Mini Blog</a>
    <a class="div1" href="logout.php">Logout</a>
    <a class="div1">Welcome <?php echo $row["username"]; ?></a> 
  </div>

<?php 
    $result2 = mysqli_query($conn, "SELECT * FROM tb_blogs WHERE username = '$username' ORDER BY DandT DESC");
    echo "<form action='' method='post'>";
    while($row2 = mysqli_fetch_assoc($result2))
      {
      echo  '<div class="container-blogs">';
      echo "<h1>" . $row2['title'] . "</h1>";
      echo "<p >" . $row2['content'] . "</p>";
      echo "<p style='font-size:12px;'>Date: "  . $row2['DandT'] . "</p>";
      echo '<button class="btn-delete"><a class="hyperlinks" href="delete.php?id='.$row2['id'].'">Delete</a></button>&nbsp;'; 
      echo  '<button class="btn-edit"><a class="hyperlinks" href="edit.php?id='.$row2['id'].'">Edit</a></button>  ';  
      
      echo '</div>';
      }
      echo"</form>";
      echo "</br>";
    ?>
 </div>
    <br>
    <div class="container-create">
      <button class="btn-create"><a class="hyperlinks"href="addPost.php?id=<?php echo $username ?>">Create new Post</a></button>
    </div>
  </body>
</html>
