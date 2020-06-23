<?php include_once 'authentication.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>LIS | DASHBOARD</title>

    <!-- Data Tables-->
  <link href="assets/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body ng-app="sp_profile" ng-controller="sp_profCtrl" account-profile>
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="index.php">
                    <img src="images/icon/logo-white.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="{{accountProfile.picture}}"/>
                    </div>
                    <h4 class="name">{{accountProfile.fullname}}</h4>
                    <a href="javascript:;" logout-account>Sign out</a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="incomingcomm.php">
                                        <i class="fas fa-tachometer-alt"></i>Incoming Communications</a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="fas fa-tachometer-alt"></i>Archived Communication</a>
                                </li>
                            </ul>
                        </li>
                      
                        <li class="has-sub">
                            <a class = "js-arrow" href="#">
                                <i class="fa fa-mail-forward"></i>Referrals</a>
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="javascript:;">
                                <i class="fas fa-table"></i>List Referrals</a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="far fa-check-square"></i>Communication for Referrals</a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fas fa-calendar-alt"></i>View Archived Referrals</a>
                        </li>
                        </ul>

                        </li>

                         <li class="has-sub">
                            <a class = "js-arrow" href="#">
                                <i class="fa fa-mail-forward"></i>Committee Reports</a>
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="javascript:;">
                                <i class="fas fa-table"></i>Committee Reports for Ordinance</a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="far fa-check-square"></i>Committee Reports for Resolutions</a>
                        </li>
                        </ul>

                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-gears"></i>Maintenance
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="sp_profile.php">
                                        <i class="fab fa-flickr"></i>Users</a>
                                </li>
                                <li>
                                    <a href="group.php">
                                        <i class="fas fa-comment-alt"></i>Groups</a>
                                </li>
                                <li>
                                    <a href="origin.php">
                                        <i class="far fa-window-maximize"></i>Origin</a>
                                </li>
                                <li>
                                    <a href="position.php">
                                        <i class="far fa-window-maximize"></i>Position</a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="far fa-window-maximize"></i>Agencies</a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="far fa-window-maximize"></i>Categories</a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="far fa-window-maximize"></i>Committees</a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="far fa-window-maximize"></i>Department</a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="far fa-window-maximize"></i>Origin</a>
                              
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="far fa-window-maximize"></i>Form</a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="far fa-window-maximize"></i>Publication</a>
                                </li>

                                <li>
                                    <a href="javascript:;">
                                        <i class="far fa-window-maximize"></i>Add Old Resolution</a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="far fa-window-maximize"></i>Add Old Ordinance</a>
                                </li>
                                </ul>
                        </li>
                                <li>
                                <a href="javascript:;">
                                <i class="far fa-file"></i>Resolution
                                </a>
                                </li>
                                <li>
                                <a href="javascript:;">
                                <i class="far fa-file"></i>Ordinance
                                </a>
                                </li>


                                <li class="has-sub">
                            <a class = "js-arrow" href="#">
                                <i class="fa fa-mail-forward"></i>Furnish</a>
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="javascript:;">
                                <i class="fas fa-table"></i>Furnish Resolution</a>
                        </li>
                        </ul>

                        </li>
                        <li class="has-sub">
                            <a class = "js-arrow" href="#">
                                <i class="fa fa-mail-forward"></i>Reports</a>
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="javascript:;">
                                <i class="fas fa-table"></i>Furnish Resolution</a>
                        </li>
                        </ul>

                        </li>
                           
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                                </a>
                            </div>
                            <div class="header-button2">
                               
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                                <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-globe"></i>Language</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-pin"></i>Location</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-email"></i>Email</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-notifications"></i>Notifications</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                <div class="logo">
                    <a href="#">
                        <img src="images/icon/logo-white.png" alt="Cool Admin" />
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2">
                    <div class="account2">
                        <div class="image img-cir img-120">
                            <img src="{{accountProfile.picture}}" alt="John Doe" />
                        </div>
                        <h4 class="name">john doe</h4>
                        <a href="#">Sign out</a>
                    </div>
                    <nav class="navbar-sidebar2">
                        <ul class="list-unstyled navbar__list">
                            <li class="active has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fas fa-tachometer-alt"></i>Dashboard 1</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fas fa-tachometer-alt"></i>Dashboard 2</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fas fa-tachometer-alt"></i>Dashboard 3</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fas fa-tachometer-alt"></i>Dashboard 4</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="inbox.html">
                                    <i class="fas fa-chart-bar"></i>Inbox</a>
                                <span class="inbox-num">3</span>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-shopping-basket"></i>eCommerce</a>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-trophy"></i>Features
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="table.html">
                                            <i class="fas fa-table"></i>Tables</a>
                                    </li>
                                    <li>
                                        <a href="form.html">
                                            <i class="far fa-check-square"></i>Forms</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-calendar-alt"></i>Calendar</a>
                                    </li>
                                    <li>
                                        <a href="map.html">
                                            <i class="fas fa-map-marker-alt"></i>Maps</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-copy"></i>Pages
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="login.html">
                                            <i class="fas fa-sign-in-alt"></i>Login</a>
                                    </li>
                                    <li>
                                        <a href="register.html">
                                            <i class="fas fa-user"></i>Register</a>
                                    </li>
                                    <li>
                                        <a href="forget-pass.html">
                                            <i class="fas fa-unlock-alt"></i>Forget Password</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-desktop"></i>UI Elements
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="button.html">
                                            <i class="fab fa-flickr"></i>Button</a>
                                    </li>
                                    <li>
                                        <a href="badge.html">
                                            <i class="fas fa-comment-alt"></i>Badges</a>
                                    </li>
                                    <li>
                                        <a href="tab.html">
                                            <i class="far fa-window-maximize"></i>Tabs</a>
                                    </li>
                                    <li>
                                        <a href="card.html">
                                            <i class="far fa-id-card"></i>Cards</a>
                                    </li>
                                    <li>
                                        <a href="alert.html">
                                            <i class="far fa-bell"></i>Alerts</a>
                                    </li>
                                    <li>
                                        <a href="progress-bar.html">
                                            <i class="fas fa-tasks"></i>Progress Bars</a>
                                    </li>
                                    <li>
                                        <a href="modal.html">
                                            <i class="far fa-window-restore"></i>Modals</a>
                                    </li>
                                    <li>
                                        <a href="switch.html">
                                            <i class="fas fa-toggle-on"></i>Switchs</a>
                                    </li>
                                    <li>
                                        <a href="grid.html">
                                            <i class="fas fa-th-large"></i>Grids</a>
                                    </li>
                                    <li>
                                        <a href="fontawesome.html">
                                            <i class="fab fa-font-awesome"></i>FontAwesome</a>
                                    </li>
                                    <li>
                                        <a href="typo.html">
                                            <i class="fas fa-font"></i>Typography</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END HEADER DESKTOP-->

            <section>
                <div class="section__content section__content--p30 m-t-20" style="
    top: 75px;
