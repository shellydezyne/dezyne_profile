<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dezyne_profile
 */

?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Responsive Resume/CV／Portfolio Template</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive Resume/CV／Portfolio Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/plugins/font-awesome/css/font-awesome.css">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <header class="header">
        <div class="top-bar container-fluid">
            <div class="actions">
                <a class="btn hidden-xs" href="mailto:someone@example.com"><i class="fa fa-paper-plane" aria-hidden="true"></i> Hire Me</a>
                <a class="btn" href="#"><i class="fa fa-download" aria-hidden="true"></i> Download My Resume</a>
            </div><!--//actions-->
            <ul class="social list-inline">
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-github-alt" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
            </ul><!--//social-->
        </div><!--//top-bar-->

        <div class="intro">
            <div class="container text-center">
                <img class="profile-image" src="<?php bloginfo('template_directory'); ?>/assets/images/profile-image.jpg" alt="">
                <h1 class="name">Yash Dhawan</h1>
                <div class="title">Full Stack Developer</div>
                <div class="profile">
                    <p>Profile info goes here. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet.</p>
                </div><!--//profile-->
            </div><!--//container-->
        </div><!--//intro-->

        <div class="contact-info">
            <div class="container text-center">
                <ul class="list-inline">
                    <li class="email"><i class="fa fa-envelope"></i><a href="mailto:yashdhawan1994@gmail.com">yashdhawan1994@gmail.com</a></li>
                    <li><i class="fa fa-phone"></i> <a href="tel: 9637734833">9637734833</a></li>
                    <li class="website"><i class="fa fa-globe"></i><a href="#" target="_blank">portfoliosite.com</a></li>
                </ul>
            </div><!--//container-->
        </div><!--//contact-info-->

        <div class="page-nav-space-holder hidden-xs">
            <div id="page-nav-wrapper" class="page-nav-wrapper text-center">
                <div class="container">
                    <ul id="page-nav" class="nav page-nav list-inline">
                        <li><a class="scrollto" href="#experiences-section">Experiences</a></li>
                        <li><a class="scrollto" href="#education-section">Education</a></li>
                        <li><a class="scrollto" href="#skills-section">Skills</a></li>
                        <li><a class="scrollto" href="#testimonials-section">Testimonials</a></li>
                        <li><a class="scrollto" href="#portfolio-section">Portfolio</a></li>
                        <li><a class="scrollto" href="#contact-section">Contact</a></li>
                        <li><a href="<?php bloginfo('template_directory'); ?>/blog">Blogs</a></li>
                    </ul><!--//page-nav-->
                </div>
            </div><!--//page-nav-wrapper-->
        </div>

    </header><!--//header-->
