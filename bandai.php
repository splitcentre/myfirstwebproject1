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
        <a class="navbar-brand" href="index.php">
          <img src="image/insignia.png"  width="30" height="30" alt="">
          
        </a>
      </nav>
            </div>
            <div class="col-md-7" id="searchbar">
            </div>
            <div class="col-md-3 mt-2" id="icons">
              <div style="cursor: pointer;" class="circle float-right" onclick="redirectToProfile();" data-toggle="tooltip" data-placement="top" title="LOGIN & SIGNUP">
                <i class="fas fa-user text-primary"></i>
            </div>
              
             <a href="cart.php"> <div class="circle float-right mr-2"><i class="fas fa-shopping-cart text-primary"></i><sup><span class="badge badge-danger" style="width: 23px;">0</span></sup></div>
             </a>
            </div>
        </div>
    </div>
    <hr>

    <div class="container" style="height: 30px;">
      <nav class="navbar navbar-expand-lg navbar-light" style="height: 30px;">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse pl-4" id="navbarNav">
              <ul class="navbar-nav">
                  <li class="nav-item active">
                      <a class="nav-link" href="bandai.php">Bandai <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="hasbro.php">Hasbro</a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="other.php">Other</a>
                  </li>
              </ul>
          </div>
      </nav>
  </div>
    <hr>

    <div class="container cardItem" id="products">
<h2>Popular Products</h2>
<br>
  <div class="row">
  <div class="col-md-3">
    <div class="card">
      <img class="card-img-top img-fluid" src="image/evau13.jpg" alt="Card image cap">
      <div class="card-body">
        <p class="card-text"><a href="eva.html" class="text-dark">Eva Unit 13</a></p>
        
        <div class="ratings">
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-secondary"></i>
          <label class="text-secondary ml-3">34 reviews</label>
        </div>
        <p class="card-cost">Rp1.790.000</p>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card">
      <img class="card-img-top img-fluid" src="image/gundamjustice.jpg" alt="Card image cap">
      <div class="card-body">
        <p class="card-text"><a href="gundam.html" class="text-dark">Gundam Metal Build Justice Gundam</a></p>
        <div class="ratings">
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-secondary"></i>
          <label class="text-secondary ml-3">34 reviews</label>
        </div>
        <p class="card-cost">Rp1.500.000</p>
      </div>
    </div>
  </div>
  </div>
</div>
<hr>


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