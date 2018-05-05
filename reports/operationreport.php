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
                                    <h3>Operation Report</h3>
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
                                <div class="col-md-12 text-center divcolor">
                                    <h4>INTERNATIONAL PASSENGERS AND AIRCRAFT MOVEMENT</h4>
                                </div>
                            </div>

                            <br><br>

                            

                            <table class="table table-bordered" id="tableID">
                                <thead class="bg-primary">
                                    <tr>
                                        <th class="text-white text-center" colspan="8">PASSENGERS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td class="text-center" colspan="4">SCHEDULED</td>
                                        <td class="text-center" colspan="3">NON-SCHEDULED</td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td>ARR</td>
                                        <td>DEP</td>
                                        <td>TRANS</td>
                                        <td>TOTAL</td>
                                        <td>ARR</td>
                                        <td>DEP</td>
                                        <td>TOTAL</td>
                                    </tr>
                                    <tr>
                                        <td>ECOWAS (SUB-REGION)</td>
                                        <td>22,323</td>
                                        <td>23,343</td>
                                        <td>2,345</td>
                                        <td>46,434</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>AFRICA (REGION)</td>
                                        <td>22,323</td>
                                        <td>23,343</td>
                                        <td>2,345</td>
                                        <td>46,434</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>OTHERS</td>
                                        <td>22,323</td>
                                        <td>23,343</td>
                                        <td>2,345</td>
                                        <td>46,434</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>TOTAL</td>
                                        <td>22,323</td>
                                        <td>23,343</td>
                                        <td>2,345</td>
                                        <td>46,434</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>AUG 2015</td>
                                        <td>22,323</td>
                                        <td>23,343</td>
                                        <td>2,345</td>
                                        <td>46,434</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>VAR</td>
                                        <td>22,323</td>
                                        <td>23,343</td>
                                        <td>2,345</td>
                                        <td>46,434</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>%</td>
                                        <td>22,323</td>
                                        <td>23,343</td>
                                        <td>2,345</td>
                                        <td>46,434</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>SEPT 2014</td>
                                        <td>22,323</td>
                                        <td>23,343</td>
                                        <td>2,345</td>
                                        <td>46,434</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>VAR</td>
                                        <td>22,323</td>
                                        <td>23,343</td>
                                        <td>2,345</td>
                                        <td>46,434</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>%</td>
                                        <td>22,323</td>
                                        <td>23,343</td>
                                        <td>2,345</td>
                                        <td>46,434</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br><br><br>

                            <table class="table table-bordered">
                                <thead class="bg-primary">
                                    <tr>
                                        <th class="text-white text-center" colspan="10">AIRCRAFT MOVEMENT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td class="text-center" colspan="3">SCHEDULED</td>
                                        <td class="text-center" colspan="3">NON-SCHEDULED</td>
                                        <td class="text-center" colspan="3">CARGO AC</td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td>LANDING</td>
                                        <td>TAKEOFF</td>
                                        <td>TOTAL</td>
                                        <td>LANDING</td>
                                        <td>TAKEOFF</td>
                                        <td>TOTAL</td>
                                        <td>LANDING</td>
                                        <td>TAKEOFF</td>
                                        <td>TOTAL</td>
                                    </tr>
                                    <tr>
                                        <td>ECOWAS (SUB-REGION)</td>
                                        <td>323</td>
                                        <td>343</td>
                                        <td>345</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>92</td>
                                        <td>92</td>
                                        <td>164</td>
                                    </tr>
                                    <tr>
                                        <td>AFRICA (REGION)</td>
                                        <td>323</td>
                                        <td>343</td>
                                        <td>345</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>92</td>
                                        <td>92</td>
                                        <td>164</td>
                                    </tr>
                                    <tr>
                                        <td>OTHERS</td>
                                        <td>323</td>
                                        <td>343</td>
                                        <td>345</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>92</td>
                                        <td>92</td>
                                        <td>164</td>
                                    </tr>
                                    <tr>
                                        <td>TOTAL</td>
                                        <td>323</td>
                                        <td>343</td>
                                        <td>345</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>92</td>
                                        <td>92</td>
                                        <td>164</td>
                                    </tr>
                                    <tr>
                                        <td>AUG 2015</td>
                                        <td>323</td>
                                        <td>343</td>
                                        <td>345</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>92</td>
                                        <td>92</td>
                                        <td>164</td>
                                    </tr>
                                    <tr>
                                        <td>VAR</td>
                                        <td>323</td>
                                        <td>343</td>
                                        <td>345</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>92</td>
                                        <td>92</td>
                                        <td>164</td>
                                    </tr>
                                    <tr>
                                        <td>%</td>
                                        <td>323</td>
                                        <td>343</td>
                                        <td>345</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>92</td>
                                        <td>92</td>
                                        <td>164</td>
                                    </tr>
                                    <tr>
                                        <td>SEPT 2014</td>
                                        <td>323</td>
                                        <td>343</td>
                                        <td>345</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>92</td>
                                        <td>92</td>
                                        <td>164</td>
                                    </tr>
                                    <tr>
                                        <td>VAR</td>
                                        <td>323</td>
                                        <td>343</td>
                                        <td>345</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>92</td>
                                        <td>92</td>
                                        <td>164</td>
                                    </tr>
                                    <tr>
                                        <td>%</td>
                                        <td>323</td>
                                        <td>343</td>
                                        <td>345</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>92</td>
                                        <td>92</td>
                                        <td>164</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br><br><br><br>


                            <div class="row">
                                <div class="col-md-12 text-center divcolor">
                                    <h4>DOMESTIC PASSENGERS AND AIRCRAFT MOVEMENT</h4>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-md-6">

                                    <table class="table table-bordered">
                                        <thead class="bg-primary">
                                            <tr>
                                                <th class="text-white text-center" colspan="4">PASSENGERS MOVEMENT</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td class="text-center">SCHED</td>
                                                <td class="text-center">NON-SCHED</td>
                                                <td class="text-center">TOTAL</td>
                                            </tr>
                                            <tr>
                                                <td>DISEMBARK</td>
                                                <td>157,455</td>
                                                <td>7,455</td>
                                                <td>257,455</td>
                                            </tr>
                                            <tr>
                                                <td>EMBARK</td>
                                                <td>157,455</td>
                                                <td>7,455</td>
                                                <td>257,455</td>
                                            </tr>
                                            <tr>
                                                <td>TOTAL</td>
                                                <td>157,455</td>
                                                <td>7,455</td>
                                                <td>257,455</td>
                                            </tr>
                                            <tr>
                                                <td>AUG 2015</td>
                                                <td>157,455</td>
                                                <td>7,455</td>
                                                <td>257,455</td>
                                            </tr>
                                            <tr>
                                                <td>VAR</td>
                                                <td>157,455</td>
                                                <td>7,455</td>
                                                <td>257,455</td>
                                            </tr>
                                            <tr>
                                                <td>%</td>
                                                <td>157,455</td>
                                                <td>7,455</td>
                                                <td>257,455</td>
                                            </tr>
                                            <tr>
                                                <td>SEPT 2014</td>
                                                <td>157,455</td>
                                                <td>7,455</td>
                                                <td>257,455</td>
                                            </tr>
                                            <tr>
                                                <td>VAR</td>
                                                <td>157,455</td>
                                                <td>7,455</td>
                                                <td>257,455</td>
                                            </tr>
                                            <tr>
                                                <td>%</td>
                                                <td>157,455</td>
                                                <td>7,455</td>
                                                <td>257,455</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                                <div class="col-md-6">

                                    <table class="table table-bordered">
                                        <thead class="bg-primary">
                                            <tr>
                                                <th class="text-white text-center" colspan="6">AIRCRAFT MOVEMENT</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td class="text-center">SCHED</td>
                                                <td class="text-center">NON-SCHED</td>
                                                <td class="text-center">NON-COMM</td>
                                                <td class="text-center">GEN-AVAIT</td>
                                                <td class="text-center">TOTAL</td>
                                            </tr>
                                            <tr>
                                                <td>LANDING</td>
                                                <td>1,455</td>
                                                <td>550</td>
                                                <td>55</td>
                                                <td>55</td>
                                                <td>2,055</td>
                                            </tr>
                                            <tr>
                                                <td>T/OFF</td>
                                                <td>1,455</td>
                                                <td>550</td>
                                                <td>55</td>
                                                <td>55</td>
                                                <td>2,055</td>
                                            </tr>
                                            <tr>
                                                <td>TOTAL</td>
                                                <td>1,455</td>
                                                <td>550</td>
                                                <td>55</td>
                                                <td>55</td>
                                                <td>2,055</td>
                                            </tr>
                                            <tr>
                                                <td>AUG 2015</td>
                                                <td>1,455</td>
                                                <td>550</td>
                                                <td>55</td>
                                                <td>55</td>
                                                <td>2,055</td>
                                            </tr>
                                            <tr>
                                                <td>VAR</td>
                                                <td>1,455</td>
                                                <td>550</td>
                                                <td>55</td>
                                                <td>55</td>
                                                <td>2,055</td>
                                            </tr>
                                            <tr>
                                                <td>%</td>
                                                <td>1,455</td>
                                                <td>550</td>
                                                <td>55</td>
                                                <td>55</td>
                                                <td>2,055</td>
                                            </tr>
                                            <tr>
                                                <td>SEPT 2014</td>
                                                <td>1,455</td>
                                                <td>550</td>
                                                <td>55</td>
                                                <td>55</td>
                                                <td>2,055</td>
                                            </tr>
                                            <tr>
                                                <td>VAR</td>
                                                <td>1,455</td>
                                                <td>550</td>
                                                <td>55</td>
                                                <td>55</td>
                                                <td>2,055</td>
                                            </tr>
                                            <tr>
                                                <td>%</td>
                                                <td>1,455</td>
                                                <td>550</td>
                                                <td>55</td>
                                                <td>55</td>
                                                <td>2,055</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            <br><br><br><br>

                            <div class="row">
                                <div class="col-md-12 text-center divcolor">
                                    <h4>FREIGHT MOVEMENT (KG) INTERNATIONAL & DOMESTIC</h4>
                                </div>
                            </div>
                            <br><br>
                            <table class="table table-bordered">
                                <thead class="bg-primary">
                                    <tr>
                                        <th class="text-white text-center" colspan="3">CHARTER (H.C.T)</th>
                                        <th class="text-white text-center" colspan="2">FREIGHT (ITZ)</th>
                                        <th class="text-white text-center">BAGGAGE (ITZ)</th>
                                        <th class="text-white text-center">DOM</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td class="text-center">CARGO</td>
                                        <td class="text-center">MAIL</td>
                                        <td class="text-center">CARGO</td>
                                        <td class="text-center">MAIL</td>
                                        <td class="text-center">BAGGAGE</td>
                                        <td class="text-center">CARGO</td>
                                    </tr>
                                    <tr>
                                        <td>O/LOAD</td>
                                        <td>5,157,455.31</td>
                                        <td>7455</td>
                                        <td>257,455</td>
                                        <td>57,455</td>
                                        <td>3,557,455</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>UPLIFT</td>
                                        <td>5,157,455.31</td>
                                        <td>7455</td>
                                        <td>257,455</td>
                                        <td>57,455</td>
                                        <td>3,557,455</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>TRANSIT</td>
                                        <td>5,157,455.31</td>
                                        <td>7455</td>
                                        <td>257,455</td>
                                        <td>57,455</td>
                                        <td>3,557,455</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>TOTAL</td>
                                        <td>5,157,455.31</td>
                                        <td>7455</td>
                                        <td>257,455</td>
                                        <td>57,455</td>
                                        <td>3,557,455</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>AUG 2015</td>
                                        <td>5,157,455.31</td>
                                        <td>7455</td>
                                        <td>257,455</td>
                                        <td>57,455</td>
                                        <td>3,557,455</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>VAR</td>
                                        <td>5,157,455.31</td>
                                        <td>7455</td>
                                        <td>257,455</td>
                                        <td>57,455</td>
                                        <td>3,557,455</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>%</td>
                                        <td>5,157,455.31</td>
                                        <td>7455</td>
                                        <td>257,455</td>
                                        <td>57,455</td>
                                        <td>3,557,455</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>SEPT 2014</td>
                                        <td>5,157,455.31</td>
                                        <td>7455</td>
                                        <td>257,455</td>
                                        <td>57,455</td>
                                        <td>3,557,455</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>VAR</td>
                                        <td>5,157,455.31</td>
                                        <td>7455</td>
                                        <td>257,455</td>
                                        <td>57,455</td>
                                        <td>3,557,455</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>%</td>
                                        <td>5,157,455.31</td>
                                        <td>7455</td>
                                        <td>257,455</td>
                                        <td>57,455</td>
                                        <td>3,557,455</td>
                                        <td>0</td>
                                    </tr>
                                </tbody>
                            </table>

                               <br><br><br>

                            <table class="table table-bordered">
                                <thead class="bg-primary">
                                    <tr>
                                        <th class="text-white text-center" colspan="2">TOTAL PASSENGERS</th>
                                        <th class="text-white text-center" colspan="2">TOTAL CARGO(KG)</th>
                                        <th class="text-white text-center" colspan="2">AIRCRAFT MOVEMENT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>SEPT 2015</td>
                                        <td>157,455</td>
                                        <td>SEPT 2015</td>
                                        <td>1,157,455</td>
                                        <td>SEPT 2015</td>
                                        <td>7,455</td>
                                    </tr>
                                    <tr>
                                        <td>AUG 2015</td>
                                        <td>157,455</td>
                                        <td>AUG 2015</td>
                                        <td>1,157,455</td>
                                        <td>AUG 2015</td>
                                        <td>7,455</td>
                                    </tr>
                                    <tr>
                                        <td>AUG 2015</td>
                                        <td>157,455</td>
                                        <td>AUG 2015</td>
                                        <td>1,157,455</td>
                                        <td>AUG 2015</td>
                                        <td>7,455</td>
                                    </tr>
                                    <tr>
                                        <td>VAR</td>
                                        <td>-57,455</td>
                                        <td>VAR</td>
                                        <td>-57,455</td>
                                        <td>VAR</td>
                                        <td>36</td>
                                    </tr>
                                    <tr>
                                        <td>%</td>
                                        <td>-5.1</td>
                                        <td>%</td>
                                        <td>-7.4</td>
                                        <td>%</td>
                                        <td>0.4</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                            

                        </div>
                    </div>

                
                <!-- END PLACE PAGE CONTENT HERE -->
                </div>
                <!-- END CONTAINER FLUID -->
            </div>
            <!-- END PAGE CONTENT -->

            

    <?php include("../_partials/footer.php") ?>