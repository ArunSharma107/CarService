<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title>CarSales| Admin Dashboard</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="CarSales" content="">
    <meta name="keywords" content=" ">
    <meta name="author" content="Arun Sharma">

    <!-- [Favicon] icon -->
    <!-- <link rel="icon" href="../assets/images/favicon.svg" type="image/x-icon"> -->
    <!-- [Google Font : Public Sans] icon -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="<?= base_url('public/admin_assets/assets/css/style.css');?>" id="main-style-link">
    <!-- data tables css -->
    <link rel="stylesheet" href="<?= base_url('public/admin_assets/assets/css/plugins/dataTables.bootstrap5.min.css'); ?>">
    <!-- fontawesome css file -->
    <link rel="stylesheet" href="<?= base_url('public/assets/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/assets/css/fontawesome.min.css'); ?>">
   


</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-theme="dark" data-pc-sidebar-caption="true" data-pc-direction="ltr"
    data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="pc-loader">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ Sidebar Menu ] start -->
    <nav class="pc-sidebar">
        <div class="navbar-wrapper">
            <div class="m-header">
                <a href="#" class="b-brand text-primary">
                    <!-- ========   Change your logo from here   ============ -->
                    <img src="<?= base_url('public/assets/images/logo/carlogo.png');?>" alt="logo image"
                        class="logo-lg img-fluid rounded-circle" width="50" height="50">
                    <span class="badge bg-primary rounded-pill ms-2 theme-version">
                        <?=  $_SESSION['admin']['admin_id'];?></span>
                </a>
            </div>

            <div class="card pc-user-card">
                <div class="card-body">
                    <div class="nav-user-image">
                        <a data-bs-toggle="collapse" href="#navuserlink">
                            <img src="<?= base_url('public/admin_assets/assets/images/user/avatar-1.jpg');?>"
                                alt="user-image" class="user-avtar rounded-circle">
                        </a>
                    </div>
                    <div class="pc-user-collpsed collapse" id="navuserlink">
                        <h4 class="mb-0"><?=  $_SESSION['admin']['admin_email'];?></h4>
                        <span>Administrator</span>
                        <ul>
                            <li><a class="pc-user-links">
                                    <i class="ph-duotone ph-user"></i>
                                    <span>My Account</span>
                                </a></li>
                            <li><a class="pc-user-links" href="<?= base_url('admin-logout');?>">
                                    <i class="ph-duotone ph-power"></i>
                                    <span>Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="navbar-content">
                <ul class="pc-navbar">
                    <li class="pc-item pc-caption">
                        <label>Navigation</label>
                    </li>
                    <li class="pc-item">
                        <a href="<?= base_url('admin-dashboard'); ?>" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph-duotone ph-identification-card"></i>
                            </span>
                            <span class="pc-mtext">Dashboard</span>
                        </a>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph-duotone ph-gauge"></i>
                            </span>
                            <span class="pc-mtext">Featured Countries</span>
                            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                        </a>
                        <ul class="pc-submenu">

                            <li class="pc-item"><a class="pc-link" href="<?= base_url('admin-view-countries');?>">View
                                    Countries</a></li>

                        </ul>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph-duotone ph-layout"></i>
                            </span>
                            <span class="pc-mtext">Featured Cities</span>
                            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                        </a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="<?= base_url('admin-view-cities');?>">View Cities</a></li>
                        </ul>
                    </li>

                    <li class="pc-item pc-caption">
                        <label>Users</label>
                        <i class="ph-duotone ph-chart-pie"></i>
                        <span>View All Users</span>
                    </li>
                    <li class="pc-item">
                        <a href="#" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph-duotone ph-identification-card"></i>
                            </span>
                            <span class="pc-mtext">User</span>
                        </a>
                    </li>

                    <li class="pc-item">
                        <a href="#" class="pc-link">
                            <span class="pc-micon">
                                <i class="ph-duotone ph-database"></i>
                            </span>
                            <span class="pc-mtext">Data</span>
                        </a>
                    </li>
            </div>
    </nav>

    <!-- [ Sidebar Menu ] end -->
    <!-- [ Header Topbar ] start -->
    <header class="pc-header">
        <div class="header-wrapper">
            <!-- [Mobile Media Block] start -->
            <div class="me-auto pc-mob-drp">
                <ul class="list-unstyled">
                    <!-- ======= Menu collapse Icon ===== -->
                    <li class="pc-h-item pc-sidebar-collapse">
                        <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
                            <i class="ph-duotone ph-list"></i>
                        </a>
                    </li>
                    <li class="pc-h-item pc-sidebar-popup">
                        <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
                            <i class="ph-duotone ph-list"></i>
                        </a>
                    </li>

                </ul>
            </div>
            <!-- [Mobile Media Block end] -->
            <div class="ms-auto">
                <ul class="list-unstyled">
                    <!-- <li class="dropdown pc-h-item">
                        <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="ph-duotone ph-sun-dim"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
                            <a href="#!" class="dropdown-item" onclick="layout_change('dark')">
                                <i class="ph-duotone ph-moon"></i>
                                <span>Dark</span>
                            </a>
                            <a href="#!" class="dropdown-item" onclick="layout_change('light')">
                                <i class="ph-duotone ph-sun-dim"></i>
                                <span>Light</span>
                            </a>
                            <a href="#!" class="dropdown-item" onclick="layout_change_default()">
                                <i class="ph-duotone ph-cpu"></i>
                                <span>Default</span>
                            </a>
                        </div>
                    </li> -->




                    <li class="dropdown pc-h-item header-user-profile">
                        <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false">
                            <img src="<?= base_url('public/admin_assets//assets/images/user/avatar-1.jpg')?>"
                                alt="user-image" class="user-avtar">
                        </a>
                        <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                            <div class="dropdown-header d-flex align-items-center justify-content-between">
                                <h4 class="m-0">Profile</h4>
                            </div>
                            <div class="dropdown-body">
                                <div class="profile-notification-scroll position-relative"
                                    style="max-height: calc(100vh - 225px)">
                                    <ul class="list-group list-group-flush w-100">
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="<?= base_url('public/admin_assets//assets/images/user/avatar-1.jpg')?>"
                                                        alt="user-image" class="wid-50 rounded-circle">
                                                </div>
                                                <div class="flex-grow-1 mx-3">
                                                    <h5 class="mb-0">Admin Name</h5>
                                                    <a class="link-primary"
                                                        href="mailto:<?=  $_SESSION['admin']['admin_email'];?>"><?=  $_SESSION['admin']['admin_email'];?></a>
                                                </div>
                                                <span class="badge bg-primary">User Type</span>
                                            </div>
                                        </li>

                                        <li class="list-group-item">
                                            <a href="#" class="dropdown-item">
                                                <span class="d-flex align-items-center">
                                                    <i class="ph-duotone ph-key"></i>
                                                    <span>Change password</span>
                                                </span>
                                            </a>

                                        </li>



                                        <li class="list-group-item">
                                            <a href="<?= base_url('admin-edit-profile'); ?>" class="dropdown-item">
                                                <span class="d-flex align-items-center">
                                                    <i class="ph-duotone ph-user-circle"></i>
                                                    <span>Edit profile</span>
                                                </span>
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <span class="d-flex align-items-center">
                                                    <i class="ph-duotone ph-star text-warning"></i>
                                                    <span>Upgrade account</span>
                                                    <span
                                                        class="badge bg-light-success border border-success ms-2">NEW</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="list-group-item">

                                            <a href="<?= base_url('admin-logout');?>" class="dropdown-item">
                                                <span class="d-flex align-items-center">
                                                    <i class="ph-duotone ph-power"></i>
                                                    <span>Logout</span>
                                                </span>
                                            </a>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <?=  $this->renderSection('main-content');?>
    <!-- [ Main Content ] end -->

    <footer class="pc-footer">
        <div class="footer-wrapper container-fluid">
            <div class="row text-center">
                <div class="col my-1">
                    <p class="m-0">Designed and Developed by &copy;CarSales
                        <a href="#" target="_blank">www.CarSales.com</a>
                    </p>
                </div>

            </div>
        </div>
    </footer>


    <!-- Required Js -->
    <!-- jQuety file -->
     
    <script src="<?= base_url('public/assets/js/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('public/admin_assets/assets/js/plugins/popper.min.js');?>"></script>
    <script src="<?= base_url('public/admin_assets/assets/js/sweet-alert.js');?>"></script>

    <script src="<?= base_url('public/admin_assets/assets/js/plugins/simplebar.min.js');?>"></script>
    <script src="<?= base_url('public/admin_assets/assets/js/plugins/bootstrap.min.js');?>"></script>
    <script src="<?= base_url('public/admin_assets/assets/js/fonts/custom-font.js');?>"></script>
    <script src="<?= base_url('public/admin_assets/assets/js/pcoded.js');?>"></script>
    <script src="<?= base_url('public/admin_assets/assets/js/plugins/feather.min.js');?>"></script>
    <script src="<?= base_url('public/admin_assets/assets/js/plugins/jquery.dataTables.min.js');?>"></script>
    <script src="<?= base_url('public/admin_assets/assets/js/plugins/dataTables.bootstrap5.min.js'); ?>"></script>
    <script src="<?= base_url('public/admin_assets/assets/js/plugins/choices.min.js'); ?>"></script>
    
    <!-- Write Custom jQery Scripts -->
    <?= $this->renderSection('admin-scripts') ?>
    
</body>
<!-- [Body] end -->

</html>