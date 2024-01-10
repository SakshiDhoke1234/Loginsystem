<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // include 'dbconnection.php';
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "login";

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    die().mysqli_connect_error();
}
    if($name != "" && $pass != "" && $cpass != ""){
        $existsql = "select * from sign_up where username = '$name'";
        $result1 = mysqli_query($conn, $existsql);
        $rownum = mysqli_num_rows($result1);

        if($rownum > 0){
            $exists = true;
            echo '<p style="font-weight: bold; margin-left: 43%; display: inline-block ;padding: 10px;">Username already exist </p>';
        }
        else{
            $exists = false;

            if($pass == $cpass){
    
                $sql = "INSERT INTO `sign_up`(`username`, `password`) VALUES ('$name', '$pass')";
                $result = mysqli_query($conn, $sql);
            
                if(!$result){
                   die().mysqli_connect_error();
                }
                else{
                   echo '<p style="font-weight: bold; margin-left: 38%; display: inline-block ;padding: 10px;">Succesfully Registered <a href="login.php">Click here to login</a> </p>';
                }
            }
            else{
                echo '<p style="font-weight: bold; margin-left: 42%; display: inline-block ;padding: 10px;">Password does not match </p>';
            }
    }
    }
    else{
        echo '<p style="font-weight: bold; margin-left: 42%; display: inline-block ;padding: 10px;">Please enter required data </p>';
    }
    
}

?>