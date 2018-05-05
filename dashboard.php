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
                                                    <h3>Murtala Muhammed International Airport</h3>
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
                                            <a href="forms/createreport.php" class="menu-box">
                                                <img class="w-50" src="assets/img/icons/signing.png" />
                                                <h5 class="menu">Create Reports</h5>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3 text-center my-3 pointer">
                                            <a href="forms/ongoingreport.php" class="menu-box">
                                                <img class="w-50" src="assets/img/icons/clipboard (1).png" />
                                                <h5 class="menu">Ongoing Report</h5>
                                            </a>
                                        </div>
                                        <div class="col-md-3 text-center my-3 pointer">
                                            <a href="reports/viewreports.php" class="menu-box">
                                                <img class="w-50" src="assets/img/icons/search4.png" />
                                                <h5 class="menu">View Reports</h5>
                                            </a>
                                        </div>
                                        <div class="col-md-3 text-center my-3 pointer">
                                            <a href="forms/settings.php" class="menu-box">
                                                <img class="w-50" src="assets/img/icons/computer.png" />
                                                <h5 class="menu">Settings</h5>
                                            </a>
                                        </div>
                                        <div class="col-md-3 text-center my-3 pointer">
                                            <a href="forms/complain.php" class="menu-box">
                                                <img class="w-50" src="assets/img/icons/customer-service.png" />
                                                <h5 class="menu">Make a Complain</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT -->
            
            <div class="modal fade" id="todoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Dietry Update</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Suite no</th>
                                        <th>Name</th>
                                        <th>Assessed Date</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for($i=1;$i<6;$i++){ ?>
                                        <tr>
                                            <td class="align-middle"><?php echo $i ?></td>
                                            <td class="align-middle">102<?php echo $i ?></td>
                                            <td class="align-middle">Gannesse, Kawdinski</td>
                                            <td class="align-middle">05/11/2017</td>
                                            <td>
                                                <button class="btn btn-warning btn-xs">view</button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div> -->
                        </div>
                </div>
            </div>

    <?php include("_partials/footer.php") ?>