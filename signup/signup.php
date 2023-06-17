<?php

if (empty($_POST["user_name"])) {
    die("Name Is Empty");
}
if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 characters");
}

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
}

if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain at least one number");
}
if ($_POST["password"] !== $_POST["password_confirmation"]) {
    die("Passwords must match");
}


$mysqli = require __DIR__ . "/database.php";
 

$sql = "INSERT INTO user (id_user, user_name,password, email) VALUES (?,?,?,?)";

$stmt=$mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$id_user = (int) rand(1000, 9999);

$stmt->bind_param("isss",
                  $id_user,
                  $_POST["user_name"],
                  $_POST["password"],
                  $_POST["email"]);

                  
if ($stmt->execute()) {

    header("Location: login.php");
    exit;
    
} else {
    
    if ($mysqli->errno === 1062) {
        die("email already taken");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}
?>
