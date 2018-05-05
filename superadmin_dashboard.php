<?php include("config.php") ?>
<?php $title = "Dashboard"; ?>
<?php include("_partials/header.php") ?>
<?php include("_partials/sidebar.php") ?>

<style>
    .menu-box:hover .menu{
        transform: scale(1.05);
        transition: all .5s;
    }
    .pointer{
        cursor: pointer;
    }
</style>

    <!-- START PAGE-CONTAINER -->
    <div class="page-container">
        
        <?php include("_partials/navHeader.php") ?>

        <!-- START PAGE CONTENT WRAPPER -->
        <div class="page-content-wrapper full-height">
            <!-- START PAGE CONTENT -->
            <div class="content full-height">
                <div class="container-fluid full-height no-padding">
                    <div class="row full-height no-margin">

                        <div class="col-md-12 no-padding b-r b-grey full-height">
                            <div class="full-height placeholder">
                                <!-- START JUMBOTRON -->
                                <div class="jumbotron w-100" style="position: fixed; z-index: 400">
                                    <div class="container-fluid container-fixed-lg">
                                        <!-- <div class="inner"> -->
                                            <div class="row align-items-center">
                                                <div class="col-md-8">
                                                    <h3>FAAN ADMIN</h3>
                                                </div>
                                            </div>
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <!-- END JUMBOTRON -->

                                <div style="height: 60px;"></div>

                                <div class="container-fluid container-fixed-lg">

                                    <div class="row">
                                        <div class="col-md-3 text-center my-3 pointer">
                                            <a href="reports/viewadminreports.php" class="menu-box">
                                                <img class="w-50" src="assets/img/icons/search4.png" />
                                                <h5 class="menu">View Reports</h5>
                                            </a>
                                        </div>
                                        <div class="col-md-3 text-center my-3 pointer">
                                            <a href="reports/superadmin_airports.php" class="menu-box">
                                                <img class="w-50" src="assets/img/icons/airport.png" />
                                                <h5 class="menu">Airports</h5>
                                            </a>
                                        </div>
                                        <div class="col-md-3 text-center my-3 pointer">
                                            <a href="forms/superadmin_settings.php" class="menu-box">
                                                <img class="w-50" src="assets/img/icons/computer.png" />
                                                <h5 class="menu">Settings</h5>
                                            </a>
                                        </div>
<!--                                         <div class="col-md-3 text-center my-3 pointer">
                                            <a href="forms/complain.php" class="menu-box">
                                                <img class="w-50" src="assets/img/icons/customer-service.png" />
                                                <h5 class="menu">Make a Complain</h5>
                                            </a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT -->
            
            \

    <?php include("_partials/footer.php") ?>