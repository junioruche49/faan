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
                                    <h3>Human Resource Report</h3>
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

                               
                              <div class="col-md-12 text-center divcolor marginbtm">
                                <h4>Human Resource Forms</h4>
                              </div>

                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Senior Staff Strength</label>
                                          <input type="number" class="form-control">
                                      </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Senior Staff Strength</label>
                                          <input type="number" class="form-control">
                                      </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Change of Name</label>
                                          <input type="number" class="form-control">
                                      </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Change of Next of Kin</label>
                                          <input type="number" class="form-control">
                                      </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Confirmation of Appointment</label>
                                          <input type="number" class="form-control">
                                      </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Recuitment</label>
                                          <input type="number" class="form-control">
                                      </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Transfer</label>
                                          <input type="number" class="form-control">
                                      </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Posted In</label>
                                          <input type="number" class="form-control">
                                      </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Posted Out</label>
                                          <input type="number" class="form-control">
                                      </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Conversion/Upgrade</label>
                                          <input type="number" class="form-control">
                                      </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Promotion</label>
                                          <input type="number" class="form-control">
                                      </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Maternity Leave</label>
                                          <input type="number" class="form-control">
                                      </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Casual Leave</label>
                                          <input type="number" class="form-control">
                                      </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Leave of Absence</label>
                                          <input type="number" class="form-control">
                                      </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Nysc</label>
                                          <input type="number" class="form-control">
                                      </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>IT (Industrial Attachment)</label>
                                          <input type="number" class="form-control">
                                      </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Number of Pensioner</label>
                                          <input type="number" class="form-control">
                                      </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Occupant of Staff Quater</label>
                                          <input type="number" class="form-control">
                                      </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Staff Exit (Retirement)</label>
                                          <input type="number" class="form-control">
                                      </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Staff Exit (Withdrawal)</label>
                                          <input type="number" class="form-control">
                                      </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Staff Exit (Termination)</label>
                                          <input type="number" class="form-control">
                                      </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Training And Development</label>
                                          <input type="number" class="form-control">
                                      </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Training</label>
                                          <input type="number" class="form-control">
                                      </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Study Leave</label>
                                          <input type="number" class="form-control">
                                      </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Discipline</label>
                                          <input type="number" class="form-control">
                                      </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Query</label>
                                          <input type="number" class="form-control">
                                      </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Warning</label>
                                          <input type="number" class="form-control">
                                      </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Letter of Advice</label>
                                          <input type="number" class="form-control">
                                      </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Stoppage of Salary</label>
                                          <input type="number" class="form-control">
                                      </div>
                                </div>

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

                
                <!-- END PLACE PAGE CONTENT HERE -->
                </div>
                <!-- END CONTAINER FLUID -->
            </div>
            <!-- END PAGE CONTENT -->

            

    <?php include("../_partials/footer.php") ?>