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
                                <div class="col-md-7">
                                    <h3>Commercial Department</h3>
                                </div>
                                <div class="col-md-5 text-left">
                                    <h5 class="text-danger bold">Exchange Rate: 
                                        <small>$1 = ₦360, € = ₦441.86</small></h5>
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
                            
                            <br><br><br>
                            <div class="row">

                                <div class="col-md-12 margin">

                                    <div class="row">
                                      <div class="col-md-12 text-center divcolor divborder">
                                        <h4>Revenue Generated</h4>
                                      </div>
                                      
                                    </div>
                                    <br>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>₦ Naira</label>
                                                  <input type="text" class="form-control">
                                              </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>$ Dollar</label>
                                                  <input type="text" class="form-control">
                                              </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>€ Euro</label>
                                                  <input type="text" class="form-control">
                                              </div>
                                        </div>
                                        <div class="col-md-12 text-right">
                                            <button class="btn btn-danger btn-sm">ADD MORE</button>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-12 margin">

                                    <div class="row">
                                      <div class="col-md-12 text-center divcolor">
                                        <h4>Expenditure</h4>
                                      </div>
                                      
                                    </div>
                                    <br>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>₦ Naira</label>
                                                  <input type="text" class="form-control">
                                              </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>$ Dollar</label>
                                                  <input type="text" class="form-control">
                                              </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>€ Euro</label>
                                                  <input type="text" class="form-control">
                                              </div>
                                        </div>
                                        <div class="col-md-12 text-right">
                                            <button class="btn btn-danger btn-sm">ADD MORE</button>
                                        </div>

                                    </div>

                                </div>    

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Attachment</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                                <div class="col-md-12 text-right">
                                    <button class="btn btn-success">Submit</button>
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