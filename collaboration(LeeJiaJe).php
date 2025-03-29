<?php 
    session_start();
    if (!isset($_SESSION['userid'])) {
        header("Location: landingpage(LeeJiaJe).php"); 
        exit();
    }
    echo $_SESSION['userid'];
?>


<!DOCTYPE html>

<html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <title>Collaborations</title>
        <link rel="stylesheet" href="homepage.css">
        <style>
            html {
                font-family: 'Poppins';font-size: 18px;
            }

            body {
                margin: 0;
                padding: 0;
                background-color: #121212;
                color: whitesmoke;
            }
            
        </style>

    </head>

    <body>
        <nav>
            <!--To check user click-->
            <input type="checkbox" id="sidebar-status">
            <label for="sidebar-status" class="openSidebarButton">
                <!--SVG code for hamburger icon-->
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5A5A5A"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
            </label>
            <label id="overlay" for="sidebar-status"></label>
            <div class="sidebar">
                <label for="sidebar-status" class="closeSidebarButton">
                    <!--SVG code for close button-->
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5A5A5A"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
                </label>
                <a style="color: white;background-color:#1f1e1e;padding:0px 20px 0px 20px;margin-left:20px;margin-right:auto" class="Homelink" href="index(LeeJiaJe).php"><strong>TimeHelperEXE</strong></a> 
                <a href="goals(JasperTangSeeYong).php">Goals</a>
                <a href="projects(DerrickShimTsunCheng).php">Projects</a>
                <a href="analytics(LaiFusiang).php">Analytics</a>
                <a href="collaboration(LeeJiaJe).php">Collaborations</a>
                <a href="">Settings</a>

            </div>
        </nav>

    
    </body>


</html>