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
    <script src="script.js" defer></script>
    <title>Toys Store</title>
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

<div class="container mt-5 mb-5" id="productPage">
    <div class="row">
        <div class="col-md-5">
        <div class="card">
           <img src="image/eva13a.jpg" class="figure-img img-fluid rounded">
          
        </div>
        </div>

        <div class="col-md-7">
        <h5>Evangelion EVA UNIT 13</h5>
        <p class="text-muted">Model Kit</p>
        <div class="ratings">
            <i class="fas fa-star text-primary"></i>
            <i class="fas fa-star text-primary"></i>
            <i class="fas fa-star text-primary"></i>
            <i class="fas fa-star text-primary"></i>
            <i class="far fa-star text-primary"></i>

          </div>
          <h5 class="pt-4">Rp1.790.000</h5>
          <p class="description text-muted">From Evangelion: 3.0 You Can (Not) Redo, part of the Rebuild of Evangelion film series, the EVA Unit-13 model kit is made with over 400 pieces and will contain 60 points of articulation once complete.

            7.48 inches (19cm) not including the length of the weapons
            Made of plastic
            From Evangelion: 3.0 You Can (Not) Redo
            60 Points of articulation
            Display in 2 or 4 armed modes
            Box Contents
            Pieces to build
            EVA Unit-13
            14 Hand parts
            4 RS Hoppers
            2 Weapons
            4 Effect pieces</p>
         <hr>
          <table class="table mt-2">
           
            <tbody>
              <tr>
                <th scope="row">Product</th>
                <td>Model Kit</td>
              </tr>
              <tr>
                <th scope="row">Color</th>
                <td>Purple</td>
              </tr>
            </tbody>
          </table>
          <hr>
        
          <div class="row">
            <div class="col-md-4">
             <div class="input-group">
                      <div class="input-group-prepend" onclick="add1()">
                        <span class="input-group-text"><i class="fas fa-plus"></i></span>
                      </div>
          
                      <input type="text" class="numberbox1 form-control" value="0">
                      <div class="input-group-append" onclick="subtract1()">
                          <span class="input-group-text"><i class="fas fa-minus"></i></span>
                      </div>
                    </div>
            </div>
          
            
          </div>
          <form method="POST" action="cart.php">
            <input type="hidden" name="itemName" value="Evangelion EVA UNIT 13 Model Kit">
            <button type="submit" class="btn btn-sm btn-primary"><a class="text-white" href="cart.php">Buy Now</a></button>
        </form>
        </div>
        </div>
        <br><br>
        <hr>
        <br>
        <h4 class="text-center text-muted">Related products</h4>
        <br><br>
        <div class="row" id="relatedProducts">
        <div class="col-md-3">
          <div class="overlay"> 
            <img src="image/eva13.jpg" class="zoom-in figure-img img-fluid">
           </div>
          
          <h5 class="text-center text-dark mt-3">Evangelion EVA UNIT 13</h5>
          <p class="cost text-center text-dark mt-2">Rp1.790.000</p>
        </div>
        <div class="col-md-3">
          <div class="overlay"> 
            <img src="image/gundam.jpg" class="zoom-in figure-img img-fluid">
           </div>
          
          <h5 class="text-center text-dark mt-3">Gundam Metal Build Justice Gundam
        </h5>
          <p class="cost text-center text-dark mt-2">Rp1.500.000</p>
        </div>
        <div class="col-md-3">
          <span class="badge badge-pill badge-primary" id="sale">Sale</span>
          <div class="overlay"> 
            <img src="image/Meteor04.jpg" class="zoom-in figure-img img-fluid">
           </div>

          <h5 class="text-center text-dark mt-3">MTRM-EX11 Meteor
            </h5>
          <p class="cost text-center text-danger mt-2">Rp1.500.000 <strike class="text-secondary"> Rp2.300.000 </strike></p>
        </div>
        </div>
        </div>
        <br>
        <br>
        <br>
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