<?php
session_start();
if(!isset($_SESSION["adminname"])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD OPERATIONS</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <!-- Container -->
    <div class="container">
        <div class="alert alert-primary" role="alert">
            <h4 class = "text-primary text-center"> CRUD TABLE</h4>
        </div>
        <div class="alert alert-success text-center message" role="alert">

        </div>
        <?php 
        include_once 'profile.php';
        include_once 'form.php';
       
        ?>
        <div class="row mb-3">
            <div class="col-3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#userModal" id="addnewbtn" >Add User 
                    <i class="fa fa-user-circle-o"></i>
            </button>
            </div>
            <!-- search bar-->
            <div class="col-7">
                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                    <button class="btn btn-success" type="submit" name= "search">Search</button>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Search..." id="searchinput">
                </div>
            </div>
            
        </div>
        <?php
        include_once 'userTable.php';
        ?>
        <nav id ="pagination">

        </nav>
        <input type="hidden" name="currentpage" id="currentpage" value="1">
       
        
    </div> <!--End of Container -->
    <div>
        <!-- JS, Popper.js, and jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </div>
    <div id="overlay" style = "display:none;">
       <div class="spinner-border text-danger" style="width: 3rem; height: 3rem;"></div>
    </div>
    <br>
    <div>
        <a href="logout.php"> Logout </a>
    </div>
</body>
</html>