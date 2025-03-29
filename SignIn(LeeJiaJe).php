<?php 
$hostname = 'localhost';
$user = 'root';
$password = '';
$database = 'rwdd2309leejiaje';

$connection = mysqli_connect(hostname: $hostname, username: $user, password: $password, database: $database);
if ($connection === false) {
    die('Connection failed'. mysqli_connect_error());
}  else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    
        $query = "SELECT * FROM usersteam WHERE username = '$username'";
        $result = mysqli_query($connection, $query);
    
        if ($row = mysqli_fetch_assoc($result)) {
            if ($password == $row['password']) {
                session_start();
                $_SESSION['username'] = $username;
                $_SESSION['userid'] = $row['id'];  
                header("Location: index(LeeJiaJe).php");
            } else {
                echo "<script>alert('Password Incorrect'); window.location.href='SignUp(LeeJiaJe).php';</script>";
            }
        } else {
            echo "<script>alert('Username not found'); window.location.href='SignUp(LeeJiaJe).php';</script>";
        }
    
        mysqli_close($connection);
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signinup.css">
    <script type="text/javascript" src="accountvalidation.js" defer></script>
    <title>Sign In</title>
</head>
<body>
    <div>
        <div id="bar">
            <nav class="mainheader">
                <a style="font-size:24px;text-decoration: none;color:black;background-color: whitesmoke;margin-right: auto" href="landingpage(LeeJiaJe).php"><strong>TimeHelperEXE</strong></a>
                <a href="">About Us</a>
                <a href="">Pricing</a>
                <a href="">Contact us</a>
            </nav>
        </div>


        <div class="mobilenav">
            <a style="font-size:24px;text-decoration: none;color:black;background-color: whitesmoke;margin-right: auto" href="landingpage(LeeJiaJe).php"><strong>TimeHelperEXE</strong></a>
                <div id="links">
                    <a href="">About us</a>
                    <a href="">Pricing</a>
                    <a href="">Contact us</a>
                </div>
            <a href="javascript:void(0);" class="hamburgericon" id="hamburgericon" onclick=openNavbar()>
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#434343"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg> 
            </a>    
            
            
            <script>
                function openNavbar() {
                if (document.getElementById("links").style.display === "block") {
                    document.getElementById("links").style.display = "none";
                    document.getElementById("hamburgericon").style.backgroundColor = "whitesmoke";
                    document.getElementById("hamburgericon").style.borderBottom = "none";
                  } 
                  else {
                    document.getElementById("links").style.display = "block";
                    document.getElementById("hamburgericon").style.backgroundColor = "#EFB036";
                    document.getElementById("hamburgericon").style.borderBottom = "3px solid #EFB036";
                  }
                }
            </script>
        </div>

        
    </div>
    <div class="wrapper">
        <form class="signupform" id="signupform" method="post">
            <h1>Sign in</h1>
            <p id="error-message"></p>            
            <div>
                <label for="username-input">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#2563EB "><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z"/></svg>
                </label>
                <input type="text" name="username" id="username-input" placeholder="Username">
            </div>
            <div>
                <label for="password-input">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#2563EB "><path d="M80-200v-80h800v80H80Zm46-242-52-30 34-60H40v-60h68l-34-58 52-30 34 58 34-58 52 30-34 58h68v60h-68l34 60-52 30-34-60-34 60Zm320 0-52-30 34-60h-68v-60h68l-34-58 52-30 34 58 34-58 52 30-34 58h68v60h-68l34 60-52 30-34-60-34 60Zm320 0-52-30 34-60h-68v-60h68l-34-58 52-30 34 58 34-58 52 30-34 58h68v60h-68l34 60-52 30-34-60-34 60Z"/></svg>
                </label>
                <input type="password" name="password" id="password-input" placeholder="Password">
            </div>
            <div>
                <button type="submit">Log in <svg xmlns="http://www.w3.org/2000/svg" height="12px" viewBox="0 -960 960 960" width="12px" fill="#434343"><path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z"/></svg></button>
            </div>
            <div>
                <p> Don't have an account?<a href="SignUp(LeeJiaJe).php">Sign up</a> </p>                
            </div>
        </form>
    </div>

    
</body>
</html>