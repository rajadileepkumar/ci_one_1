<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Web Preparations</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse" id="header">
        <div class="container-fluid">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>">CI</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="#"><a href="<?php echo base_url(); ?>">Home</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url(); ?>about"><span class="glyphicon glyphicon-user"></span> About</a></li>
                <li><a href="<?php echo base_url(); ?>contact"><span class="glyphicon glyphicon-log-in"></span> Contact</a></li>
            </ul>
            </div>
        </div>
        </nav>