<?php
$insert = false;
if(isset($_POST['name'])){
    Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
  

    // Create a database connection
    $conn= mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$conn){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
     echo "Success connecting to the db";

    // // Collect post variables
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name',
     '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    echo $sql;
    if($con->query($sql) == true){
        echo "Successfully inserted";}
        $insert =true;
    }
    else{
        echo"ERROR" $sql <br> $con->error";
    }
        $con->close();
        
        ?>
