<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/CatDog/inc/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/CatDog/inc/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/CatDog/inc/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/CatDog/inc/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/CatDog/inc/css/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="/CatDog/inc/css/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="/CatDog/inc/css/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="/CatDog/inc/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/CatDog/inc/css/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="/CatDog/inc/css/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="/CatDog/inc/css/main.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <span class="hidden-xs">Welkom, <?php echo $this->session->first_name; ?></span>
          </li>
        </ul>
      </div>
    </nav>
  </header>
    <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="<?php echo site_url();?>/admin"><i class="fa fa-book"></i> <span>Admin panel</span></a></li>
        <li><a href="<?php echo site_url();?>/admin/users"><i class="fa fa-book"></i> <span>Users</span></a></li>
        <li><a href="<?php echo site_url();?>/main"><i class="fa fa-book"></i> <span>Home page</span></a></li>
        <li><a href="<?php echo site_url();?>/main/logout"><i class="fa fa-book"></i> <span>Logout</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <?php
            $arr = $this->session->flashdata(); 
            if(!empty($arr['flash_message'])){
                $html = '<div class="alert alert-danger alert-dismissable adminlte" id="danger-alert">';
                $html .= $arr['flash_message']; 
                $html .= '</div>'; echo $html; }else 
            if(!empty($arr['flash_good_message'])){
                $html = '<div class="alert alert-success alert-dismissable adminlte" id="succes-alert">';
                $html .= $arr['flash_good_message']; 
                $html .= '</div>'; echo $html; }  ?>