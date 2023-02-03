<?php
require 'config.php';
if(!empty($_SESSION["id"]) || !empty($_SESSION["username"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_users WHERE email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    $verify = password_verify($password,$row['password'] );
    if($verify){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      $_SESSION["username"] = $row["username"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
    <title>Login</title>
  </head>
  <body>
  <div class="topnav">
    <a class="div2">Mini Blog</a>
    <a class="div1" href="login.php">Login</a>
  </div>
    <div class="container-forms">
    <h2>Login</h2>
    <br>
    <form class="" action="" method="post" autocomplete="off">
      <div class="form-group">
      <input type="text" name="usernameemail" placeholder="Enter Email" id = "usernameemail" required value="" class="form-control">
      </div>
   
    <div class="form-group">
      <input type="password" placeholder="Enter Password" name="password" id = "password" required value="" class="form-control"> 
    </dv>
     <br><br>
     <div class="form-btn">
      <button type="submit" name="submit" class="btn btn-primary">Login</button>
    <div>
    </form>
    <br><br>
    <p> Not yet registered? <a href="registration.php">Registration</a></p>
    </div>
</div>
  </body>
</html>
