<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstarp CSS -->
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="./css/all.min.css">

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

    <!-- Testimonial Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css">

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="./css/style.css?v=<?php echo time();?>">

    <title>Smart Champs</title>
</head>

<body>
    <!-- Start Navigation -->

    <nav class="navbar navbar-expand-sm navbar-dark pl-5 fixed-top">
        <a class="navbar-brand" href="./index.php">Smart Champs</a>
        <span class="navbar-text">Learn and Implement</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav custom-nav pl-5">
                <li class="nav-item custom-nav-item"><a href="./index.php" class="nav-link">Home</a></li>
                <li class="nav-item custom-nav-item"><a href="./courses.php" class="nav-link">Courses</a></li>
                <li class="nav-item custom-nav-item"><a href="./paymentstatus.php" class="nav-link">Payment Status</a>
                </li>

                <?php 
         session_start();
        if(isset($_SESSION['is_login'])){
          echo '<li class="nav-item custom-nav-item"><a href="./Student/studentProfile.php" class="nav-link">My profile</a></li>
            <li class="nav-item custom-nav-item"><a href="./logout.php"
            class="nav-link">Logout</a></li>';
        }
        else{
          echo '<li class="nav-item custom-nav-item">
                <a href="#" class="nav-link" data-toggle="modal"
                data-target="#stuLoginModalCenter">Login</a></li>
                <li class="nav-item custom-nav-item">
                <a href="#" class="nav-link" data-toggle="modal" 
                data-target="#stuRegModalCenter">Signup</a></li>';
        }
        ?>

            </ul>
        </div>
    </nav>
    <!-- End Navigation -->