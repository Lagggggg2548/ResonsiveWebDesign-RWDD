<?php 
    session_start();
    session_destroy();
    header("Location: landingpage(LeeJiaJe).php");
    exit();
?>