<?php
session_start();
include("connection.php");
include("functions.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $user_name = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(!empty($user_name) && !empty($password) && !empty($email))
    {
    //save to database
    // $user_id = random_num(20);
    $query = "insert into login (userid,username,email,password) values ('id','$user_name','$email','$password')";
    mysqli_query($con, $query);
    header("Location: login.php");
    die;
    }
    else
    {
        echo("Please enter some valid information");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<style>
@import url('https://fonts.googleapis.com.css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins'sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #23242a;
}

.box {
    position: relative;
    width: 380px;
    height: 420px;
    background: #1c1c1c;
    border-radius: 8px;
    overflow: hidden;
}

.box::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 380px;
    height: 420px;
    background: linear-gradient(0deg, transparent, #45f3ff, #45f3ff);
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
}

.box::after {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 380px;
    height: 420px;
    background: linear-gradient(0deg, transparent, #45f3ff, #45f3ff);
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
    animation-delay: -3s;
}

@keyframes animate {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}

.forms {
    position: absolute;
    inset: 2px;
    background: #28292d;
    border-radius: 8px;
    z-index: 10;
    padding: 50px 40px;
    display: flex;
    flex-direction: column;
}

.forms h2 {
    color: #45f3ff;
    font-weight: 500;
    text-align: center;
    letter-spacing: 0.1em;
}

.inputBox {
    position: relative;
    width: 300px;
    margin-top: 35px;
}

.inputBox input {
    position: relative;
    width: 100%;
    padding: 20px 10px 10px;
    background: transparent;
    border: none;
    outline: none;
    color: #23242a;
    font-size: 1em;
    letter-spacing: 0.05em;
    z-index: 1;
}

.inputBox span {
    position: absolute;
    left: 0;
    padding: 20px 0px 10px;
    font-size: 1em;
    color: #8f8f8f;
    pointer-events: none;
    letter-spacing: 0.05em;
    transition: 0.5s;
}

.inputBox input:valid~span,
.inputBox input:valid~span,
.inputBox input:valid~span {
    color: #45f3ff;
    transform: translateX(0px) translateY(-34px);
    font-size: 0.75em;
}

.inputBox i {
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 2px;
    background: #45f3ff;
    border-radius: 4px;
    transition: 0.5s;
    pointer-events: none;
    z-index: none;
}

.inputBox input:valid~i,
.inputBox input:valid~i,
.inputBox input:valid~i {
    height: 44px;
}

.links {
    display: flex;
    justify-content: space-between;
}

.links a {
    margin: 10px 0;
    font-size: 1.2em;
    color: #8f8f8f;
    text-decoration: none;
}

.links a:hover,
.links a:nth-child(2) {
    color: #45f3ff;
}

input[type="submit"] {
    border: none;
    outline: none;
    background: #45f3ff;
    padding: 11px 25px;
    width: 100px;
    margin-top: 10px;
    border-radius: 4px;
    font-weight: 600;
    cursor: pointer;
}

input[type="submit"]:active {
    opacity: 0.8;
}
</style>

<body>
    <div class="box">
        <div class="forms">
            <form action="" method="post">
                <h2>Sign Up</h2>
                <div class="inputBox">
                    <input type="text" name="fullname" id="username" required="required">
                    <span>Username</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="email" name="email" id="email" required="required">
                    <span>Email</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="password" name="password" id="password" required="required">
                    <span>Password</span>
                    <i></i>
                </div>
                <a href="login.php">
                    <input type="submit" value="Sign Up">
                </a>
            </form>
        </div>
    </div>
</body>

</html>