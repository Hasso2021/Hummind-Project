<!-- 
   *this code is to create a list of instruction for users to choose their choices by tivking boxes 
 -->
 <?php
 session_start();
if(!isset($_SESSION["username"])){
    header("Location: loginPage.php");
}
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
    <!-- table Start-->
    <table class="table" id="userstable">
        <!-- Table Head Start -->
        <thead>

            <tr>
                <th scope="col">Instruction</th>
                <th scope="col">A</th>
                <th scope="col">B</th>
                <th scope="col">C</th>
                <th scope="col">D</th>
                <th scope="col">Action</th>
                
            </tr>
        </thead> <!-- Table Head End -->

        <!-- Table body Start -->
        <tbody>
            
            <?php
            // databse connection
            include_once 'connection.php';
            //include_once 'crud.php';
            //include_once 'form.php';
           // include_once 'crud.php';

            // sql statement to select all rows in the db
            $sql = "SELECT * From  userTable";

            // run a mysql query from the above statement
            $result = mysqli_query($conn, $sql);

            //check if the query is successfull
            $resultCheck = mysqli_num_rows($result);
            
           // this will execute if resultCheck is succefull
           if($resultCheck>0){
            while($row =mysqli_fetch_assoc($result)){ // fetch data from each row of the db and print on a table 
        
            echo "<tr><td content-editable= 'true'>".$row["Instruction"]
            ."</td><td>"."<input class='form-check-input' type='checkbox' value='' id='flexCheckIndeterminate'>"
            ."</td><td>"."<input class='form-check-input' type='checkbox' value='' id='flexCheckIndeterminate'>"
            ."</td><td>"."<input class='form-check-input' type='checkbox' value='' id='flexCheckIndeterminate'>"
            ."</td><td>"."<input class='form-check-input' type='checkbox' value='' id='flexCheckIndeterminate'>"
            ."</td></tr>";
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
    <br>
    <br>
    <div>
        <a href="loginPage.php"> Logout </a>
    </div>

    <br>
    <br>
    <div>
        <a href="loginPage.php"> Logout </a>
    </div>
</body>
</html>