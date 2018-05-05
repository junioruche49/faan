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
                                    <h3>Rescue and Fire Fighting Service</h3>
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

                            <div class="row margin">

                                <div class="col-md-12 text-center divcolor">
                                    <h4>Fire Fighting Service</h4>
                                </div>

                                    <div class="col-md-3">

                                        <div class="form-group row">
                                            <label for="" class="col-md-12 font-bold col-form-label fontsize">Fire Fighting Vehicle:</label>
                                            <div class="col-md-12">
                                                <select class="form-control">
                                                    <option>Select</option>
                                                    <option>Rescue 02 (E-One Titan)</option>
                                                    <option>Kronenburg (P8-01)</option>
                                                    <option>Kronenburg (P6-03)</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-3">

                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                 <div class="form-group">
                                                    <label for="staticEmail" class="col-form-label">WATER</label>
                                                      <input type="text" class="form-control" id="staticEmail">
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-3">

                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="staticEmail" class="col-form-label">Foam</label>
                                                      <input type="text" class="form-control" id="staticEmail">
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-3">

                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="staticEmail" class="col-form-label">Remark</label>
                                                      <input type="text" class="form-control" id="staticEmail">
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                
                                

                            </div>
                            <div class="row margin">
                                <div class="col-md-12 text-center divcolor">
                                    <h4>Challenges</h4>
                                </div>

                                <div class="col-md-12">
                                    <br>
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-md-12 col-form-label">Coment</label>
                                        <div class="col-md-12">
                                          <textarea class="textarea" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row margin">
                                <div class="col-md-12 text-center divcolor">
                                    <h4>Recommendation</h4>
                                  </div>
                                <div class="col-md-12">
                                    <br>
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-md-12 col-form-label">Coment</label>
                                        <div class="col-md-12">
                                          <textarea class="textarea" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row margin">
                                <div class="col-md-12 text-center divcolor">
                                    <h4>Conclussion</h4>
                                  </div>
                                <div class="col-md-12">
                                    <br>
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-md-12 col-form-label">Coment</label>
                                        <div class="col-md-12">
                                          <textarea class="textarea" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
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