">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mx-auto w-100 col-xl-14">


                                <!-- USER DATA-->
                                <div class="user-data m-b-100">
                                  <div class="x_content" id= "x_content">


                                  </div>
                                </div>


                                <!-- END USER DATA-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright &copy; <?php echo date("Y"); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
    
        <script>
            var resizefunc = [];
        </script>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script> -->
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
     <!--Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>
    <script src="vendor/vector-map/jquery.vmap.js"></script>
    <script src="vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="vendor/vector-map/jquery.vmap.world.js"></script>
    
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>


    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/plugins/peity/jquery.peity.min.js"></script>
    <script src="assets/plugins/datatables/datatables.js"></script>
    <script src="assets/plugins/datatables/datatables.min.js"></script>


    <!-- Main JS-->
    <script src="assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
    <script src="assets/plugins/counterup/jquery.counterup.min.js"></script>
    <script src="assets/plugins/raphael/raphael-min.js"></script>
    <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>
    <script src="assets/js/bootbox.min.js"></script>
    <script src="modules/growl/jquery.bootstrap-growl.js"></script>
    <script src="js/main.js"></script>

  
    <script src="angular/angular.min.js"></script>  
    <script src="modules/bootbox/bootbox.min.js"></script>
    <script src="modules/fullscreen.js"></script>
    <script src="modules/blockui/blockui.js"></script>
    <script src="modules/bootstrap-modal.js"></script>
    <script src="modules/validation/validate.js"></script>
    <script src="modules/growl/growl.js"></script>
    

    <script src="modules/account.js"></script>
    <script src="modules/sp_profile.js"></script>
    <script src="controllers/sp_profile.js"></script>

</body>

</html>
<!-- end document-->