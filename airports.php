<?php include("../config.php") ?>
<?php $title = "Airports"; ?>
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
                                    <h3>Airports</h3>
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
                                        <th class="text-white">S/N</th>
                                        <th class="text-white">Airport</th>
                                        <th class="text-white">Location</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="align-middle">1</td>
                                        <td class="align-middle">Murtala Muhammed International Airport</td>
                                        <td class="align-middle">Lagos State</td>
                                        
                                    </tr>
                                    <tr>
                                        <td class="align-middle">2</td>
                                        <td class="align-middle">Port Harcourt International Airport</td>
                                        <td class="align-middle">Rivers State</td>
                                        
                                    </tr>
                                    <tr>
                                        <td class="align-middle">3</td>
                                        <td class="align-middle">Nnamdi Azikwe International Airport</td>
                                        <td class="align-middle">FCT Abuja</td>
                                        
                                    </tr>
                                    <tr>
                                        <td class="align-middle">4</td>
                                        <td class="align-middle">Mallam Aminu Kano International Airport</td>
                                        <td class="align-middle">Kano State</td>
                                        
                                    </tr>
                                    <tr>
                                        <td class="align-middle">5</td>
                                        <td class="align-middle">Akanu Ibiam International Airport</td>
                                        <td class="align-middle">Akwa Ibom State</td>
                                        
                                    </tr>
                                    <tr>
                                        <td class="align-middle">6</td>
                                        <td class="align-middle">Margaret Ekpo International Airport</td>
                                        <td class="align-middle">Crossrivers State</td>
                                        
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