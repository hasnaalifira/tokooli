<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>ADMIN</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('/assets2/css/bootstrap.css'); ?>" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url('/assets2/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets2/css/zabuto_calendar.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets2/js/gritter/css/jquery.gritter.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets2/lineicons/style.css'); ?>">    
    
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('/assets2/css/style.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets2/css/style-responsive.css'); ?>" rel="stylesheet">

    <script src="<?php echo base_url('/assets2/js/chart-master/Chart.js'); ?>"></script>
    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
    <style type="text/css">
      select.input-sm{
        line-height: 20px;
      }
    </style>
  </head>



  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="" class="logo"><b>ADMIN</b></a>
            
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?php echo base_url()."Admin/logout/"; ?>">Logout</a></li>
              </ul>
            </div>
        </header>
      <!--header end-->
      
      
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered">
                    <img src="<?php echo base_url('assets2/img/logo.jpg');?>" class="img-circle" width="60">
                  </p>
                  <h5 class="centered">OLI 711</h5>
                    
                  <li class="mt">
                      <a href="<?php echo base_url()."Admin/dashboard/"; ?>">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Manage Admin</span>
                      </a>
                      <ul class="sub">
                          <li><a href="<?php echo base_url()."admin/read/"; ?>">Data Admin</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Oli</span>
                      </a>
                      <ul class="sub">
                          
                          <li><a  href="<?php echo base_url()."Kategori/read/"; ?>">Data Kategori</a></li>
                          <li><a  href="<?php echo base_url()."Produk/read/"; ?>">Data Produk</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Order</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url()."Order/read/"; ?>">Data Order</a></li>
                         
                      </ul>
                  </li>

                  

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>