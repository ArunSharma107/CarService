<!-- CodeIgniter function to extend the admin dashboard layout -->
<?=  $this->extend('layouts/admin_dashboard_layout') ?>

<?= $this->section('main-content')?>
<div class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-sm-auto">
                            <div class="page-header-title">
                                <h5 class="mb-0">Admin Dashboard</h5>
                            </div>
                        </div>
                         
                    </div>
                </div>
            </div>
            
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ Row 1 ] start -->
                <div class="col-md-6 col-xl-4">
                    <div class="card statistics-card-1">
                        <div class="card-header d-flex align-items-center justify-content-between py-3">
                            <h5>Featured Countries</h5>
                            <div class="dropdown">
                                <a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none" href="#"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="material-icons-two-tone f-18">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">View</a>
                                    <a class="dropdown-item" href="#">Edit</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <img src="<?= base_url('public/admin_assets/assets/images/widget/img-status-1.svg')?>" alt="img"
                                class="img-fluid img-bg h-100">
                            <div class="d-flex align-items-center">
                                <h3 class="f-w-600 d-flex align-items-center m-b-0"><small>+</small>4 </h3>
                                
                            </div>
                            <p class="text-muted mb-2 text-sm mt-3">Add, Edit or Delete Countries</p>
                            <div class="progress" style="height: 7px">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 16%"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="card statistics-card-1">
                        <div class="card-header d-flex align-items-center justify-content-between py-3">
                            <h5>Featured Cities</h5>
                            <div class="dropdown">
                                <a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none" href="#"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="material-icons-two-tone f-18">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">View</a>
                                    <a class="dropdown-item" href="#">Edit</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <img src="<?= base_url('public/admin_assets/assets/images/widget/img-status-2.svg') ?>" alt="img" class="img-fluid img-bg">
                            <div class="d-flex align-items-center">
                                <h3 class="f-w-600 d-flex align-items-center m-b-0"><small
                                        class="text-muted">+</small>20</h3>
                            </div>
                            <p class="text-muted mb-2 text-sm mt-3">Add,Edit or Delete Cities</p>
                            <div class="progress" style="height: 7px">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 75%"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="card statistics-card-1">
                        <div class="card-header d-flex align-items-center justify-content-between py-3">
                            <h5>Registered Users</h5>
                            <div class="dropdown">
                                <a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none" href="#"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="material-icons-two-tone f-18">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">View</a>
                                    <a class="dropdown-item" href="#">Edit</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <img src="<?= base_url('public/admin_assets/assets/images/widget/img-status-3.svg')?>" alt="img" class="img-fluid img-bg">
                            <div class="d-flex align-items-center">
                                <h3 class="f-w-600 d-flex align-items-center m-b-0"><small
                                        class="text-muted">+</small>7</h3>
                                
                            </div>
                            <p class="text-muted mb-2 text-sm mt-3">Edit or Delete Users</p>
                            <div class="progress" style="height: 7px">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 28%"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- [ Row 1 ] end -->
                
            
            </div>
            <!-- [ Main Content ] end -->
        </div>
</div>

<?= $this->endSection() ?>
 