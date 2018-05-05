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
                                    <h3>Users</h3>
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
                <div class="row">
                        <div class="col-md-12 py-4 text-right">
                            <button class="btn btn-lg btn-primary" data-toggle="modal" data-target="#newResidentModal">Add New User</button>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-block">
                            <table class="table table-bordered">
                                <thead class="bg-primary">
                                    <tr>
                                        <th class="text-white">S/N</th>
                                        <th class="text-white">Name</th>
                                        <th class="text-white">Airport</th>
                                        <th class="text-white">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="align-middle">1</td>
                                        <td class="align-middle">Francis Bells</td>
                                        <td class="align-middle">Murtala Muhammed International Airport</td>
                                        <td class="align-middle">

                                            <div class="btn-group">
                                              <button type="button" class="btn btn-danger">Active</button>
                                              <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                              </button>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Disable</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                              </div>
                                            </div>

                                            
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td class="align-middle">2</td>
                                        <td class="align-middle">John Wick</td>
                                        <td class="align-middle">Port Harcourt International Airport</td>
                                        <td class="align-middle">

                                            <div class="btn-group">
                                              <button type="button" class="btn btn-danger">Active</button>
                                              <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                              </button>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Disable</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                              </div>
                                            </div>

                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td class="align-middle">3</td>
                                        <td class="align-middle">Paul Allen</td>
                                        <td class="align-middle">Nnamdi Azikwe International Airport</td>
                                        <td class="align-middle">

                                            <div class="btn-group">
                                              <button type="button" class="btn btn-danger">Active</button>
                                              <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                              </button>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Disable</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                              </div>
                                            </div>

                                        </td>
                                        
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
            <!-- New Resident Modal -->
            <div class="modal fade" id="newResidentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xlg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">New User Form</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                        <label>Name</label>
                                          <input type="text" class="form-control">
                                      </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                        <label>Contact Details</label>
                                          <input type="text" class="form-control">
                                      </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                        <label>User Type</label>
                                          <select class="form-control">
                                            <option>User</option>
                                            <option>Admin</option>
                                          </select>
                                      </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                        <label>Airport</label>
                                          <select class="form-control">
                                            <option>Select Airport</option>
                                            <option>Murtala Muhammed International Airport</option>
                                            <option>Nnamdi Azikwe International Airport</option>
                                            <option>Mallam Aminu Kano International Airport</option>
                                            <option>Port Harcourt International Airport</option>
                                            <option>Akanu Ibiam International Airport</option>
                                            <option>Margaret Ekpo International Airport, Calabar</option>
                                        </select>
                                      </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-md-12 col-form-label">Description</label>
                                        <div class="col-md-12">
                                          <textarea class="textarea" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Add User</button>
                        </div>
                    </div>
                </div>
            </div>
            

    <?php include("../_partials/footer.php") ?>