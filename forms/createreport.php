<?php include("../config.php") ?>
<?php $title = "Manage Residents"; ?>
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
                                    <h3>Create Report</h3>
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
                            <h4>REPORT CREATION OF MMA SELECT DATE </h4>
                            <form class="form-inline row">
                              <div class="form-group col-md-2">
                                <select class="form-control col-md-12">
                                    <option>Select Month</option>
                                    <option>January</option>
                                    <option>February</option>
                                    <option>March</option>
                                    <option selected="selected">April</option>
                                    <option disabled="disabled">May</option>
                                    <option disabled="disabled">June</option>
                                    <option disabled="disabled">July</option>
                                    <option disabled="disabled">August</option>
                                    <option disabled="disabled">September</option>
                                    <option disabled="disabled">October</option>
                                    <option disabled="disabled">November</option>
                                    <option disabled="disabled">December</option>
                                </select>
                              </div>
                              <div class="form-group mx-sm-3 col-md-2">
                                <select class="form-control col-md-12">
                                    <option>Select Year</option>
                                    <option>2017</option>
                                    <option selected="selected">2018</option>
                                </select>
                              </div>
                              <a href="reportcreation.php" class="btn btn-success">SAVE</a>
                            </form>
                            <!-- <h3> <?php echo date('Y') ." ".strtoupper(date('F')) ?> REPORT CREATION OF MMA <a href="reportcreation.php" class="btn btn-secondary">Click to Proceed</a>  </h3> -->
                        </div>
                    </div>

                
                <!-- END PLACE PAGE CONTENT HERE -->
                </div>
                <!-- END CONTAINER FLUID -->
            </div>
            <!-- END PAGE CONTENT -->

            

    <?php include("../_partials/footer.php") ?>