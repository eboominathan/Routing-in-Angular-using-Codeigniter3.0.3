<!DOCTYPE html>
<html ng-app="myApp">
<head>
    <meta charset="utf-8">
    <!-- Set the viewport so this responsive site displays correctly on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Angularjs routing navigation</title>
    <!-- Include bootstrap CSS -->
    <link href="includes/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    
    <script src="includes/jquery/jquery-2.1.0.min.js"></script>
    <!--Angular js-->
    <script src="js/angular.min.js"></script>
    <script src="js/angular-route.min.js"></script>
    <script src="js/angular-animate.min.js"></script>
    <script src="js/app.js"></script>
</head>
<body ng-controller="navController" >


    <!-- Site header and navigation -->
    <header class="top" role="header">
        <div class="container">

            <nav class="navbar navbar-inverse"role="navigation">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">      
                <a class="navbar-brand" href="#"><img src="includes/logo.png"></a>
              </div>
              <ul class="navbar-nav nav">
                <li><a href="#/">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<div ng-view="" id="ng-view" class="slide-animation">

</div>


