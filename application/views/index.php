<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fox Design</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url("assets/css/bootstrap.min.css "); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/fonts/css/font-awesome.min.css "); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/css/animate.min.css "); ?>" rel="stylesheet">
    <!-- Custom styling plus plugins -->
    <link href="<?php echo base_url("assets/css/custom.css "); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/css/maps/jquery-jvectormap-2.0.3.css "); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url("assets/css/icheck/flat/green.css "); ?>" rel="stylesheet" />
    <link href="<?php echo base_url("assets/css/floatexamples.css "); ?>" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url("assets/js/jquery.min.js "); ?>"></script>
    <script src="<?php echo base_url("assets/js/nprogress.js "); ?>"></script>
    <script src="<?php echo base_url("assets/menu/js.html "); ?>"></script>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Fox Design</span></a>
                    </div>
                    <div class="clearfix"></div>
                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Chào,</span>
                            <h2>Hana Tiên</h2>
                        </div>
                    </div>
                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>Cài đặt chung</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-home"></i> Trang Chủ <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="thongtinthanhvien.php">Thông Tin Thành Viên</a>
                                        </li>
                                        <li><a href="giaovien.php">Giáo Viên Hướng Dẫn</a>
                                        </li>
                                        <li><a href="tailieu.php">Tài Liệu Tham Khảo</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                    <!-- /sidebar menu -->
                    <!-- /menu prile quick info -->
                </div>
            </div>
            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="images/img.jpg" alt="">Hana Tiên
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a href="javascript:;">  Profile</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge bg-red pull-right">50%</span>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Help</a>
                                    </li>
                                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->
            <!-- page content -->
            <div class="right_col" role="main">
                <div id="formInput">
                    <?php echo $this->load->view($view); ?>
                </div>
                <!-- /page content -->
                <!-- footer content -->
                <footer>
                    <div class="copyright-info">
                        <p class="pull-right">@Copyright by <a href="https://facebook.com/camtien1503">Hana Tiên</a>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
            <!-- /page content -->
        </div>
    </div>
    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>
    
    <!--javascrip-->
    <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>

    <!-- gauge js -->
    <script type="text/javascript" src="<?php echo base_url("assets/js/gauge/gauge.min.js "); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/gauge/gauge_demo.js "); ?>"></script>
    <!-- bootstrap progress js -->
    <script type="text/javascript" src="<?php echo base_url("assets/js/progressbar/bootstrap-progressbar.min.js "); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/nicescroll/jquery.nicescroll.min.js "); ?>"></script>
    <!-- icheck -->
    <script type="text/javascript" src="<?php echo base_url("assets/js/icheck/icheck.min.js "); ?>"></script>
    <!-- daterangepicker -->
    <script type="text/javascript" src="<?php echo base_url("assets/js/moment/moment.min.js "); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/datepicker/daterangepicker.js "); ?>"></script>
    <!-- chart js -->
    <script type="text/javascript" src="<?php echo base_url("assets/js/chartjs/chart.min.js "); ?>"></script>

    <script type="text/javascript" src="<?php echo base_url("assets/js/custom.js "); ?>"></script>

    <!-- flot js -->
    <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
    <script type="text/javascript" src="<?php echo base_url("assets/js/flot/jquery.flot.js "); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/flot/jquery.flot.pie.js "); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/flot/jquery.flot.orderBars.js "); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/flot/jquery.flot.time.min.js "); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/flot/date.js "); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/flot/jquery.flot.spline.js "); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/flot/jquery.flot.stack.js "); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/flot/curvedLines.js "); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/flot/jquery.flot.resize.js "); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/maps/jquery-jvectormap-2.0.3.min.js "); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/maps/gdp-data.js "); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/maps/jquery-jvectormap-world-mill-en.js "); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/maps/jquery-jvectormap-us-aea-en.js "); ?>"></script>
    <!-- pace -->
    <script type="text/javascript" src="<?php echo base_url("assets/js/pace/pace.min.js "); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/skycons/skycons.min.js "); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/myJS.js "); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/script/getContent.js "); ?>"></script>
    
    <!-- /footer content -->
</body>

</html>