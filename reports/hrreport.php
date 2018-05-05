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
                            <div class="row">
                                <div class="col-md-12">

                                     <table class="table table-bordered">
                                        <thead class="bg-primary">
                                            <tr>
                                                <th class="text-white text-center" colspan="2">Airport Staff Strength as at 31 April, 2018</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Senior Staff Strength</td>
                                                <td>1,227</td>
                                            </tr>
                                            <tr>
                                                <td>Junior Staff Strength</td>
                                                <td>215</td>
                                            </tr>
                                            <tr>
                                                <td>Total</td>
                                                <td>2,323</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    <br><br>
                                    <table class="table table-bordered">
                                        <thead class="bg-primary">
                                            <tr>
                                                <th class="text-white text-center" colspan="2">Update of Staff Record</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Change of Name</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>Change of Next of Kin</td>
                                                <td>NIL</td>
                                            </tr>
                                            <tr>
                                                <td>Request for Confirmation</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>Submission of Completed Brief</td>
                                                <td>17</td>
                                            </tr>
                                            <tr>
                                                <td>Junior staff Confirmerd</td>
                                                <td>NIL</td>
                                            </tr>
                                            <tr>
                                                <td>Senior staff Confirmerd</td>
                                                <td>24</td>
                                            </tr>
                                            <tr>
                                                <td>Change of Next of Kin</td>
                                                <td>NIL</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    <br><br>
                                    <table class="table table-bordered">
                                        <thead class="bg-primary">
                                            <tr>
                                                <th class="text-white text-center" colspan="2">Recruitment/Posting</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Total Number of Recruited Junior Staff</td>
                                                <td>NIL</td>
                                            </tr>
                                            <tr>
                                                <td>Total Number of Recruited Senior Staff</td>
                                                <td>NIL</td>
                                            </tr>
                                            <tr>
                                                <td>Total Number Posted In</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td>Total Number Posted Out</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td>Secondment</td>
                                                <td>NIL</td>
                                            </tr>
                                            <tr>
                                                <td>Transfer of Service</td>
                                                <td>NIL</td>
                                            </tr>
                                            <tr>
                                                <td>Contract Appointment</td>
                                                <td>NIL</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
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