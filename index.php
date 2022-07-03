<?php
require_once 'connection.php';
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // get the values passed from form index.php;
    $adminname = $_POST['adminname'];
    $password = $_POST['password'];

    // to prevent mysql injection(prevent to give other info other than one given in the database)
    $adminname = stripcslashes($adminname);
    $password = stripcslashes($password);
    $adminname = mysqli_real_escape_string($conn, $adminname);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "SELECT * From adminlogin WHERE adminname= '$adminname' AND pwd = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    if($row["adminname"] == $adminname){
        $_SESSION["adminname"]=$adminname;
        header("Location: crud.php");
    }else{
        echo "invalide admin name or password";
    }
}

 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
    <link rel ="stylesheet" href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel = "stylesheet" href = "css/adminLogin.css"></link>
    <img src="https://cdn.hipwallpaper.com/i/84/22/ljrBvi.jpg" alt="">
    <script>
        
        
    </script>
</head>
<body>

     <form name= "login" method = "post"  action="#">
         <div class="login-box">
             <h1>Login Form</h1>
             <div class="textbox">
                 <i class = " fa fa-user" aria-hidden="true"></i>
                 <input type="text" placeholder= "Adminname" name = "adminname" required> 
             </div>
             <div class="textbox">
             <i class = " fa fa-lock" aria-hidden="false"></i>
             <input type="password" placeholder="password" name = "password" required>
             </div>
             <input class="button" type = "submit" name = "submit" value = "Login">
         </div>

     </form>
</body>
</html>

