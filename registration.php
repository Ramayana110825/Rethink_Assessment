<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_users WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
        $hash = password_hash($password, PASSWORD_DEFAULT); 
      $query = "INSERT INTO tb_users (username, email, password) VALUES('$username','$email','$hash')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
        header("Location: login.php");
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }  
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
    <title>Registration</title>
  </head>
  <body>
  <div class="topnav">
    <a class="div2">Mini Blog</a>
    <a class="div1" href="login.php">Login</a>
  </div>
    <div class="container-forms">
    <h2>Registration</h2>
    <br>
    <form class="" action="" method="post" autocomplete="off">
   
      <input type="text" name="username" id = "username" required value="" placeholder="Enter Username" class="form-control"> <br>
   
      <input type="email" name="email" id = "email" required value="" placeholder="Enter Email" class="form-control"> <br>
   
      <input type="password" name="password" id = "password" required value="" placeholder="Enter Password" class="form-control"> <br>
 
      <input type="password" name="confirmpassword" id = "confirmpassword" required value="" placeholder="Confirm Password" class="form-control"> <br>
      <button type="submit" name="submit" class="btn btn-primary">Register</button>
    </form>
  </body>
</html>
