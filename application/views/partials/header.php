<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$user_id=$this->session->userdata('restaurant_id');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Auber</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="all,follow">
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/style.default.css');?>" id="theme-stylesheet">
<link rel="stylesheet" href="<?php echo base_url('assets/css/auber.css');?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
a{
  text-decoration:none;
  color:#6f6a6a;
}
a i:hover{
  text-decoration:none;
  transform:scale(2);  
}
.btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited{
    background-color:#8a5589;
}
</style>
</head>
<body>
<div class="page home-page"> 
  <!-- Main Navbar-->
  <header class="header">
    <nav class="navbar"> 
      <!-- Search Box-->
      <div class="search-box">
        <button class="dismiss"><i class="icon-close"></i></button>
        <form id="searchForm" action="#" role="search">
          <input type="search" placeholder="What are you looking for..." class="form-control">
        </form>
      </div>
      <div class="container-fluid">
        <div class="navbar-holder d-flex align-items-center justify-content-between"> 
          <!-- Navbar Header-->
          <div class="navbar-header"> <a href="index.html" class="navbar-brand">
            <div class="brand-text brand-big hidden-lg-down"><img style="width:50px; height:50px; margin-right:10px;margin-top: -10%;" src="<?php echo base_url('assets/img/logo.png');?>" alt=""/><span>Mr. </span><strong> Auber's </strong></div>
            <div class="brand-text brand-small"><strong>Auber</strong></div>
            </a> <a id="toggle-btn" href="#" class="menu-btn active"><i class="fa fa-bars" aria-hidden="true"></i> </a> </div>
          <!-- Navbar Menu -->
          <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
            <!-- Search-->
            <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
            <!-- Notifications-->
            <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell-o"></i><span class="badge bg-red">12</span></a>
              <ul aria-labelledby="notifications" class="dropdown-menu">
                <li><a rel="nofollow" href="#" class="dropdown-item">
                  <div class="notification">
                    <div class="notification-content"><i class="fa fa-envelope bg-green"></i>You have 6 new messages </div>
                    <div class="notification-time"><small>4 minutes ago</small></div>
                  </div>
                  </a></li>
                <li><a rel="nofollow" href="#" class="dropdown-item">
                  <div class="notification">
                    <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                    <div class="notification-time"><small>4 minutes ago</small></div>
                  </div>
                  </a></li>
                <li><a rel="nofollow" href="#" class="dropdown-item">
                  <div class="notification">
                    <div class="notification-content"><i class="fa fa-upload bg-orange"></i>Server Rebooted</div>
                    <div class="notification-time"><small>4 minutes ago</small></div>
                  </div>
                  </a></li>
                <li><a rel="nofollow" href="#" class="dropdown-item">
                  <div class="notification">
                    <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                    <div class="notification-time"><small>10 minutes ago</small></div>
                  </div>
                  </a></li>
                <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>view all notifications </strong></a></li>
              </ul>
            </li>
            <!-- Messages                        -->
            <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope-o"></i><span class="badge bg-orange">10</span></a>
              <ul aria-labelledby="notifications" class="dropdown-menu">
                <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                  <div class="msg-profile"> <img src="<?php echo base_url('assets/img/avatar-1.jpg');?>" alt="..." class="img-fluid rounded-circle"></div>
                  <div class="msg-body">
                    <h3 class="h5">Jason Doe</h3>
                    <span>Sent You Message</span> </div>
                  </a></li>
                <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                  <div class="msg-profile"> <img src="<?php echo base_url('assets/img/avatar-2.jpg');?>" alt="..." class="img-fluid rounded-circle"></div>
                  <div class="msg-body">
                    <h3 class="h5">Frank Williams</h3>
                    <span>Sent You Message</span> </div>
                  </a></li>
                <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                  <div class="msg-profile"> <img src="<?php echo base_url('assets/img/avatar-3.jpg');?>" alt="..." class="img-fluid rounded-circle"></div>
                  <div class="msg-body">
                    <h3 class="h5">Ashley Wood</h3>
                    <span>Sent You Message</span> </div>
                  </a></li>
                <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>Read all messages </strong></a></li>
              </ul>
            </li>
            <!-- Logout    -->
            <li class="nav-item"><a href="<?php echo base_url('login/logout');?>" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="page-content d-flex align-items-stretch"> 
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="client card">
        <div class="card-body text-center">
          <div class="client-avatar"><img src="<?php echo base_url('assets/img/avatar-2.jpg');?>" alt="..." class="img-fluid rounded-circle">
            <div class="status bg-green"></div>
          </div>
          <div class="client-title">
            <?php  $resto =  $this->resto_details->resto($user_id);?>
            <h3><?php echo $resto->restaurant_name?></h3>
            <span><?php echo $resto->restaurant_name?></span><a href="#">Follow</a> </div>
          <div class="client-info">
            <div class="row">
              <div class="col-4"><strong>20</strong><br>
                <small>Category</small></div>
              <div class="col-4"><strong>54</strong><br>
                <small>Menu</small></div>
              <div class="col-4"><strong>235</strong><br>
                <small>Order</small></div>
            </div>
          </div>
          <div class="client-social d-flex justify-content-between"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a><a href="#" target="_blank"><i class="fa fa-twitter"></i></a><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a><a href="#" target="_blank"><i class="fa fa-instagram"></i></a><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></div>
        </div>
      </div>
      <ul class="list-unstyled">
        <li class="active"> <a href="<?php echo base_url('/dashboard');?>"><i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</a></li>        
        <li> <a href="<?php echo base_url('myprofile');?>"> <i class="fa fa-user" aria-hidden="true"></i>Profile</a></li>        
         <li><a href="#dashvariants" aria-expanded="false" data-toggle="collapse"><i class="fa fa-bars"></i> Menu  </a>
          <ul id="dashvariants" class="collapse list-unstyled">
            <li><a href="<?php echo base_url('Restaurant_outlet');?>">Menu Outlets</a></li>
            <li><a href="<?php echo base_url('restaurant_category');?>">Menu Categories</a></li>
            <li><a href="<?php echo base_url('menu');?>">Menu Category Items</a></li>
          </ul>
        </li>
        <!--<li> <a href="with-category.html"><img src="img/financials.png" alt=""/> Financials </a></li>
        <li><a href="#dashvariants" aria-expanded="false" data-toggle="collapse"><i class="fa fa-commenting" aria-hidden="true"></i> Feedback </a>
          <ul id="dashvariants" class="collapse list-unstyled">
            <li><a href="discount-level.html">Discount Level</a></li>
            <li><a href="#">Offer Text</a></li>
            <li><a href="#">Activities</a></li>
          </ul>
        </li>
      -->
        <li> <a href="<?php echo base_url('changepassword');?>"> <i class="fa fa-unlock-alt" aria-hidden="true"></i>Change Password </a></li>
       <!-- <li> <a href="forms.html"><i class="fa fa-info-circle" aria-hidden="true"></i>More </a></li>-->
        <li> <a href="<?php echo base_url('login/logout');?>"> <i class="fa fa-sign-in" aria-hidden="true"></i>Logout</a></li>
      </ul>
    </nav>
   
	  <div class="content-inner">