<?php
require_once 'connection.php';
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // get the values passed from form index.php;
    
     $username = $_POST['username'];
     $pwd= $_POST['pwd'];
    

    // to prevent mysql injection(prevent to give other info other than one given in the database)
   
    $username = stripcslashes($username);
    $pwd = stripcslashes($pwd);
     
    $username = mysqli_real_escape_string($conn, $username);
    $pwd = mysqli_real_escape_string($conn, $pwd);

    $sql = "SELECT * From tmember WHERE username= '$username' AND pwd = '$pwd'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_fetch_array($result); 

    if($num["username"] == $username){
        $_SESSION["username"]=$username;
        header("Location: userPage.php");
    }else{
        echo "invalide username or password";
    }
}

 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login Page</title>
    <link rel ="stylesheet" href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel = "stylesheet" href = "css/adminLogin.css"></link>
    <img src="https://cdn.hipwallpaper.com/i/84/22/ljrBvi.jpg" alt="">
    <script>
        
        
    </script>
</head>
<body>

     <form name= "login" method = "post"  action="#">
         <div class="login-box">
             <h1>Login Page</h1>
             <div class="textbox">
                 <i class = " fa fa-user" aria-hidden="true"></i>
                 <input type="text" placeholder= "username" name = "userlname" required> 
             </div>
             <div class="textbox">
             <i class = " fa fa-lock" aria-hidden="false"></i>
             <input type="password" placeholder="password" name = "userPwd" required>
             </div>
             <input class="button" type = "submit" name = "submit" value = "Login">
             
            <div class="text-center">Don't have an account? <a href="registration.php">Register Here</a></div>

        </div>



     </form>
</body>
</html>

