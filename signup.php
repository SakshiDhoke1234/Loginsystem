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
            display: flex;
            margin-top: 10%;
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
            border-style: solid none solid solid;
            border-bottom-left-radius: 10px;
            border-top-left-radius: 10px;
             margin-left: 26%;
            
            padding: 20px;
            width: 25%;
            background-color: white;
        }
       #name, #pass, #cpass{
           border: 1px solid black;
           margin-left: 80px;
           margin-bottom: 20px;
           border-radius: 5px;
           margin-top: 5px;
           height: 30px;
           width: 60%;
        }
        #signup{
            margin: 5px 0px 20px 155px;
            border: 1px solid black;
            border-radius: 3px;
            padding: 10px;
            width: 20%;
        }
        #signhead{
            font-weight: bold;
            font-size: larger;
            text-align: center;
        }
    </style>
</head>
<body>
    <div>
        <form action="" method="post">
            <p id="signhead" >Signup</p>
            <input type="text" name="name" id="name" placeholder="Username">
            <input type="password" name="pass" id="pass" placeholder="Password">
            <input type="password" name="cpass" id="cpass" placeholder="Confirm Password">
            <input type="submit" value="Sign Up" id="signup">
        </form>
        <img src="https://static.vecteezy.com/system/resources/previews/002/274/676/non_2x/woman-working-on-laptop-freelance-remote-working-online-studying-work-from-home-illustration-vector.jpg" alt="">
    </div>
</body>
</html>
<?php require 'signupdata.php'?>