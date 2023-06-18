<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script>
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
              <div style="cursor: pointer;" class="circle float-right" onclick="window.location.href = 'login.html';" data-toggle="tooltip" data-placement="top" title="LOGIN & SIGNUP">
                <i class="fas fa-user text-primary"></i>
            </div>
              
             <a href="cart.html"> <div class="circle float-right mr-2"><i class="fas fa-shopping-cart text-primary"></i><sup><span class="badge badge-danger" style="width: 23px;">0</span></sup></div>
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
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdown"
                          role="button" aria-haspopup="true" aria-expanded="false">
                          <span>≡ All Category</span>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">Transformer</a>
                          <a class="dropdown-item" href="#">Anime</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Evangelion</a>
                          <a class="dropdown-item" href="#">Gundam</a>
                      </div>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="bandai.html">Bandai <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="hasbro.html">Hasbro</a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="other.html">Other</a>
                  </li>
              </ul>
          </div>
      </nav>
  </div>
    <hr>

    <div class="container" id="card">
    <div class="row">
        <div class="col-md-8">
        <div class="card p-4" id="cards">
            <h5 class="text-dark">Cart (2 Items)</h5>

            <div class="row mt-4">
                <div class="col-md-3">
                  <div class="overlay"> 
                    <img src="image/eva13a.jpg" class="zoom-in figure-img img-fluid">
                   </div>

                </div>

                <div class="col-md-7">
                    <h5 class="text-muted pt-2">Evangelion EVA UNIT 13</h5>
                    <p class="text-uppercase font-weight-light">Model Kit</p>
                    <button class="btn btn-sm text-muted text-uppercase"><i class="fas fa-trash-alt pr-2" onclick="removeItem(this)"></i>REMOVE ITEM</button>
                    &nbsp;
                    <button class="btn btn-sm text-muted text-uppercase"><i class="fas fa-heart pr-2"></i>ADD TO WISHLIST</button>

                </div>

                <div class="col-md-2">
                    <div class="input-group input-group-sm">
                        <div class="input-group-prepend" onclick="add2()">
                          <span class="input-group-text"><i class="fas fa-plus"></i></span>
                        </div>
            
                        <input type="text" class="numberbox2 form-control" value="1">
                        <div class="input-group-append" onclick="subtract2()">
                            <span class="input-group-text"><i class="fas fa-minus"></i></span>
                        </div>
                      </div>
                </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-3">
                <div class="overlay"> 
                  <img src="image/gundamjustice.jpg" class="zoom-in figure-img img-fluid">
                 </div>

              </div>

              <div class="col-md-7">
                  <h5 class="text-muted pt-2">Gundam Metal Build Justice Gundam</h5>
                  <p class="text-uppercase font-weight-light">Model Kit</p>
                  <button class="btn btn-sm text-muted text-uppercase" onclick="removeItem(this)"><i class="fas fa-trash-alt pr-2"></i>REMOVE ITEM</button>
                  &nbsp;
                  <button class="btn btn-sm text-muted text-uppercase"><i class="fas fa-heart pr-2"></i>ADD TO WISHLIST</button>

              </div>

              <div class="col-md-2">
                  <div class="input-group input-group-sm">
                      <div class="input-group-prepend" onclick="add3()">
                        <span class="input-group-text"><i class="fas fa-plus"></i></span>
                      </div>
          
                      <input type="text" class="numberbox3 form-control" value="1">
                      <div class="input-group-append" onclick="subtract3()">
                          <span class="input-group-text"><i class="fas fa-minus"></i></span>
                      </div>
                    </div>
              </div>
          </div>
        </div>
        </div>

        <div class="col-md-4">
        <div class="card p-3" id="card-cost">
          <h5 class="text-primary pl-2">Total Amount</h5>
          <table class="table table-borderless pt-2">
           
            <tbody>
              <tr>
                <th scope="row" class="font-weight-light">Product Amount</th>
                <td>$179.00</td>
              </tr>
              <tr>
                <th scope="row" class="font-weight-light">Shipping</th>
                <td>$100.00</td>
              </tr>
            </tbody>
          </table>
          <hr>
          <h6 class="pl-2 pt-1">Total Price <span class="float-right">$279.00</span></h6>
          <hr>
          <button class="btn btn-primary mt-2"><a href="checkout.html" class="text-white"><i class="fas fa-shopping-bag pr-2"></i>Proceed to Checkout</a></button>
        </div>
        </div>

    </div>
    <div class="row mt-5 mb-5">
      <div class="col-md-8">
        <div class="card p-3">
          <h5 class="text-dark">Expected shipping delivery</h5>
          <p class="text-muted">Thu., 12.03. - Mon., 16.03.</p>
        
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8">
        <div class="card p-3">
          <h5 class="text-dark">We Accept</h5>
         <div class="text-wrap mt-3">
          <i class="fab fa-cc-visa fa-3x pr-2 text-dark"></i>
          <i class="fab fa-cc-amex fa-3x pr-2 text-dark"></i>
          <i class="fab fa-cc-mastercard fa-3x pr-2 text-dark"></i>
          <i class="fab fa-cc-paypal fa-3x pr-2 text-dark"></i>
        </div>
        </div>
      </div>
    </div>
</body>