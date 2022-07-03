<!-- 
    *This code is to fetch the data from mysql db and store it into an HTML table
    * using PHP and Mysqli to interact with the database.
 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <!--
 <center>
    <form action="searchUser.php" method = "POST">   
            <input type="text" name= "id" placeholder="Search User" />
            <input type="submit" name= "search" />
    </form> 
</center>  -->   
<br>
<br> 
    <!-- table Start-->
    <table class="table" id="userstable">
        <!-- Table Head Start -->
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOM</th>
                <th scope="col">PRENOM</th>
                <th scope="col">EMAIL</th>
                <th scope="col">Username</th>
                <th scope="col">PASSWORD</th>
                <th scope="col">CONFIRM PASSWORD</th>
                <th scope="col">User Type</th>
                <th scope="col">ACTION</th>
            </tr>
        </thead> <!-- Table Head End -->

        <!-- Table body Start -->
        <tbody>
            
            <?php
            // databse connection
            include_once 'connection.php';
            include_once 'crud.php';
            include_once 'form.php';
           // include_once 'crud.php';

            // sql statement to select all rows in the db
            $sql = "SELECT * From  tmember";

            // run a mysql query from the above statement
            $result = mysqli_query($conn, $sql);

            //check if the query is successfull
            $resultCheck = mysqli_num_rows($result);
            
           // this will execute if resultCheck is succefull
            if($resultCheck>0){
                while($row =mysqli_fetch_assoc($result)){ // fetch data from each row of the db and print on a table 
                      $id = $row['ID'];
                    echo "<tr><td>".$row["ID"]."</td><td>".$row["nom"]."</td><td>".$row["prenom"]."</td><td>".$row["email"]."</td><td>".$row["username"]."</td><td>".$row["pwd"]."</td><td>".$row["conPwd"]."</td><td>".$row["usertype"]."</td><td>"
                    .$row["action"]."<a href='profile.php? profileid= ".$id."'><button type='button'>Profile</button></a>"
                    .$row["action"]."<a  href= 'edit.php? editid= ".$id."'  class='btn btn-warning mr-3 edituser' title='UPDATE'><i class='fa fa-pencil-square-o fa-lg'></i></a>"
                    .$row["action"]."<a  href='deleteUser.php? deleteid= ".$id."' class='btn btn-danger deleteuser' title='Delete'><i class='fa fa-trash-o fa-lg'></i></a>"."</td></tr>";
                    
                }
            }else{
                echo "no result";
            }
          
                
            // close the connection
            //$conn->close();
            ?>
        </tbody>  <!-- Table body End -->

        
    </table>
    <!-- table End-->
</body>
</html>