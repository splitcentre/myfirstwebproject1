<?php
$host='localhost';
$username='root';
$password='';
$database='ecom';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die('Failed to connect to the database: ' . mysqli_connect_error());
}

?>