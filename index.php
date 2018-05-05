<?php require_once('config.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>FAAN - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="<?php echo url('assets/plugins/pace/pace-theme-flash.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo url('assets/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo url('assets/plugins/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo url('assets/plugins/jquery-scrollbar/jquery.scrollbar.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo url('assets/plugins/select2/css/select2.min.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo url('assets/plugins/switchery/css/switchery.min.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo url('pages/css/pages-icons.css'); ?>" rel="stylesheet" type="text/css">
    <!-- <link class="main-stylesheet" href="<?php echo url('pages/css/themes/corporate.css'); ?>" rel="stylesheet" type="text/css" /> -->
    <link class="main-stylesheet" href="<?php echo url('assets/css/pages.css'); ?>" rel="stylesheet" type="text/css" />
    <style type="text/css">
    .my-auto img{
        position: absolute;
        bottom: 0;
        right: 0;

    }
    .top{
        position: absolute !important;
        top: 10%;
    }
    </style>
    <script type="text/javascript">
    window.onload = function()
    {
      // fix for windows 8
      if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
        document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="pages/css/windows.chrome.fix.css" />'
    }
    </script>
  </head>
  <body class="fixed-header menu-pin menu-behind">
    <div class="login-wrapper ">
        <!-- START Login Background Pic Wrapper-->
        <div class="bg-pic">
            <!-- START Background Pic-->
            <img src="assets/img/01-copy-NXPowerLite-Copy.jpg" data-src="assets/img/01-copy-NXPowerLite-Copy.jpg" data-src-retina="assets/img/01-copy-NXPowerLite-Copy.jpg" alt="" class="lazy">
            <!-- END Background Pic-->
            <!-- START Background Caption-->
            <div class="top text-white p-l-20 m-b-20">
                <h1 class="semi-bold text-white">
                    AIRPORT DATA ANALYSIS SYSTEM
                </h1>
            </div>

            <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">

                <h2 class="semi-bold text-white">
                    FEDERAL AIRPORTS AUTHORITY OF NIGERIA
                </h2>
                <p class="small">
                    Copyright © 2013-2018 FAAN.
                </p>
            </div>
            <!-- END Background Caption-->
        </div>
        <!-- END Login Background Pic Wrapper-->

        <!-- START Login Right Container-->
        <div class="login-container bg-white">
            <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
                <img src="assets/img/faan_logo.png" alt="logo" data-src="assets/img/faan_logo.png" data-src-retina="assets/img/faan_logo.png" class="img-responsive">
                <p class="p-t-35">Sign into your pages account</p>
            
                <!-- START Login Form -->
                <form id="form-login" class="p-t-15" role="form" action="dashboard.php" method="POST">
                    <!-- START Form Control-->
                    <div class="form-group form-group-default">
                        <label>Login</label>
                        <div class="controls">
                            <input type="text" name="username" placeholder="User Name" class="form-control" required>
                        </div>
                    </div>
                    <!-- END Form Control-->

                    <!-- START Form Control-->
                    <div class="form-group form-group-default">
                        <label>Password</label>
                        <div class="controls">
                            <input type="password" class="form-control" name="password" placeholder="Credentials" required>
                        </div>
                    </div>

                    <!-- START Form Control-->
                    <div class="row">
                        <div class="col-md-6 no-padding sm-p-l-10">
                            <div class="checkbox ">
                                <input type="checkbox" value="1" id="checkbox1">
                                <label for="checkbox1">Keep Me Signed in</label>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-center justify-content-end">
                            <a href="#" class="text-info small">Help? Contact Support</a>
                        </div>
                    </div>
                    <!-- END Form Control-->
                    <button class="btn btn-success btn-cons m-t-10" type="submit">Sign in</button>
                </form>
                
                <!--END Login Form-->

                <!-- <div class="pull-bottom sm-pull-bottom">
                    <div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">
                        <div class="col-sm-3 col-md-2 no-padding">
                            <img alt="" class="m-t-5" data-src="assets/img/qola_logo.png" data-src-retina="assets/img/qola_logo_2x.png" height="60" src="assets/img/qola_logo.png" width="60">
                        </div>
                        <div class="col-sm-9 no-padding m-t-10">
                            <p>
                                Copyright Qola &copy; 2018 
                            </p>
                        </div>
                    </div>
                </div> -->

            </div>
                <div class="my-auto">
                    <img src="assets/img/415237-microsoft-azure-logo.jpg" class="img-responsive">
                </div>
        </div>
        <!-- END Login Right Container-->
    </div>
    
    <!-- BEGIN VENDOR JS -->
    <script src="<?php echo url('assets/plugins/jquery/jquery-1.11.1.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo url('assets/plugins/tether/js/tether.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo url('assets/plugins/bootstrap/js/bootstrap.min.js') ?>" type="text/javascript"></script>
    <!-- END VENDOR JS -->
    <script src="<?php echo url('pages/js/pages.min.js') ?>"></script>
  </body>
</html>