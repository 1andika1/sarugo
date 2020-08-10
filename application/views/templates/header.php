<?php
$userData ;
    // var_dump($this->session->userdata);die();
    // check admin
    if(isset($this->session->spradmin)){ 
        $userData = $this->session->spradmin;
    }else if(!isset($this->session->admin)){
        redirect(base_url("admin"));
    }else{
        $userData = $this->session->admin;
    }
    


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/images/logo-bulat.png">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <!-- Title Page-->
    <title>SARUGO | Kabupaten Lima Puluh Kota</title>

    <!-- Fontfaces CSS-->
    <link href="<?= base_url() ?>assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?= base_url() ?>assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?= base_url() ?>assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url() ?>assets/css/theme.css" rel="stylesheet" media="all">


    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> 
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</head>

<body class="animsition">
    <div class="page-wrapper">

        <body class="animsition">
            <div class="page-wrapper">
                <!-- HEADER MOBILE-->
                <header class="header-mobile d-block d-lg-none">
                    <div class="header-mobile__bar">
                        <div class="container-fluid">
                            <div class="header-mobile-inner">
                            <!--<a class="logo" href="home_page">
                            <img src="<?= base_url() ?>assets/images/sarugo-logo-mob.png" alt="CoolAdmin" />
                        </a>--> <h2>SARUGO</h2>
                                <button class="hamburger hamburger--slider" type="button">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                    
                                </button>
                                
                            </div>
                            
                        
                    </div>
                    
                    
                    <nav class="navbar-mobile">
                        
                        <div class="container-fluid">
                            
                            <ul class="navbar-mobile__list list-unstyled">
                                <li>
                                    <a class="js-arrow" href="home_page">
                                        <i class="fas fa-home"></i>Home
                                    </a>
                                </li>
                                <li>
                                    <a href="statis_read">
                                        <i class="fas fa-chart-bar"></i>Halaman Statis</a>
                                </li>
                                <li>
                                    <a href="menu_read">
                                        <i class="fas fa-bars"></i>Menu</a>
                                </li>
                                <li>
                                    <a href="submenu_read">
                                        <i class="fas fa-indent"></i>Sub Menu
                                    </a>
                                </li>
                                <li>
                                    <a href="banner_read">
                                        <i class="fas fa-picture-o"></i>Banner-Slider
                                    </a>
                                </li>
                                <li>
                                    <a href="wisata_read">
                                        <i class="fas fa-location-arrow"></i>Wisata
                                    </a>
                                </li>

                                <li>
                                    <a href="produk_read">
                                        <i class="fas fa-tag"></i>Produk
                                    </a>
                                </li>

                                <li>
                                    <a href="paketwisata_read">
                                        <i class="fas fa-bookmark"></i>Paket Wisata
                                    </a>
                                </li>

                                <li>
                                    <a href="testimoni_read">
                                        <i class="fas fa-comment"></i>Testimoni
                                    </a>
                                </li>

                                <li>
                                    <a href="berita_read">
                                        <i class="fas fa-desktop"></i>Berita
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>
                <!-- END HEADER MOBILE-->


                <!-- PAGE CONTAINER-->
                <div class="page-container">
                    <!-- HEADER DESKTOP-->
                    <header class="header-desktop">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="header-wrap">
                                    <h5>WEBSITE RESMI KAMPUNG WISATA SARIBU RUMAH GADANG</h5>
                                    <!--<form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>-->
                                    <div class="header-button">
                                        <!--<div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                                        <div class="account-wrap">
                                            <div class="account-item clearfix js-item-menu">
                                                <!-- <div class="image">
                                            <img src="images/" />
                                        </div>-->
                                                <div class="content">
                                                    <a class="js-acc-btn" href="#"><?= $userData->username_admin?></a>
                                                </div>
                                                <div class="account-dropdown js-dropdown">
                                                    <div class="info clearfix">
                                                        <!--<div class="image">
                                                            <a href="#">
                                                                <img src="<?= base_url() ?>assets/images/icon/avatar-06.jpg" />
                                                            </a>
                                                        </div>-->
                                                        <div class="content">
                                                            <h5 class="name">
                                                                <a href="#"><?= $userData->username_admin?></a>
                                                            </h5>
                                                            <span class="email"><?= $userData->email_admin ?></span>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                            </div>-->
                                                    <div class="account-dropdown__footer">
                                                        <a href="<?= base_url("admin/login/logout") ?>">
                                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- HEADER DESKTOP-->