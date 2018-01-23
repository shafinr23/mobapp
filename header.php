<!doctype html>
<html lang="en">
<!--

Page    : index / MobApp
Version : 1.0
Author  : Colorlib
URI     : https://colorlib.com

 -->

<head>
    <title>MobApp - App Landing Page Template</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mobland - Mobile App Landing Page Template">
    <meta name="keywords" content="HTML5, bootstrap, mobile, app, landing, ios, android, responsive">

    <!-- Font -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">




<?php wp_head(); ?>
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="30">

    <!-- Nav Menu -->

    <div class="nav-menu fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-dark navbar-expand-lg">
                        <a class="navbar-brand" href="index.html"><img src="images/logo.png" class="img-fluid" alt="logo"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbar">
                             <ul class="navbar-nav ml-auto">
                                <!-- <li class="nav-item"> <a class="nav-link active" href="#home">HOME <span class="sr-only">(current)</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#features">FEATURES</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#gallery">GALLERY</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#pricing">PRICING</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#contact">CONTACT</a> </li> -->

                                <?php  wp_nav_menu(array(
                                    'theme_location' => 'main',
                                    'container' => 'div',
                                    'container_class' => 'collapse navbar-collapse',
                                    'container_id' => 'navbar',
                                    'menu_class' => 'navbar-nav ml-auto'

                                )); ?>
                
                                <li class="nav-item"><a href="#" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">Download</a></li>
                            </ul>   

                                
                   
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <header class="bg-gradient" id="home">
        <div class="container mt-5">
            <h1>Mobile App Landing Page Template</h1>
            <p class="tagline">The one and only solution for any kind of mobila app landing needs. Just change the screenshots and texts and you are good to go. </p>
        </div>
        <div class="img-holder mt-3"><img src="../images/iphonex.png" alt="phone" class="img-fluid"></div>
    </header>
