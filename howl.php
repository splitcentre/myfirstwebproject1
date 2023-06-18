<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script defer src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    
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
            <div class="input-group mt-4">
                <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                </div>
              </div>
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
<ul class="nav justify-content-center">
<li class="nav-item">
<a class="nav-link " href="hasbro.php">Hasbro</a>
</li>
<li class="nav-item">
<a class="nav-link" href="bandai.php">Bandai</a>
</li>
<li class="nav-item">
<a class="nav-link" href="other.html">Other</a>
</li>
</ul>
<hr>

<div class="container mt-5 mb-5" id="productPage">
    <div class="row">
        <div class="col-md-5">
        <div class="card">
           <img src="image/robohowl.jpg" class="figure-img img-fluid rounded">
          
        </div>
        </div>

        <div class="col-md-7">
        <h5>MTRM-EX11 Meteor</h5>
        <p class="text-muted">Figure</p>
        <div class="ratings">
            <i class="fas fa-star text-primary"></i>
            <i class="fas fa-star text-primary"></i>
            <i class="fas fa-star text-primary"></i>
            <i class="fas fa-star text-primary"></i>
            <i class="far fa-star text-primary"></i>

          </div>
          <h5 class="pt-4">Rp1.500.000 <strike class="text-secondary"> Rp2.300.000 </strike></h5>
          <p class="description text-muted">Make Toy's figures take your collection to the next level with MTRM-EX11 Meteor, a Masterpiece Scale-scaled 3rd party figure that transforms from Fighter Jet to robot and back.   

 

            MTRM-EX11 Meteor stands approximately 10.0-inches tall in robot mode and scales to other figures from Make Toys and to other Masterpiece Scale scaled figures.  Make Toy's figures are fully transformable, offer a high attention to detail, and are made of high quality ABS plastic and some even include die-cast parts. 
            
             
            
            Make Toy's Re: Master series brings innovative transformations, new gimmicks and a high degree of articulation all in a Masterpiece Scale-scale to the world of transforming robots.   Each figure in the Maketoys Remaster Toyline has a high level of detail, paint applications and posability.   
            
             </p>
         <hr>
          <table class="table mt-2">
           
            <tbody>
              <tr>
                <th scope="row">Product</th>
                <td>Figure</td>
              </tr>
              <tr>
                <th scope="row">Scale</th>
                <td>Masterpiece Scale</td>
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
          <div id="purchase-btn">
          <button type="button" class="btn btn-sm btn-primary"><a class="text-white" href=""> Buy Now </a></button>
          &nbsp;
          <button type="button" class="btn btn-sm btn-light"><a class="text-black" href=""> <i class="fas fa-shopping-cart pr-2"></i>  Add to Cart </a> </button>
        </div>
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