<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <!-- Bootstarp CSS -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="../css/all.min.css">

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="../css/adminstyle.css">

</head>

<body>
    <!-- Top navbar -->
    <nav class="navbar navbar-dark fixed-top p-0 shadow" style="background-color: #225470;">
        <a href="adminDashboard.php" class="navbar-brand col-sm-3 col-md-2 mr-0 pl-5">
            Smart Champs<small class="text-white pl-5">Admin Area</small>
        </a>
    </nav>

    <!-- side bar -->
    <div class="container-fluid mb-5" style="margin-top: 40px;">
        <div class="row">
            <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="adminDashboard.php">
                                <i class="fas fa-tachometer-alt"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="courses.php">
                                <i class="fas fa-book-open mr-3"></i>
                                Courses
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="lessons.php">
                                <i class="fas fa-book-open mr-3"></i>
                                Lessons
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="students.php">
                                <i class="fas fa-users"></i>
                                Students
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sellreport.php">
                                <i class="fas fa-table"></i>
                                Sell Report
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="adminPaymentStatus.php">
                                <i class="fas fa-table"></i>
                                Payment Status
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="feedback.php">
                                <i class="fas fa-book-open mr-3"></i>
                                Feedback
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="adminChangePass.php">
                                <i class="fas fa-key"></i>
                                Change Password
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../logout.php">
                                <i class="fas fa-sign-out-alt"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>