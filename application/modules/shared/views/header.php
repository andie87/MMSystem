<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>MOU Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />   --> 
   

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('asset/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="<?php echo base_url('asset/css/font-awesome.min.css')?>" rel="stylesheet">  
    
    <!-- Datatable -->
    <link href="<?php echo base_url('asset/css/jquery.dataTables_themeroller.css')?>" rel="stylesheet">
    
    <!-- Pace -->
    <link href="<?php echo base_url('asset/css/pace.css')?>" rel="stylesheet">
    
    <!-- Color box -->
    <link href="<?php echo base_url('asset/css/colorbox/colorbox.css')?>" rel="stylesheet">
    
    <!-- Morris -->
    <link href="<?php echo base_url('asset/css/morris.css')?>" rel="stylesheet"/>  

    <!-- Endless -->
    <link href="<?php echo base_url('asset/css/endless.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/endless-skin.css')?>" rel="stylesheet">
    
  </head>

  <body class="overflow-hidden">
    <!-- Overlay Div -->
    <div id="overlay" class="transparent"></div>
    
    <a href="" id="theme-setting-icon"><i class="fa fa-cog fa-lg"></i></a>
    <div id="theme-setting">
        <div class="title">
            <strong class="no-margin">Skin Color</strong>
        </div>
        <div class="theme-box">
            <a class="theme-color" style="background:#323447" id="default"></a>
            <a class="theme-color" style="background:#efefef" id="skin-1"></a>
            <a class="theme-color" style="background:#a93922" id="skin-2"></a>
            <a class="theme-color" style="background:#3e6b96" id="skin-3"></a>
            <a class="theme-color" style="background:#635247" id="skin-4"></a>
            <a class="theme-color" style="background:#3a3a3a" id="skin-5"></a>
            <a class="theme-color" style="background:#495B6C" id="skin-6"></a>
        </div>
        <div class="title">
            <strong class="no-margin">Sidebar Menu</strong>
        </div>
        <div class="theme-box">
            <label class="label-checkbox">
                <input type="checkbox" checked id="fixedSidebar">
                <span class="custom-checkbox"></span>
                Fixed Sidebar
            </label>
        </div>
    </div><!-- /theme-setting -->

    <div id="wrapper" class="preload">
        <div id="top-nav" class="fixed skin-6">
            <a href="#" class="brand">
                <span>MOU</span>
                <span class="text-toggle"> System</span>
            </a><!-- /brand -->                 
            <button type="button" class="navbar-toggle pull-left" id="sidebarToggle">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <button type="button" class="navbar-toggle pull-left hide-menu" id="menuToggle">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <ul class="nav-notification clearfix">                
                <li class="profile dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <strong><?php echo $this->session->userdata('username')?></strong>
                        <span><i class="fa fa-chevron-down"></i></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="clearfix" href="#">
                                <img src="<?php echo base_url('asset/img/user.jpg')?>" alt="User Avatar">
                                <div class="detail">
                                    <strong><?php echo $this->session->userdata('username')?></strong>
                                    <p class="grey">email@email.com</p> 
                                </div>
                            </a>
                        </li>
                        <li><a tabindex="-1" href="profile.html" class="main-link"><i class="fa fa-edit fa-lg"></i> Edit profile</a></li>
                        <li><a tabindex="-1" href="gallery.html" class="main-link"><i class="fa fa-picture-o fa-lg"></i> Photo Gallery</a></li>
                        <li><a tabindex="-1" href="#" class="theme-setting"><i class="fa fa-cog fa-lg"></i> Setting</a></li>
                        <li class="divider"></li>
                        <li><a tabindex="-1" class="main-link logoutConfirm_open" href="#logoutConfirm"><i class="fa fa-lock fa-lg"></i> Log out</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /top-nav-->
        
        <aside class="fixed skin-6">
            <div class="sidebar-inner scrollable-sidebar">
                <div class="size-toggle">
                    <a class="btn btn-sm" id="sizeToggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="btn btn-sm pull-right logoutConfirm_open"  href="#logoutConfirm">
                        <i class="fa fa-power-off"></i>
                    </a>
                </div><!-- /size-toggle --> 
                <div class="user-block clearfix">
                    <img src="<?php echo base_url('asset/img/user.jpg')?>" alt="User Avatar">
                    <div class="detail">
                        <strong><?php echo $this->session->userdata('username')?></strong>
                        <!-- <span class="badge badge-danger m-left-xs bounceIn animation-delay4">4</span> -->
                        <ul class="list-inline">
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="inbox.html" class="no-margin">Inbox</a></li>
                        </ul>
                    </div>
                </div><!-- /user-block -->
                <div class="search-block">
                    <div class="input-group">
                        <input type="text" class="form-control input-sm" placeholder="search here...">
                        <span class="input-group-btn">
                            <button class="btn btn-default btn-sm" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div><!-- /input-group -->
                </div><!-- /search-block -->
                <div class="main-menu">
                    <ul>
                        <li class="<?php if($menuaktif == "dashboard"): ?>active <?php endif;?>">
                            <a href="<?php echo site_url('Dashboard');?>">
                                <span class="menu-icon">
                                    <i class="fa fa-desktop fa-lg"></i> 
                                </span>
                                <span class="text">
                                    Dashboard
                                </span>
                                <span class="menu-hover"></span>
                            </a>
                        </li>
                        <li class="<?php if($menuaktif == "donatur"): ?>active <?php endif;?>">
                            <a href="<?php echo site_url('donatur');?>">
                                <span class="menu-icon">
                                    <i class="fa fa-university fa-lg"></i> 
                                </span>
                                <span class="text">
                                    Donatur
                                </span>
                                <span class="menu-hover"></span>
                            </a>
                        </li>
                        <li class="openable open">
                            <a href="#">
                                <span class="menu-icon">
                                    <i class="fa fa-file-text fa-lg"></i> 
                                </span>
                                <span class="text">
                                    Page
                                </span>
                                <span class="menu-hover"></span>
                            </a>
                            <ul class="submenu">
                                <li><a href="login.html"><span class="submenu-label">Sign in</span></a></li>
                                <li><a href="register.html"><span class="submenu-label">Sign up</span></a></li>
                                <li><a href="lock_screen.html"><span class="submenu-label">Lock Screen</span></a></li>
                                <li><a href="profile.html"><span class="submenu-label">Profile</span></a></li>
                                <li><a href="blog.html"><span class="submenu-label">Blog</span></a></li>
                                <li><a href="single_post.html"><span class="submenu-label">Single Post</span></a></li>
                                <li><a href="landing.html"><span class="submenu-label">Landing</span></a></li>
                                <li><a href="search_result.html"><span class="submenu-label">Search Result</span></a></li>
                                <li><a href="chat.html"><span class="submenu-label">Chat Room</span></a></li>
                                <li><a href="movie.html"><span class="submenu-label">Movie Gallery</span></a></li>
                                <li><a href="pricing.html"><span class="submenu-label">Pricing</span></a></li>
                                <li><a href="invoice.html"><span class="submenu-label">Invoice</span></a></li>
                                <li><a href="faq.html"><span class="submenu-label">FAQ</span></a></li>
                                <li><a href="contact.html"><span class="submenu-label">Contact</span></a></li>
                                <li><a href="error404.html"><span class="submenu-label">Error404</span></a></li>
                                <li><a href="error500.html"><span class="submenu-label">Error500</span></a></li>
                                <li><a href="blank.html"><span class="submenu-label">Blank</span></a></li>
                            </ul>
                        </li>
                        <li class="openable">
                            <a href="#">
                                <span class="menu-icon">
                                    <i class="fa fa-tag fa-lg"></i> 
                                </span>
                                <span class="text">
                                    Component
                                </span>
                                <span class="badge badge-success bounceIn animation-delay5">9</span>
                                <span class="menu-hover"></span>
                            </a>
                            <ul class="submenu">
                                <li><a href="ui_element.html"><span class="submenu-label">UI Features</span></a></li>
                                <li><a href="button.html"><span class="submenu-label">Button & Icons</span></a></li>
                                <li><a href="tab.html"><span class="submenu-label">Tab</span></a></li>
                                <li><a href="nestable_list.html"><span class="submenu-label">Nestable List</span></a></li>
                                <li><a href="calendar.html"><span class="submenu-label">Calendar</span></a></li>
                                <li><a href="table.html"><span class="submenu-label">Table</span></a></li>
                                <li><a href="widget.html"><span class="submenu-label">Widget</span></a></li>
                                <li><a href="form_element.html"><span class="submenu-label">Form Element</span></a></li>
                                <li><a href="form_wizard.html"><span class="submenu-label">Form Wizard</span></a></li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="timeline.html">
                                <span class="menu-icon">
                                    <i class="fa fa-clock-o fa-lg"></i> 
                                </span>
                                <span class="text">
                                    Timeline
                                </span>
                                <span class="menu-hover"></span>
                            </a>
                        </li>
                        <li>
                            <a href="gallery.html">
                                <span class="menu-icon">
                                    <i class="fa fa-picture-o fa-lg"></i> 
                                </span>
                                <span class="text">
                                    Gallery
                                </span>
                                <span class="menu-hover"></span>
                            </a>
                        </li>
                        <li>
                            <a href="inbox.html">
                                <span class="menu-icon">
                                    <i class="fa fa-envelope fa-lg"></i> 
                                </span>
                                <span class="text">
                                    Inbox
                                </span>
                                <span class="badge badge-danger bounceIn animation-delay6">4</span>
                                <span class="menu-hover"></span>
                            </a>
                        </li>
                        <li>
                            <a href="email_selection.html">
                                <span class="menu-icon">
                                    <i class="fa fa-tasks fa-lg"></i> 
                                </span>
                                <span class="text">
                                    Email Template
                                </span>
                                <small class="badge badge-warning bounceIn animation-delay7">New</small>
                                <span class="menu-hover"></span>
                            </a>
                        </li>
                        <li class="openable">
                            <a href="#">
                                <span class="menu-icon">
                                    <i class="fa fa-magic fa-lg"></i> 
                                </span>
                                <span class="text">
                                    Multi-Level menu
                                </span>
                                <span class="menu-hover"></span>
                            </a>
                            <ul class="submenu">
                                <li class="openable">
                                    <a href="#">
                                        <span class="submenu-label">menu 2.1</span>
                                        <span class="badge badge-danger bounceIn animation-delay1 pull-right">3</span>
                                    </a>
                                    <ul class="submenu third-level">
                                        <li><a href="#"><span class="submenu-label">menu 3.1</span></a></li>
                                        <li><a href="#"><span class="submenu-label">menu 3.2</span></a></li>
                                        <li class="openable">
                                            <a href="#">
                                                <span class="submenu-label">menu 3.3</span>
                                                <span class="badge badge-danger bounceIn animation-delay1 pull-right">2</span>
                                            </a>
                                            <ul class="submenu fourth-level">
                                                <li><a href="#"><span class="submenu-label">menu 4.1</span></a></li>
                                                <li><a href="#"><span class="submenu-label">menu 4.2</span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="openable">
                                    <a href="#">
                                        <span class="submenu-label">menu 2.2</span>
                                        <span class="badge badge-success bounceIn animation-delay2 pull-right">3</span>
                                    </a>
                                    <ul class="submenu third-level">
                                        <li class="openable">
                                            <a href="#">
                                                <span class="submenu-label">menu 3.1</span>
                                                <span class="badge badge-success bounceIn animation-delay1 pull-right">2</span>
                                            </a>
                                            <ul class="submenu fourth-level">
                                                <li><a href="#"><span class="submenu-label">menu 4.1</span></a></li>
                                                <li><a href="#"><span class="submenu-label">menu 4.2</span></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><span class="submenu-label">menu 3.2</span></a></li>
                                        <li><a href="#"><span class="submenu-label">menu 3.3</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    
                    <div class="alert alert-info">
                        Welcome to MOU Management System. Do not forget to check all my pages. 
                    </div>
                </div><!-- /main-menu -->
            </div><!-- /sidebar-inner -->
        </aside>

        <div id="main-container">
            <div id="breadcrumb">
                <ul class="breadcrumb">
                     <li><i class="fa fa-home"></i><a href="index.html"> Home</a></li>
                     <li class="active"><?php echo $page;?></li>   
                </ul>
            </div><!-- /breadcrumb-->            