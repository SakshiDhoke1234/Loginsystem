<?php
session_start();

if(!isset($_SESSION) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<body>
    <h1 style="text-align: center; text-shadow: 2px 2px red; font-size: 100px;">WELCOME <br> TO MY <br>PAGE</h1>
</body>

</html>