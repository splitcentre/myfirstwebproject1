<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
  <div class="container mt-4" id="top-logo">
    <div class="row">
        <div class="col-md-2" style="right: 5%;">
<nav class="navbar navbar-light">
    <a class="navbar-brand" href="../index.php">
      <img src="../image/insignia.png"  width="30" height="30" alt="">
      
    </a>
  </nav>
    </div>
</div>
<hr>

    
    
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="col-md-4 d-block mx-auto mt-2 mb-3" id="join">
        <h4 class="pb-4">Create An Account</h4>

        <form action="signup.php" method="post">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Name" name="user_name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" name="password_confirmation">
          </div>
          <br>
          <button type="submit" class="btn btn-primary btn-sm"><a class="text-light">Register</a></button>
          <a href="../login.php" class="float-right text-primary">Already a Member? Login</a>
        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>