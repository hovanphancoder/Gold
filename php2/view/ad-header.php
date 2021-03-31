<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description">
    <meta content="Coderthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App favicon -->
    <link rel="shortcut icon" href="img/camera.png">

    <!-- App css -->
    <!-- <link rel="stylesheet" href="css/product.css"> -->
    <link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
    <link href="assets\css\icons.min.css" rel="stylesheet" type="text/css">
    <link href="assets\css\app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet">
    <style>
    .text_editor {
        height: 300px;
    }
    </style>
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">
        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <!-- <li class="dropdown notification-list dropdown d-none d-lg-inline-block ml-2">
                    <a class="nav-link dropdown-toggle mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="assets\images\flags\us.jpg" alt="lang-image" height="12">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        item
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <img src="assets\images\flags\germany.jpg" alt="lang-image" class="mr-1" height="12"> <span class="align-middle">German</span>
                </a>

                item
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <img src="assets\images\flags\italy.jpg" alt="lang-image" class="mr-1" height="12"> <span class="align-middle">Italian</span>
                </a>

                item
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <img src="assets\images\flags\spain.jpg" alt="lang-image" class="mr-1" height="12"> <span class="align-middle">Spanish</span>
                </a>

                item
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <img src="assets\images\flags\russia.jpg" alt="lang-image" class="mr-1" height="12"> <span class="align-middle">Russian</span>
                </a>

        </div>
        </li> -->
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="mdi mdi-bell-outline noti-icon"></i>
                        <span class="noti-icon-badge"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="font-16 text-white m-0">
                                <span class="float-right">
                                    <a href="" class="text-white">
                                        <small>Clear All</small>
                                    </a>
                                </span>Notification
                            </h5>
                        </div>

                        <div class="slimscroll noti-scroll">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-success">
                                    <i class="mdi mdi-settings-outline"></i>
                                </div>
                                <p class="notify-details">New settings
                                    <small class="text-muted">There are new settings available</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info">
                                    <i class="mdi mdi-bell-outline"></i>
                                </div>
                                <p class="notify-details">Updates
                                    <small class="text-muted">There are 2 new updates available</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-danger">
                                    <i class="mdi mdi-account-plus"></i>
                                </div>
                                <p class="notify-details">New user
                                    <small class="text-muted">You have 10 unread messages</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info">
                                    <i class="mdi mdi-comment-account-outline"></i>
                                </div>
                                <p class="notify-details">Caleb Flakelar commented on Admin
                                    <small class="text-muted">4 days ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-secondary">
                                    <i class="mdi mdi-heart"></i>
                                </div>
                                <p class="notify-details">Carlos Crouch liked
                                    <b>Admin</b>
                                    <small class="text-muted">13 days ago</small>
                                </p>
                            </a>
                        </div>

                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item text-primary notify-item notify-all">
                            View all
                            <i class="fi-arrow-right"></i>
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="mdi mdi-email-outline noti-icon"></i>
                        <span class="noti-icon-badge"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="font-16 text-white m-0">
                                <span class="float-right">
                                    <a href="" class="text-white">
                                        <small>Clear All</small>
                                    </a>
                                </span>Messages
                            </h5>
                        </div>

                        <div class="slimscroll noti-scroll">
                            <div class="inbox-widget">

                                <?php
                            foreach($showContact as $g){echo'
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets\images\users\avatar-9.jpg"
                                                class="rounded-circle" alt=""></div>
                                        <p class="inbox-item-author">'.$g['usernme'].'</p>
                                        <p class="inbox-item-text text-truncate">'.$g['content'].'</p>
                                    </div>
                                </a>
                                ';}?>

                            </div>
                            <!-- end inbox-widget -->

                        </div>
                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item text-primary notify-item notify-all">
                            View all
                            <i class="fi-arrow-right"></i>
                        </a>
                    </div>
                </li>
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="assets\images\users\avatar-9.jpg" alt="user-image" class="rounded-circle">
                        <span class="d-none d-sm-inline-block ml-1 font-weight-medium">Hồ Văn Phán</span>
                        <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow text-white m-0">Welcome !</h6>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-account-outline"></i>
                            <span>Profile</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-settings-outline"></i>
                            <span>Settings</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-lock-outline"></i>
                            <span>Lock Screen</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="index.php?ctrl=logout" class="dropdown-item notify-item">
                            <i class="mdi mdi-logout-variant"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list">
                    <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                        <i class="mdi mdi-settings-outline noti-icon"></i>
                    </a>
                </li>

            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="index.html" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="img\camera.png" alt="" height="22">
                        <!-- <span class="logo-lg-text-dark">Uplon</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-lg-text-dark">U</span> -->
                        <img src="img\camera.png" alt="" height="24">
                    </span>
                </a>

                <a href="admin.php" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="img\camera.png" alt="" height="22">
                        <!-- <span class="logo-lg-text-dark">Uplon</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-lg-text-dark">U</span> -->
                        <img src="assets\images\logo-sm-light.png" alt="" height="24">
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile waves-effect waves-light">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </li>

                <li class="d-none d-sm-block">
                    <form class="app-search">
                        <div class="app-search-box">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </li>


            </ul>
        </div>
        <!-- end Topbar -->


        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="slimscroll-menu">

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul class="metismenu" id="side-menu">

                        <li class="menu-title">Navigation</li>

                        <li>
                            <a href="index.php">
                                <i class="mdi mdi-view-dashboard"></i>
                                <span>Home</span>
                            </a>
                        </li>


                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-content-copy"></i>
                                <span> Trang </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="index.php?ctrl=product">product</a></li>
                                <li><a href="index.php?ctrl=catalog">catalog</a></li>
                                <li><a href="index.php?ctrl=brand">Brand</a></li>
                                <li><a href="index.php?ctrl=cart">cart</a></li>
                                <li><a href="index.php?ctrl=user">User</a></li>


                                <!-- <li><a href="pages-timeline.html">Timeline</a></li>
                                <li><a href="pages-invoice.html">Invoice</a></li>
                                <li><a href="pages-pricing.html">Pricing</a></li>
                                <li><a href="pages-gallery.html">Gallery</a></li>
                                <li><a href="pages-maintenance.html">Maintenance</a></li>
                                <li><a href="pages-comingsoon.html">Coming Soon</a></li> -->
                            </ul>
                        </li>



                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-puzzle-outline"></i>
                                <span> Widgets </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="widgets-tiles.html">Tile Box</a></li>
                                <li><a href="widgets-charts.html">Chart Widgets</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-file-document-box-check-outline"></i>
                                <span class="badge badge-warning badge-pill float-right">8</span>
                                <span> Forms </span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="form-elements.html">General Elements</a></li>
                                <li><a href="form-advanced.html">Advanced Form</a></li>
                                <li><a href="form-validation.html">Form Validation</a></li>
                                <li><a href="form-pickers.html">Form Pickers</a></li>
                                <li><a href="form-wizard.html">Form Wizard</a></li>
                                <li><a href="form-mask.html">Form Masks</a></li>
                                <li><a href="form-uploads.html">Multiple File Upload</a></li>
                                <li><a href="form-xeditable.html">X-editable</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-table-settings"></i>
                                <span> Tables </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="tables-basic.html">Basic Tables</a></li>
                                <li><a href="tables-datatable.html">Data Tables</a></li>
                                <li><a href="tables-responsive.html">Responsive Table</a></li>
                                <li><a href="tables-tablesaw.html">Tablesaw</a></li>
                            </ul>
                        </li>

                        <!-- <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-poll"></i>
                                <span> Charts </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="charts-flot.html">Flot Charts</a></li>
                                <li><a href="charts-morris.html">Morris Charts</a></li>
                                <li><a href="charts-chartjs.html">Chartjs</a></li>
                                <li><a href="charts-peity.html">Peity Charts</a></li>
                                <li><a href="charts-chartist.html">Chartist Charts</a></li>
                                <li><a href="charts-c3.html">C3 Charts</a></li>
                                <li><a href="charts-sparkline.html">Sparkline Charts</a></li>
                                <li><a href="charts-knob.html">Jquery Knob</a></li>
                            </ul>
                        </li> -->

                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>