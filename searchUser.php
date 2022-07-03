<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEARCH USER</title>
</head>
<body>

    <!-- table Start-->
    <table class="table" id="userstable">
        <!-- Table Head Start -->
    
            <tr>
                <th >ID</th>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>EMAIL</th>
                <th>PASSWORD</th>
                <th>User Type</th>
                <th >ACTION</th>
            </tr> <br>

            
            <?php
            // databse connection
            include_once 'connection.php';
            include_once 'crud.php';
           // include_once 'crud.php';


            if(isset($_POST['search'])){
                
                $id = $_POST['id'];
                 //$fname = $_POST['fname'];
                //$lname = $_POST['lname']; 
               //$email = trim($_POST['email']);



                $query= "SELECT * FROM tmember WHERE ID ='$id'  ";
                $query_run = mysqli_query($conn, $query);

                //check if the query is successfull
                $queryCheck = mysqli_num_rows($query_run);
            
            // this will execute if resultCheck is succefull
            if($queryCheck>0){
                 while($row =mysqli_fetch_assoc($query_run)){ // fetch data from each row of the db and print on a table 
                     echo "<tr><td>".$row["ID"]."</td><td>".$row["nom"]."</td><td>".$row["prenom"]."</td><td>".$row["email"]."</td><td>".$row["pwd"]."</td><td>".$row["usertype"]."</td><td>"
                    .$row["action"]."<a href='profile.php'><button type='button'>Profle</button></a>"
                    .$row["action"]."<a href='edit.php'><button type='button'>Edit</button></a>"
                    .$row["action"]."<a class='btn btn-danger deleteuser' data-userid='14' title='Delete'><i class='fa fa-trash-o fa-lg'></i></a>"."</td></tr>";
                    
            
                    }
            }        
        }    
            // close the connection
            //$conn->close();
            ?>


        
    </table>
    <!-- table End-->
</body>
</html>