<?php include("config.php") ?>
<?php $title = "Sample home name"; ?>
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

                        <div class="col-md-10 no-padding b-r b-grey full-height">
                            <div class="full-height placeholder">
                                <!-- START JUMBOTRON -->
                                <div class="jumbotron w-100" style="position: fixed; z-index: 400">
                                    <div class="container-fluid container-fixed-lg">
                                        <!-- <div class="inner"> -->
                                            <div class="row align-items-center">
                                                <div class="col-md-8">
                                                    <h3>Sample Home Name</h3>
                                                </div>
                                                <div class="col-md-2 text-right">
                                                    <h4 class="text-danger bold pr-3">
                                                        79
                                                        <small>Residents</small>
                                                    </h4>
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
                                            <a href="forms/manageResident.php" class="menu-box">
                                                <img class="w-50" src="assets/img/icons/search.png" />
                                                <h5 class="menu">Search Residents</h5>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3 text-center my-3 pointer">
                                            <a href="forms/manageResident.php" class="menu-box">
                                                <img class="w-50" src="assets/img/icons/residentprofile.png" />
                                                <h5 class="menu">Manage Residents</h5>
                                            </a>
                                        </div>
                                        <div class="col-md-3 text-center my-3 pointer">
                                            <a href="forms/manageResident.php" class="menu-box">
                                                <img class="w-50" src="assets/img/icons/emergencyContacts.png" />
                                                <h5 class="menu">Emergency Resident Details</h5>
                                            </a>
                                        </div>
                                        <div class="col-md-3 text-center my-3 pointer">
                                            <a href="forms/manageResident.php" class="menu-box">
                                                <img class="w-50" src="assets/img/icons/progress.png" />
                                                <h5 class="menu">Progress Notes</h5>
                                            </a>
                                        </div>
                                        <div class="col-md-3 text-center my-3 pointer">
                                            <a href="forms/manageResident.php" class="menu-box">
                                                <img class="w-50" src="assets/img/icons/assessment.png" />
                                                <h5 class="menu">Assessments</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 no-padding bg-white full-height">
                            <div style="height: 55px;"></div>
                            <div class="full-height">
                                <h2 class="px-3">To do List</h2>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action pointer" data-toggle="modal" data-target="#todoModal">
                                        Dietry Updates
                                        <span class="badge badge-primary badge-pill pull-right">14</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action pointer" data-toggle="modal" data-target="#todoModal">
                                        Hospitalization
                                        <span class="badge badge-primary badge-pill pull-right">3</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action pointer" data-toggle="modal" data-target="#todoModal">
                                        Initial Assessment
                                        <span class="badge badge-primary badge-pill pull-right">68</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action pointer" data-toggle="modal" data-target="#todoModal">
                                        Progress Notes
                                        <span class="badge badge-primary badge-pill pull-right">30</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT -->
            
            

    <?php include("_partials/footer.php") ?>