<?php
  include_once 'connection.php';
    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];
        $sql = "DELETE FROM tmember WHERE ID = '$id' ";
        $result =  mysqli_query($conn, $sql);

        if($result){
            header("Location: crud.php");
        
           }else{
               echo "User not deleted";
           }


    }

?>