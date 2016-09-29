<?php
/**
 * Created by Sudipta Deb
 * Date: 23/9/15
 * Time: 9:04 AM
 */
namespace debmego;

$baselocation = '';
require_once 'classes/AutoLoader.php';
AutoLoader::loadAllClasses();
?>
<!DOCTYPE html>
<html class="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <link rel="apple-touch-icon" href="<?php echo $baselocation ?>apple-touch-icon-precomposed.png">
    <link rel="shortcut icon" href="<?php echo $baselocation ?>favicon.ico"/>


    <title>WruBus? | Find your bus</title>
    <meta name="description" content="The Debmego Technology Website">

    <meta name="author" content="Sudipta Deb">
    <meta name="author-webite" content="http://SudiptaDeb.in">
    <meta name="company" content="Debmego Technology">
    <meta name="company-website" content="http://debmego.in">

    <meta name="viewport" content="width=device-width, initial-scale=.8 , user-scalable=0">

    <link rel="stylesheet" href="<?php echo $baselocation ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $baselocation ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $baselocation ?>css/animate.min.css">
    <link rel="stylesheet" href="<?php echo $baselocation ?>css/main.css">

    <script src="<?php echo $baselocation ?>js/modernizr.min.js"></script>

</head>
<body>
<nav class="navbar-inverse " role="navigation" id="navigation-bar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="fa fa-ellipsis-v fa-fw"></span>
            </button>
            <a class="navbar-brandz" href="index.php">
                <img src="img/wrubus_logo.png" alt="Debmego" height="50px">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php#track-bus">Track Bus</a></li>
                <li><a href="index.php#about-us">About Us</a></li>
                <li><a href="index.php#how-it-works">How it works?</a></li>
                <li><a href="index.php#applications">Applications</a></li>
                <li><a href="http://github.com">Contribute</a></li>
            </ul>
        </div>
    </div>
</nav>