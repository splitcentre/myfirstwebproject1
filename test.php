<?php

include 'database.php';
session_start();

if(isset($_POST['submit'])){
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){
      $row = mysqli_fetch_assoc($select_users);

      $_SESSION['user_name'] = $row['user_name'];
      $_SESSION['user_email'] = $row['email'];
      $_SESSION['user_id'] = $row['id_user'];
      header('location: home.php');

   }else{
      $message[] = 'Incorrect email or password!';
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <link rel="stylesheet" href="style2.css">
   <title>Login</title>
</head>

<body>
   <div class="container mt-4" id="top-logo">
      <div class="row">
         <div class="col-md-2" style="right: 5%;">
            <nav class="navbar navbar-light">
               <a class="navbar-brand" href="index.php">
                  <img src="image/insignia.png" width="30" height="30" alt="">
               </a>
            </nav>
         </div>
      </div>
      <hr>

      <?php
   if (isset($_POST['submit'])) {
      $outputArray = [
         'email' => $_POST['email'],
         'password' => $_POST['password']
      ];
      echo '<pre>';
      print_r($outputArray);
      echo '</pre>';
   }
   ?>

      <div class="form-container">
         <form action="login.php" method="post">
            <h3>Log in</h3>
            <input type="email" name="email" placeholder="Enter your email" required class="box">
            <input type="password" name="password" placeholder="Enter your password" required class="box">
            <input type="submit" name="submit" value="Log in" class="btn">
            <p>Don't have an account? <a href="signup/register.php">Register now</a></p>
         </form>
      </div>
   </div>

   <?php
   if (!empty($outputArray['email']) && !empty($outputArray['password'])) {
      echo '<pre>';
      print_r($outputArray);
      echo '</pre>';
   }
   ?>

</body>

</html>
