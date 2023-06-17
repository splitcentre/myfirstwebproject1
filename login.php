<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: index.php");
            exit;
        }
    }
    
    $is_invalid = true;
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
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<div class="container mt-4" id="top-logo">
  <div class="row">
      <div class="col-md-2" style="right: 5%;">
<nav class="navbar navbar-light">
  <a class="navbar-brand" href="index.html">
    <img src="image/insignia.png"  width="30" height="30" alt="">
    
  </a>
</nav>
  </div>
</div>
<hr>
  
    
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4 d-block mx-auto mt-2 mb-3" id="join">
                    <h4 class="pb-4">Login</h4>
                    <?php if ($is_invalid): ?>
        <em>Invalid login</em>
    <?php endif; ?>
                    <form method="post">
                        <div class="form-group">
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email"value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
                        </div>
                        <div class="form-group">
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                        </div>
                       <br>
                        <button type="submit" class="btn btn-primary btn-sm text-light"><a href="profile.html" class="text-light">Login</a></button>
                        <a href="register.html" class="float-right text-primary">Not a Member? Register</a>
                      </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>