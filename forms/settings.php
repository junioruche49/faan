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
                                    <h3>Settings</h3>
                                </div>
                            </div>
                        <!-- </div> -->
                    </div>
                </div>
                <!-- END JUMBOTRON -->

                <div style="height: 60px;"></div>

                <!-- START CONTAINER FLUID -->
                <div class="container-fluid container-fixed-lg">

                    <div class="card">
                        <div class="card-block">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="form-tabs mt-4">
                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">General Info</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Change password</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-currency-tab" data-toggle="pill" href="#pills-currency" role="tab" aria-controls="pills-currency" aria-selected="false">Change Currency</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                                                <div class="row">
                                                    <div class="col-md-6 offset-md-3">

                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <div class="form-group form-group-default">
                                                                    <label>Name</label>
                                                                      <input type="text" class="form-control" value="Francis">
                                                                  </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="form-group form-group-default">
                                                                    <label>Staff Type</label>
                                                                      <input type="text" class="form-control" value="User">
                                                                  </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group form-group-default">
                                                                    <label>Phone Number</label>
                                                                      <input type="text" class="form-control" value="09023948596">
                                                                  </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group form-group-default">
                                                                    <label>Airport</label>
                                                                      <input type="text" class="form-control" value="Murtala Muhammed International Airport" disabled="disabled">
                                                                  </div>
                                                            </div>

                                                            <div class="col-md-12 text-center">
                                                                <button class="btn btn-danger">Submit</button>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>



                                            </div>
                                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                                                <div class="col-md-6 offset-md-3">

                                                    <div class="form-group row">
                                                        <div class="col-md-12">
                                                            <div class="form-group form-group-default">
                                                                <label>New Password</label>
                                                                  <input type="password" class="form-control">
                                                              </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group form-group-default">
                                                                <label>Confirm Password</label>
                                                                  <input type="password" class="form-control">
                                                              </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group form-group-default">
                                                                <label>Old Password</label>
                                                                  <input type="password" class="form-control">
                                                              </div>
                                                        </div>
                                                        <div class="col-md-12 text-center">
                                                            <button class="btn btn-danger">Submit</button>
                                                        </div>
                                                        
                                                    </div>
                                                </div>



                                            </div>
                                            <div class="tab-pane fade" id="pills-currency" role="tabpanel" aria-labelledby="pills-currency-tab">

                                                <div class="col-md-6 offset-md-3">

                                                    <div class="form-group row">
                                                        <div class="col-md-12">
                                                            <div class="form-group form-group-default">
                                                                <label>$ Dollar</label>
                                                                  <input type="text" class="form-control" value="360">
                                                              </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group form-group-default">
                                                                <label>€ Euro</label>
                                                                  <input type="text" class="form-control" value="450">
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