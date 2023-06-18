<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$user_id = $_SESSION['user_id'];

require_once 'database.php';

$sql = "SELECT * FROM users WHERE id = $user_id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);

    $user_name = $row['user_name'];
    $email = $row['email'];
} else {
    header('Location: login.php');
    exit;
}

mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" defer></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <title>main menu</title>
</head>
<body>
    <div class="container mt-4" id="top-logo">
        <div class="row">
            <div class="col-md-2" style="right: 5%;">
    <nav class="navbar navbar-light">
        <a class="navbar-brand" href="index.html">
          <img src="image/insignia.png"  width="30" height="30" alt="">
          
        </a>
      </nav>
            </div>
            <div class="col-md-7" id="searchbar">
                <div class="input-group mt-3">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
            </div>
            <div class="col-md-3 mt-2" id="icons">
              <div style="cursor: pointer;" class="circle float-right" onclick="window.location.href='login.php'" data-toggle="tooltip" data-placement="top" title="LOGIN & SIGNUP">
                <i class="fas fa-user text-primary"></i>
            </div>
              
             <a href="cart.html"> <div class="circle float-right mr-2"><i class="fas fa-shopping-cart text-primary"></i><sup><span class="badge badge-danger" style="width: 23px;">0</span></sup></div>
             </a>
            </div>
        </div>
    </div>
    <hr>


<div class="container">
    <h2>My Account</h2>
    <br><br>
    <h1>Welcome, <?php echo $user_name ?></h1>
    <p>Your email address is <?php echo $email; ?></p>
    <a href="login.php">Logout</a>
</div>






<footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <h5>About Us</h5>
          <p>A Toys Store specialized in action figures and model kit.</p>
        </div>
        <div class="col-lg-4 col-md-6">
          <h5>Contact</h5>
          <ul class="list-unstyled">
            <li>Email: AlbertToys@yahoo.com</li>
          </ul>
        </div>
        <div class="col-lg-4">
          <h5>Follow Us</h5>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <p class="text-center">© 2023 AlbertToys. All rights reserved.</p>
        </div>
      </div>
    </div>
  </footer>
  
</body>


</html>