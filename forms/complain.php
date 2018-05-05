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
                                    <h3>Make your Complain</h3>
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
                            
                            <div class="row">
                                <div class="col-md-6 offset-md-3">

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <div class="form-group form-group-default">
                                                <label>Subject</label>
                                                  <input type="text" class="form-control">
                                              </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label for="staticEmail" class="col-md-12 col-form-label">Complain</label>
                                                <div class="col-md-12">
                                                  <textarea class="textarea" rows="5"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12 text-center">
                                            <button class="btn btn-danger">Submit</button>
                                        </div>
                                        
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                
                <!-- END PLACE PAGE CONTENT HERE -->
                </div>
                <!-- END CONTAINER FLUID -->
            </div>
            <!-- END PAGE CONTENT -->

            

    <?php include("../_partials/footer.php") ?>