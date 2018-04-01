<?php include("config.php") ?>
<?php $title = "Homes"; ?>
<?php include("_partials/header.php") ?>
<?php include("_partials/sidebar.php") ?>

<style>
    .home-box{
        height: 250px;
        background: center center no-repeat;
        background-size: cover;
    }
</style>

    <!-- START PAGE-CONTAINER -->
    <div class="page-container">
        
        <?php include("_partials/navHeader.php") ?>

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
                                    <h3>Pronvice Homes</h3>
                                </div>
                                <div class="col-md-2 text-right">
                                    <h4 class="text-danger bold pr-3">
                                        4318
                                        <small>Residents</small>
                                    </h4>
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

                    <?php foreach(["Alberta", "Manitoba", "Ontario"] as $place){ ?>
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h2><?php echo $place ?></h5>
                            <hr />
                        </div>

                        <?php for($i=1;$i<= 6;$i++){ ?>
                        <div class="col-md-3 mb-3">
                            <div class="card no-border  no-margin">
                                <div class="padding-15">
                                    <div class="item-header clearfix">
                                        <div class="inline m-l-10">
                                            <p class="no-margin">
                                                <strong>Summer Village Residents</strong>
                                            </p>
                                            <p class="no-margin hint-text">
                                                <span class="location semi-bold">
                                                    <i class="fa fa-map-marker"></i>
                                                    23 Sample street, sample town
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="relative">
                                    <div class="no-overflow home-box" style="background-image: url('assets/img/residents/resident<?php echo $i ?>.jpg')">
                                        <!-- <img src="assets/img/residents/resident<?php echo $i ?>.jpg" class="block center-margin relative w-100" alt="Post"> -->
                                    </div>
                                </div>
                                <div class="padding-15">
                                    <div class="list-inline pull-left no-margin">
                                        <a href="menu.php">Open</a>
                                    </div>
                                    <div class="list-inline pull-right no-margin">
                                        <div class="badge badge-danger fs-14 px-3">122/306</div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                    </div>
                    <?php } ?>
                
                <!-- END PLACE PAGE CONTENT HERE -->
                </div>
                <!-- END CONTAINER FLUID -->
            </div>
            <!-- END PAGE CONTENT -->

    <?php include("_partials/footer.php") ?>