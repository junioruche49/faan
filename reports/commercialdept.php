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
                                    <h3>Commercial Department</h3>
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
                            <table class="table table-bordered">
                                <thead class="bg-primary">
                                    <tr>
                                        <th class="text-white text-center">S/N</th>
                                        <th class="text-white text-center">REVENUE SOURCES</th>
                                        <th class="text-white text-center">ITZ</th>
                                        <th class="text-white text-center">GAT</th>
                                        <th class="text-white text-center">HCT</th>
                                        <th class="text-white text-center">Total Present Month<br> April, 2017</th>
                                        <th class="text-white text-center">VARIANCE</th>
                                        <th class="text-white text-center">%</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>A</td>
                                        <td>COMMERCIAL DATA</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>LANDING INTERNATIONAL</td>
                                        <td class="text-center">374,567,839</td>
                                        <td class="text-center"></td>
                                        <td class="text-center">60,303,045</td>
                                        <td class="text-center">408,589,093</td>
                                        <td class="text-center">460,586,304</td>
                                        <td class="text-center">349,545,565</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>PARKING INTERNATIONAL</td>
                                        <td class="text-center">374,567,839</td>
                                        <td class="text-center"></td>
                                        <td class="text-center">60,303,045</td>
                                        <td class="text-center">408,589,093</td>
                                        <td class="text-center">460,586,304</td>
                                        <td class="text-center">349,545,565</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>AVOIBRIDGE INTERNATIONAL</td>
                                        <td class="text-center">374,567,839</td>
                                        <td class="text-center"></td>
                                        <td class="text-center">60,303,045</td>
                                        <td class="text-center">408,589,093</td>
                                        <td class="text-center">460,586,304</td>
                                        <td class="text-center">349,545,565</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>LANDING(DOMESTIC)</td>
                                        <td class="text-center"></td>
                                        <td class="text-center">374,567,839</td>
                                        <td class="text-center"></td>
                                        <td class="text-center">408,589,093</td>
                                        <td class="text-center">460,586,304</td>
                                        <td class="text-center">349,545,565</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>PARKING(DOMESTIC)</td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>AVOIBRIDGE DOMESTIC</td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>PSC(INT'L)</td>
                                        <td class="text-center">374,567,839</td>
                                        <td class="text-center"></td>
                                        <td class="text-center">60,303,045</td>
                                        <td class="text-center"></td>
                                        <td class="text-center">460,586,304</td>
                                        <td class="text-center">349,545,565</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>PSC(DOMESTIC)</td>
                                        <td class="text-center">374,567,839</td>
                                        <td class="text-center"></td>
                                        <td class="text-center">60,303,045</td>
                                        <td class="text-center"></td>
                                        <td class="text-center">460,586,304</td>
                                        <td class="text-center">349,545,565</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>CHECK COUNTER RECOVERY</td>
                                        <td class="text-center">374,567,839</td>
                                        <td class="text-center"></td>
                                        <td class="text-center">60,303,045</td>
                                        <td class="text-center"></td>
                                        <td class="text-center">460,586,304</td>
                                        <td class="text-center">349,545,565</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>FUEL CHARGE</td>
                                        <td class="text-center">374,567,839</td>
                                        <td class="text-center"></td>
                                        <td class="text-center">60,303,045</td>
                                        <td class="text-center"></td>
                                        <td class="text-center">460,586,304</td>
                                        <td class="text-center">349,545,565</td>
                                    </tr>
                                    <tr>
                                        <td>SUB-TOTAL (A)</td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                    </tr>
                                    <tr>
                                        <td>B</td>
                                        <td>CARGO</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>DISCRIMINATORY CHARGES</td>
                                        <td class="text-center">374,567,839</td>
                                        <td class="text-center"></td>
                                        <td class="text-center">60,303,045</td>
                                        <td class="text-center"></td>
                                        <td class="text-center">460,586,304</td>
                                        <td class="text-center">349,545,565</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>PORT CHARGES</td>
                                        <td class="text-center">374,567,839</td>
                                        <td class="text-center"></td>
                                        <td class="text-center">60,303,045</td>
                                        <td class="text-center"></td>
                                        <td class="text-center">460,586,304</td>
                                        <td class="text-center">349,545,565</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>AIR CARGO CHARGES</td>
                                        <td class="text-center">374,567,839</td>
                                        <td class="text-center"></td>
                                        <td class="text-center">60,303,045</td>
                                        <td class="text-center"></td>
                                        <td class="text-center">460,586,304</td>
                                        <td class="text-center">349,545,565</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>CVS</td>
                                        <td class="text-center">374,567,839</td>
                                        <td class="text-center"></td>
                                        <td class="text-center">60,303,045</td>
                                        <td class="text-center"></td>
                                        <td class="text-center">460,586,304</td>
                                        <td class="text-center">349,545,565</td>
                                    </tr>
                                    <tr>
                                        <td>SUB-TOTAL (B)</td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
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