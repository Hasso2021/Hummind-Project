<?php
   define('DB_SERVER', '127.0.0.1');
   define('DB_USERNAME', 'hassu');
   define('DB_PASSWORD', 'Hello123');
   define('DB_DATABASE', 'mydb');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   if (!$db) {
      die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
?>