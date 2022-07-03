<?php
$servername = "127.0.0.1"; // server name
$username = "username";  // db username
$password = "Hello123";   // need to hash the pwd for security reason 
$db = "mydb";
// create connection
$conn = mysqli_connect($servername, $username, $password, $db);
if($conn===false){
    die("connection error");
}
    // mysqli_select_db($conn, "mydb") or die(mysqli-error($conn));