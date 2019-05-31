<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_type"]!=3){
    header('Location: index.php');
}


?>
<!DOCTYPE html>
<html lang="en">

<head>

<style>
    .table-wrapper-scroll-y {
        display: block;
        max-height: 1200px;
        overflow-y: auto;
        -ms-overflow-style: -ms-autohiding-scrollbar;
    }
</style>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Jobboard">
    <title>JobBoard - Bootstrap HTML5 Job Portal Template</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jasny-bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" type="text/css">

    <link rel="stylesheet" href="assets/css/material-kit.css" type="text/css">

    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/fonts/themify-icons.css">

    <link rel="stylesheet" href="assets/css/color-switcher.css" type="text/css">

    <link rel="stylesheet" href="assets/extras/animate.css" type="text/css">

    <link rel="stylesheet" href="assets/extras/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/extras/owl.theme.css" type="text/css">

    <link rel="stylesheet" href="assets/extras/settings.css" type="text/css">

    <link rel="stylesheet" href="assets/css/slicknav.css" type="text/css">

    <link rel="stylesheet" href="assets/css/main.css" type="text/css">

    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css">

    <link rel="stylesheet" type="text/css" href="assets/css/colors/red.css" media="screen" />

    <script src="assets\js\jquery-3.3.1.js"></script>
</head>

<body>

    <div class="header">

        <section id="intro" class="section-intro">
            <div class="logo-menu">
                <nav class="navbar navbar-default" role="navigation" data-spy="affix" data-offset-top="50">
                    <div class="container">

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand logo" href="index.php"><img src="assets/img/logo.jpg"  style= " width : 150px ; border-radius : 150px; "></a>

                        </div>
                        <div class="collapse navbar-collapse" id="navbar">


                            <ul class="nav navbar-nav">

                                <li>
                                    <a href="company-index.php" style="border-radius:5px; background-color:pink; height:  40px; ">
                                        Home
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        Hire Freelancers <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown">
                                        <li>
                                            <a href="company-postjob.php">
                                                Post a Job
                                            </a>
                                            
                                        </li>
                                        
                                        <li>
                                            <a href="company-browsejobseeker.php">
                                                Search For a Jobseeker
                                            </a>
                                            
                                        </li>


                                    </ul>
                                </li>




                                <li>
                                    <a href="company-mypost.php">
                                        My Posts
                                    </a>
                                  
                                </li>
                                <li>
                                    <a href="company-account.php">
                                        My account
                                    </a>
                                </li>
                                <li>
                                <a href="inbox.php?usertype=3">
                                        Inbox
                                    </a>
                                </li>

                            </ul>
                            <ul class="nav navbar-nav navbar-right float-right">
                                <li class="right"><a href="logout.php"><i class=" ti-lock"></i> Log Out</a></li>
                            </ul>
                        </div>
                    </div>

                    <ul class="wpb-mobile-menu">

                        <li>
                            <a href="jobseeker-index.php">Home</a>
                        </li>

                        <li>
                            <a href="#">Hire Freelancers</a>
                            <ul>
                                <li><a href="#">Post a Job </a></li>
                                <li><a href="#">Search For a Jobseeker </a></li>

                            </ul>

                        </li>


                        <li>
                            <a href="#">My Posts</a>
                           
                        </li>
                         

                          <li>
                                    <a href="company-account.php">
                                        My account
                                    </a>
                         </li>


                        <li>
                        <a href="inbox.php?usertype=3">
                                Inbox
                            </a>
                        </li>


                        <li class="btn-m"><a href="logout.php"><i class="ti-lock"></i> LogOUt</a></li>
                    </ul>

                </nav>

                <div class="navmenu navmenu-default navmenu-fixed-left offcanvas">

                    <div class="close" data-toggle="offcanvas" data-target=".navmenu">
                        <i class="ti-close"></i>
                    </div>
                    <h3 class="title-menu"></h3>

                </div>
            </div>
        </section>
    </div>