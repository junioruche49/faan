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
                                    <h3>Operations Report</h3>
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

                                <div class="col-md-12">
                                    <br><br>
                                    <div class="row">
                                        
                                      <div class="col-md-12 text-center divcolor">
                                        <h4>Passenger Movement</h4>
                                      </div>
                                      
                                    </div>
                                    <br>
                                    <div class="row">

                                        <div class="col-md-12 text-center">
                                            <h4>International</h4>
                                          </div>

                                        <div class="col-md-6">

                                            <div class="form-group row">
                                                <label for="" class="col-md-12 font-bold col-form-label fontsize">SCHEDULED:</label>
                                                <div class="col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>Arrival</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>Departure</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>Transit</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group row">
                                                <label for="" class="col-md-12 font-bold col-form-label fontsize">NON-SCHEDULED:</label>
                                                <div class="col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>Arrival</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>Departure</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>Transit</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">

                                        <div class="col-md-12 text-center">
                                            <h4>Domestic</h4>
                                          </div>

                                        <div class="col-md-6">

                                            <div class="form-group row">
                                                <label for="" class="col-md-12 font-bold col-form-label fontsize">SCHEDULED:</label>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>Disembark</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>Embark</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group row">
                                                <label for="" class="col-md-12 font-bold col-form-label fontsize">NON-SCHEDULED:</label>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>Disembark</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>Embark</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    
                                </div>
                                <br><br>

                                <div class="col-md-12">

                                    <br><br><br>
                                    <div class="row">
                                      <div class="col-md-12 text-center divcolor">
                                        <h4>Aircraft Movement</h4>
                                      </div>
                                      
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <h4>International</h4>
                                          </div>
                                        <div class="col-md-4">

                                            <div class="form-group row">
                                                <label for="" class="col-md-12 font-bold col-form-label fontsize">SCHEDULED:</label>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>Landing</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>Takeoff's</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-4">

                                            <div class="form-group row">
                                                <label for="" class="col-md-12 font-bold col-form-label fontsize">NON-SCHEDULED:</label>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>Landing</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>Takeoff's</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-4">

                                            <div class="form-group row">
                                                <label for="" class="col-md-12 font-bold col-form-label fontsize">CARGO AC:</label>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>Landing</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>Takeoff's</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <h4>Domestic</h4>
                                          </div>
                                        <div class="col-md-3">

                                            <div class="form-group row">
                                                <label for="" class="col-md-12 font-bold col-form-label fontsize">SCHEDULED:</label>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>Landing</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>Takeoff's</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-3">

                                            <div class="form-group row">
                                                <label for="" class="col-md-12 font-bold col-form-label fontsize">NON-SCHEDULED:</label>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>Landing</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>Takeoff's</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-3">

                                            <div class="form-group row">
                                                <label for="" class="col-md-12 font-bold col-form-label fontsize">NON-COMMERCIAL:</label>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>Landing</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>Takeoff's</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-3">

                                            <div class="form-group row">
                                                <label for="" class="col-md-12 font-bold col-form-label fontsize">GENERAL-AVIATION:</label>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>Landing</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>Takeoff's</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    
                                </div>
                                <br><br>

                                <div class="col-md-12">

                                    <br><br><br>
                                    <div class="row">
                                      <div class="col-md-12 text-center divcolor">
                                        
                                        <h4>Freight Movement</h4>
                                      </div>
                                      
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <h4>Charter (H.C.T.)</h4>
                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group row">
                                                <label for="" class="col-md-12 font-bold col-form-label fontsize">Cargo:</label>
                                                <div class="col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>Offload</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>Uplift</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>Transit</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group row">
                                                <label for="" class="col-md-12 font-bold col-form-label fontsize">Mail:</label>
                                                <div class="col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>Offload</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>Uplift</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>Transit</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <h4>Freight (I.T.Z.)</h4>
                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group row">
                                                <label for="" class="col-md-12 font-bold col-form-label fontsize">Cargo:</label>
                                                <div class="col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>Offload</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>Uplift</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>Transit</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group row">
                                                <label for="" class="col-md-12 font-bold col-form-label fontsize">Mail:</label>
                                                <div class="col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>Offload</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>Uplift</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>Transit</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <h4>Baggage (I.T.Z.)</h4>
                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group row">
                                                <label for="" class="col-md-12 font-bold col-form-label fontsize">Baggages:</label>
                                                <div class="col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>Offload</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>Uplift</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>Transit</label>
                                                          <input type="number" class="form-control">
                                                      </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Attachment</label>
                                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 text-right">
                                            <button class="btn btn-success">Submit</button>
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