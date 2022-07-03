
<?php
$showAlert = false;
$showError = false;
$exists = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include_once 'connection.php';
    // get the values passed from form index.php;
     $uid = $_POST['uid'];
     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $email = $_POST['email'];
     $username = $_POST['username'];
     $pwd= $_POST['pwd'];
     $conPwd= $_POST['conPwd'];
     $usertype = $_POST['usertype'];


    // to prevent mysql injection(prevent to give other info other than one given in the database)
    $fname = stripcslashes($fname); 
    $lname = stripcslashes($lname);
    $email = stripcslashes($email);
    $username = stripcslashes($username);
    $pwd = stripcslashes($pwd);
    $conPwd = stripcslashes($conPwd);
     

    $fname = mysqli_real_escape_string($conn, $fname);
    $lname = mysqli_real_escape_string($conn, $lname);
    $email = mysqli_real_escape_string($conn, $email);
    $username = mysqli_real_escape_string($conn, $username);
    $pwd = mysqli_real_escape_string($conn, $pwd);
    $conPwd = mysqli_real_escape_string($conn, $conPwd);

    $sql = "SELECT * From tmember WHERE nom= '$username' AND pwd = '$pwd'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
     // This sql query is use to check if
    // the username is already present 
    // or not in our Database
   
    if($num==0){
        if(($pwd == $conPwd)  && $exists==false){

            $hash = password_hash($pwd, PASSWORD_DEFAULT);
            $hash2 = password_hash($conPwd, PASSWORD_DEFAULT);

            // Password Hashing is used here. 
            $sql = "INSERT INTO tmember(nom, prenom, email,username, pwd, conPwd, usertype) VALUES ('$lname', '$fname', '$email','$username', '$hash','$hash2', '$usertype')";
            $result = mysqli_query($conn, $sql);


           if($result){
            $showAlert = true; 
           }
        }else{
            $showError = "Passwords do not match"; 
        }
    }
    if($num>0){
        $exists="Username not available"; 
    }
}
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel ="stylesheet" href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></link>
    <link rel = "stylesheet" href = "css/adminLogin.css"></link>
    <img src="https://cdn.hipwallpaper.com/i/84/22/ljrBvi.jpg" alt="">
    
</head>
<body>
    <?php
    if($showAlert){
        echo '
        <div class="alert alert-success alert-dismissible fade show" role = "alert">
        <strong>Success!</strong> Your account is now created and you can logiin.
        <button type="button" class="close"
        data-dismiss="alert" aria-label="Close"> 
        <span aria-hidden="true">×</span> 
        </button>
        </div>';
    }
    if($showError){
        echo '
        <div class="alert alert-danger alert-dismissible fade show" role = "alert">
        <strong>Error!</strong>'.$showError.'
        <button type="button" class="close"
        data-dismiss="alert" aria-label="Close"> 
        <span aria-hidden="true">×</span> 
        </button>
        </div>';
    }
    if($exists){
        echo '
        <div class="alert alert-danger alert-dismissible fade show" role = "alert">
        <strong>Error!</strong>'.$exists.'
        <button type="button" class="close"
        data-dismiss="alert" aria-label="Close"> 
        <span aria-hidden="true">×</span> 
        </button>
        </div>';
    }
    
    ?>
<form name= "" method = "post"  action="loginPage.php">.
         <div class="login-box">
             <h1>REGISTRATION</h1>
             
             <div class="textbox">
                 <i class = " fa fa-user" aria-hidden="true"></i>
                 <input type="text" placeholder= "First Name" name = "fname" required> 
             </div>
             <div class="textbox">
                 <i class = " fa fa-user" aria-hidden="true"></i>
                 <input type="text" placeholder= "Last Name" name = "lname" required> 
             </div>
             <div class="textbox">
                 <i class = " fa fa-envelope-o" aria-hidden="true"></i>
                 <input type="email" placeholder= "email" name = "email" required> 
             </div>
             <div class="textbox">
                 <i class = " fa fa-user" aria-hidden="true"></i>
                 <input type="text" placeholder= "Username" name = "username" required> 
             </div>
             <div class="textbox">
             <i class = " fa fa-lock" aria-hidden="false"></i>
             <input type="password" placeholder="password" name = "pwd" required>
             </div>
             <div class="textbox">
             <i class = " fa fa-lock" aria-hidden="false"></i>
             <input type="password" placeholder="confirm password" name = "conPwd" required>
             </div>
             <div class="textbox">
                 <i class = " fa fa-user" aria-hidden="true"></i>
                 <input type="text" placeholder= "User Type" name = "usertype" required> 
             </div>
             <input class="button" type = "submit" name = "register" value = "Register"><br>
             <div class="text-center">Already have an account? <a href="loginPage.php">Sign in</a></div>

             
         </div>    


     </form> 










































































































     
     <!-- Optional JavaScript --> 
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
<script src="
https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="
sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous">
</script>
    
<script src="
https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity=
"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
    crossorigin="anonymous">
</script>
    
<script src="
https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" 
    integrity=
"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous">
</script>

</body>

</html>
















































































































