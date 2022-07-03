<?php
if(isset($_POST['addButton'])){
        include_once 'connection.php';
        $uid = $_POST['uid'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = ($_POST['email']);
        $username = ($_POST['username']);
        $pwd = trim($_POST['pwd']);
        $ConPwd = trim($_POST['conPwd']);
        $usertype = $_POST['usertype'];

        $hash = password_hash($pwd, PASSWORD_DEFAULT);
        $hash2 = password_hash($conPwd, PASSWORD_DEFAULT);
    
        //$sql = "SELECT * FROM tmembers";
         $sql = "INSERT INTO tmember(ID, nom, prenom, email,username, pwd, ConPwd, usertype) VALUES ('$uid', '$fname', '$lname', '$email','$username', '$hash','$hash2', '$usertype')";

         $result =  mysqli_query($conn, $sql);

         if($result){
                header("Location: crud.php");
            }else{
                echo "data not stored";
            }
}
        
         





























