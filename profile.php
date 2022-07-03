<?php
            // databse connection
            include_once 'connection.php';
            //include_once 'crud.php';
           // include_once 'crud.php';

            // sql statement to select all rows in the db
            $sql = "SELECT * From  tmember";

            // run a mysql query from the above statement
            $result = mysqli_query($conn, $sql);

          //fetch data from each row of the db and print on a table 
          $row =mysqli_fetch_assoc($result)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/adminLogin.css">
</head>
<body>
    
<div class="modal fade" id =" userViewModal" tabindex = -1 role = "dialog" aria-labelledby = "userViewModalLabel"
    aria-hidden= "true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class = "modal-tile" id="exampleModalLabel">Profile<i class="fa fa-user-circle-o"aria-hidden="true"></i></h5>
            </div>
        </div>
        <div class="modal-body">
            <div class="conainer" id="profile">
                <form>
                    <label for="recipient-nom" class="col-form-label">NOM:</label><br>
                    <?php 
                    echo $row['nom']
                    ?>
                    <br><br>
                    <label for="recipient-nom" class="col-form-label">PRENOM:</label><br>
                    <?php 
                    echo $row['prenom']
                    ?>
                    <br><br>
                    <label for="recipient-nom" class="col-form-label">email:</label><br>
                    <?php 
                    echo $row['email']
                    ?>
                    <br><br>
                    <label for="recipient-nom" class="col-form-label">User Type:</label><br>
                    <?php 
                    echo $row['usertype']
                    ?>
 
                </form>


            
            </div>
        </div>
        <br>
        <br>
        <div class="modal-footer">
        <a href="crud.php"> <button type ="button" class="btn btn-secondary" data-dismiss="modal">Close</button></a>
        </div>
    </div>
</div>
</body>
</html>
