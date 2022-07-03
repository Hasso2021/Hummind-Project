<?php
include_once 'connection.php';


$id = $_GET['editid'];
$sql = "SELECT * FROM tmember WHERE ID ='$id'";
$result =  mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$fname = $row['nom'];
$lname = $row['prenom'];
$email = $row['email'];
$pwd =$row['pwd'];
$conPwd =$row['conPwd'];
$usertype = $row['usertype'];



if(isset($_POST['submit'])){
    include_once 'connection.php';
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = trim($_POST['email']);
    $pwd = trim($_POST['pwd']);
    $conPwd = trim($_POST['conPwd']);
    $usertype = $_POST['usertype'];

     $sql ="UPDATE `tmember` SET `ID`=$id,`nom`='$fname',`prenom`='$lname',`email`='$email',`pwd`='$pwd',`conPwd`='$conPwd',`usertype`='$usertype' WHERE ID=$id";

     $result =  mysqli_query($conn, $sql);

     if($result){
            header("Location: crud.php");
        }else{
            echo "data not stored";
        }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title></title>
  </head>
  <body>
   <div class="container">
   <form method = "POST" >
   <div class="mb-3">
    <label>NOM</label>
    <input type="text"  class= "form-control" name= "fname" value = "<?php echo $fname;  ?>">
   </div> 
   <div class="mb-3">
    <label>PRENOM</label>
    <input type="text"  class= "form-control" name= "lname" value = "<?php echo $lname;  ?>">
   </div> 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">EMAIL</label>
    <input type="email" class="form-control" name="email" value = "<?php echo $email;  ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pwd" value = "<?php echo $pwd;  ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword2" name="conPwd" value = "<?php echo $conPwd;  ?>">
  </div>
  <div class="mb-3">
    <label>USERTYPE</label>
    <input type="text"  class= "form-control" name= "usertype" value = "<?php echo $usertype;  ?>">
   </div>
  
  <button type="submit" class="btn btn-success" name= "submit">UPDATE</button>
  <a href="crud.php"><button type="button" class="btn btn-danger" >Close</button></a>

</form>

   </div>
  </body>
</html>




































