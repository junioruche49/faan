<?php include("../config.php") ?>
<?php $title = "Report Creation"; ?>
<?php include("../_partials/header.php") ?>
<?php include("../_partials/sidebar.php") ?>

<style>
    .form-tabs .nav-link{
        font-size: 1rem;
    }
    .modal-xlg{
        width: 900px !important;
        max-width: 1000px !important;
    }
</style>

    <!-- START PAGE-CONTAINER -->
    <div class="page-container">
        
        <?php include("../_partials/navHeader.php") ?>

        <!-- START PAGE CONTENT WRAPPER -->
        <div class="page-content-wrapper">
            <!-- START PAGE CONTENT -->
            <div class="content">
                <!-- START JUMBOTRON -->
                <div class="jumbotron w-100" style="position: fixed; z-index: 400">
                    <div class="container-fluid container-fixed-lg">
                        <!-- <div class="inner"> -->
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h3>Reports of <?php echo date('Y') ." ".date('F') ?></h3>
                                </div>
                            </div>
                        <!-- </div> -->
                    </div>
                </div>
                <!-- END JUMBOTRON -->

                <div style="height: 60px;"></div>

                <!-- START CONTAINER FLUID -->
                <div class="container-fluid container-fixed-lg">
                <!-- BEGIN PlACE PAGE CONTENT HERE -->

                    <div class="card">
                        <div class="card-block">
                            
                            <div class="list-group">
                              <a href="#" class="list-group-item list-group-item-action active">
                                List of Reports
                              </a>
                              <a href="executivesummary.php" target="_" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Executive Summary</a>
                              <a href="operationreport.php" target="_" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                Operations Report</a>
                              <a href="facilityreport.php" target="_" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                              Facility Reports</a>
                              <a href="commercialdept.php" target="_" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                              Commercial Department</a>
                              <a href="hrreport.php" target="_" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Human Resource Report</a>
                              <a href="safetyservice.php" target="_" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Safety Service Department</a>
                              <a href="electricitydept.php" target="_" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Electricity Department</a>
                              <a href="rescueandfirefighting.php" target="_" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Rescue And Fire Fighting</a>
                            </div>

                        </div>
                    </div>

                
                <!-- END PLACE PAGE CONTENT HERE -->
                </div>
                <!-- END CONTAINER FLUID -->
            </div>
            <!-- END PAGE CONTENT -->

            

    <?php include("../_partials/footer.php") ?>