<?php
session_start();

if (isset($_SESSION["user_name"])) {
    $mysqli = require __DIR__ . "/database.php";

    $email = $_SESSION["email"];
    $sql = "SELECT user_name FROM user WHERE email = '$email'";
    $result = $mysqli->query($sql);
    
    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc()["user_name"];
    } else {
        $user = "Unknown";
    }

    header('location:login.php');
} else {

    header('location:login.php');
    exit; 
}
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
    <div class="row rounded">
      <div class="col-3 mb-4 mt-3 pt-4 pb-3 bg-light w-auto h-fit-content">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="v-pills-profile-tab" selected data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-user"></i> &nbsp; Your Profile</a>
        </div>
      </div>
      <div class="col-9 mt-3">
        <div class="tab-content bg-light pb-5" id="v-pills-tabContent">
          <div class="tab-pane fade show active p-3" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <img id="profilePic" src="https://icon-library.com/images/default-user-icon/default-user-icon-8.jpg" class="rounded-circle img-fluid">
            &nbsp; &nbsp; <h5 class="d-inline-block"><?php echo $user; ?></span></h1> &nbsp;&nbsp;&nbsp;&nbsp;<small class="text-success"><i class="fas fa-pencil-alt"></i>&nbsp; Edit</small>&nbsp;&nbsp;&nbsp;&nbsp;<small class="text-danger"><i class="fas fa-times"></i>&nbsp; Remove</small></h5>

            <br>
            <br>
            <hr>
            <br>
            <form>
              <div class="row pb-5">
                <div class="col">
                  <p class="font-weight-bold d-inline-block">Display Name</p>
                  <input type="text" class="form-control">
                </div>
                <div class="col">
                  <p class="font-weight-bold d-inline-block">Full Name</p>
                  <input type="text" class="form-control">
                </div>
              </div>                  
                </div>
            <hr>

            <div class="delAccount pt-3">
              <h5 class="text-dark">Delete Account</h5>
              <a href="" class="text-muted float-right font-weight-bold">Delete Your Account</a>
              <p class="text-muted">By deleting your account, you will lose all your data.</p>
               </div>
               <hr class="mt-4"><br><br>

            <button type="button" class="btn btn-outline-primary float-right mt-3 mb-5" data-toggle="modal" data-target=".bd-example-modal-md">Save Changes</button>
            <br>
          </div>
        </div>
      </div>
    </div>
</div>






<footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <h5>About Us</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget est ac nulla facilisis tincidunt.</p>
        </div>
        <div class="col-lg-4 col-md-6">
          <h5>Contact</h5>
          <ul class="list-unstyled">
            <li>Address: 123 Main St, City, Country</li>
            <li>Phone: +1 234 5678 910</li>
            <li>Email: info@example.com</li>
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
          <p class="text-center">© 2023 Your Company. All rights reserved.</p>
        </div>
      </div>
    </div>
  </footer>
  
</body>


</html>