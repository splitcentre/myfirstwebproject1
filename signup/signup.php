<?php

if (empty($_POST["user_name"])) {
    die("Name Is Empty");
}
if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

$password = password_hash($password, PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "../database.php";
 

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

    header("Location: ../login.php");
    exit;
    
} else {
    
    if ($mysqli->errno === 1062) {
        die("email already taken");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}
?>