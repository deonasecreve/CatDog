<!doctype html>
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $title; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/CatDog/inc/css/bootstrap.css">
    <link rel="stylesheet" href="/CatDog!/inc/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type = 'text/javascript' src = "<?php echo base_url(); ?>inc/js/javascript.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Second navbar for search -->

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="/CatDog/inc/css/bootstrap.css">
        <link rel="stylesheet" href="/CatDog/inc/css/main.css">
    </head>
    <body>
    	<!-- Second navbar for search -->
    <nav class="navbar navbar-inverse">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url();?>/main/index">CatDog</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-3">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Welkom<?php if($this->session->first_name){echo ', '. $this->session->first_name;} ?></a>
              <ul class="dropdown-menu">
                <?php if(!isset($this->session->role)){ ?>
                <li><a href="<?php echo site_url();?>/main/register">Register</a></li>
                <li><a href="<?php echo site_url();?>/main/login">login</a></li>
                <?php }elseif($this->session->role == 'admin'){ ?>
                <li><a href="<?php echo site_url();?>/admin/index">Admin panel</a></li>
                <li><a href="<?php echo site_url();?>/profile/index">Mijn profiel</a></li>
                <li><a href="<?php echo site_url();?>/main/logout">Uitloggen</a></li>
                <?php }else{ ?>
                <li><a href="<?php echo site_url();?>/profile/index">Mijn profiel</a></li>
                <li><a href="<?php echo site_url();?>/main/logout">Uitloggen</a></li>
                <?php } ?>
              </ul>
            </li>
          </ul>
          <div class="collapse nav navbar-nav nav-collapse" id="nav-collapse3">
            <form class="navbar-form navbar-right" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search" />
              </div>
              <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            </form>
          </div>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
   <?php
            $arr = $this->session->flashdata(); 
            if(!empty($arr['flash_message'])){
                $html = '<div class="alert alert-danger alert-dismissable" id="danger-alert">';
                $html .= $arr['flash_message']; 
                $html .= '</div>'; echo $html; }else 
            if(!empty($arr['flash_good_message'])){
                $html = '<div class="alert alert-success alert-dismissable" id="succes-alert">';
                $html .= $arr['flash_good_message']; 
                $html .= '</div>'; echo $html; }  ?>
        <div class="container">
            <div class="row">