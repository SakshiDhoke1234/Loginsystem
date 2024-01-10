
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        nav{
           height: 50px;
            
        }
        nav li {
            display: inline-block;
            margin-right: 40px;
            margin-top: 10px;
        }
        nav li a{
            text-decoration: none;
            font-size: larger;
            color: black;
        }
        div{
            /* border: 1px solid black; */
            /* display: flex; */
            margin-top: 6%;
        }
        img{
            border: 2px;
            border-style: solid solid solid none;
            width: 300px;
            border-bottom-right-radius: 10px;
            border-top-right-radius: 10px;
            height: 350px;
        }
        body{
            background-image: url('https://images.unsplash.com/photo-1490735891913-40897cdaafd1?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NzN8fHNreXxlbnwwfHwwfHx8MA%3D%3D');
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;

        }
        form{
            border: 2px;
            border-style: solid;
            margin-top: 1%;
             margin-left: 35%;
            padding: 20px;
            width: 25%;
            height: 500px;
            background-color: white;
            border-radius: 10px;
        }
       #name, #pass{
           border: 1px solid black;
           margin-left: 75px;
           margin-bottom: 20px;
           border-radius: 5px;
           margin-top: 5px;
           height: 30px;
           width: 60%;
        }
        #Login{
            background-image: url('https://images.unsplash.com/photo-1490735891913-40897cdaafd1?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NzN8fHNreXxlbnwwfHwwfHx8MA%3D%3D');
            margin: 5px 0px 20px 130px;
            
            border: 1px solid black;
            border-radius: 10px;
            padding: 10px;
            width: 30%;
        }
        #Login:hover{
            font-weight: bold;
        }
        #heading{
            margin-top: 80px;
            font-weight: bold;
            font-size: larger;
            text-align: center;
        }
        #new{
            margin-top: 80px;
            font-weight: bold;
            font-size: large;
            text-align: center;
        }
        a{
            margin-left: 32%;
            text-align: center;
        }
    </style>
</head>
<body>
    <div>
        <form action="" method="post">
            <p id="heading">LOGIN</p>
            <input type="text" name="name" id="name" placeholder="Username">
            <input type="password" name="pass" id="pass" placeholder="Password">
            <input type="submit" value="Login" id="Login">
            <p id="new">New Here?</p>
            <a href="signup.php">Create your account</a>
            
        </form>
        <!-- <img src="https://static.vecteezy.com/system/resources/previews/002/274/676/non_2x/woman-working-on-laptop-freelance-remote-working-online-studying-work-from-home-illustration-vector.jpg" alt=""> -->
    </div>
    
</body>
</html>

<?php
$login = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'dbconnection.php';
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    // $cpass = $_POST['cpass'];

    $sql = "select * from sign_up where username = '$name' AND password = '$pass'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
        $login = true; 
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $name;

        header("location: welcome.php");
    }
    else{
        // echo "Invalid!!";
    } 

    if($login){
        echo '<p  style="font-weight: bold; margin-left: 35%; width: 25%; text-align:centre; display: inline-block ;padding: 10px;">You are logged in!! "</p>';
    }
    else{
        echo '<p style="font-weight: bold; margin-left: 42%; width: 25%; text-align:centre; display: inline-block; padding: 10px;">Invalid Username or Password </p>';    
    }
}

?>



