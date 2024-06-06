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
                            <h5 class="mb-0">Admin Account Profile</h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-lg-5 col-xxl-3">
                <div class="card overflow-hidden">
                    <div class="card-body position-relative">
                        <div class="text-center mt-3">
                            <div class="chat-avtar d-inline-flex mx-auto">
                                <img class="rounded-circle img-fluid wid-90 img-thumbnail"
                                    src="<?= base_url("public/admin_assets/assets/images/user/avatar-1.jpg");?>"
                                    alt="User image">
                                <i class="chat-badge bg-success me-2 mb-2"></i>
                            </div>
                            <h5 class="mb-0">Admin Name</h5>
                            <p class="text-muted text-sm">Mail Id <a href="#" class="link-primary">Admin Email </a> </p>
                            <!-- <ul class="list-inline mx-auto my-4">
                      <li class="list-inline-item">
                        <a href="#" class="avtar avtar-s text-white bg-dribbble">
                          <i class="ti ti-brand-dribbble f-24"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="avtar avtar-s text-white bg-amazon">
                          <i class="ti ti-brand-figma f-24"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="avtar avtar-s text-white bg-pinterest">
                          <i class="ti ti-brand-pinterest f-24"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="avtar avtar-s text-white bg-behance">
                          <i class="ti ti-brand-behance f-24"></i>
                        </a>
                      </li>
                    </ul> -->
                            <!-- <div class="row g-3">
                      <div class="col-4">
                        <h5 class="mb-0">86</h5>
                        <small class="text-muted">Post</small>
                      </div>
                      <div class="col-4 border border-top-0 border-bottom-0">
                        <h5 class="mb-0">40</h5>
                        <small class="text-muted">Project</small>
                      </div>
                      <div class="col-4">
                        <h5 class="mb-0">4.5K</h5>
                        <small class="text-muted">Members</small>
                      </div>
                    </div> -->
                        </div>
                    </div>
                    <div class="nav flex-column nav-pills list-group list-group-flush account-pills mb-0 border-top-0"
                        id="user-set-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link list-group-item list-group-item-action active" id="user-set-profile-tab"
                            data-bs-toggle="pill" href="#user-set-profile" role="tab" aria-controls="user-set-profile"
                            aria-selected="true">
                            <span class="f-w-500"><i class="ph-duotone ph-user-circle m-r-10"></i>Profile
                                Overview</span>
                        </a>
                        <a class="nav-link list-group-item list-group-item-action" id="user-set-information-tab"
                            data-bs-toggle="pill" href="#user-set-information" role="tab"
                            aria-controls="user-set-information" aria-selected="false">
                            <span class="f-w-500"><i class="ph-duotone ph-clipboard-text m-r-10"></i>Account
                                Information</span>
                        </a>
                        <a class="nav-link list-group-item list-group-item-action" id="user-set-passwort-tab"
                            data-bs-toggle="pill" href="#user-set-passwort" role="tab" aria-controls="user-set-passwort"
                            aria-selected="false">
                            <span class="f-w-500"><i class="ph-duotone ph-key m-r-10"></i>Change Password</span>
                        </a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Personal information</h5>
                    </div>
                    <div class="card-body position-relative">
                        <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                            <p class="mb-0 text-muted me-1">Email</p>
                            <p class="mb-0">email-id@email.com</p>
                        </div>
                        <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                            <p class="mb-0 text-muted me-1">Phone</p>
                            <p class="mb-0">+91 2345769012</p>
                        </div>

                    </div>
                </div>


            </div>
            <div class="col-lg-7 col-xxl-9">
                <div class="tab-content" id="user-set-tabContent">
                    <div class="tab-pane fade show active" id="user-set-profile" role="tabpanel"
                        aria-labelledby="user-set-profile-tab">

                        <div class="card">
                            <div class="card-header">
                                <h5>Personal Details</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0 pt-0">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="chat-avtar d-inline-flex mx-auto">
                                                    <img class="rounded-circle img-fluid wid-90 img-thumbnail"
                                                        src="<?= base_url("public/admin_assets/assets/images/user/avatar-1.jpg");?>"
                                                        alt="User image">
                                                    <i class="chat-badge bg-success me-2 mb-2"></i>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <p class="mb-1 text-muted">Full Name</p>
                                                <p class="mb-0">Admin name</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item px-0">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="mb-1 text-muted">Phone</p>
                                                <p class="mb-0">+91 2345769012</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="mb-1 text-muted">Email</p>
                                                <p class="mb-0">admin@email.com</p>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="user-set-information" role="tabpanel"
                        aria-labelledby="user-set-information-tab">
                        <div class="card">
                            <div class="card-header">
                                <h5>Personal Information</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">First Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="Admin">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Last Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="Admin">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Profile Picture <span
                                                    class="text-danger">*</span></label>
                                            <input type="file" class="form-control" value="Set Profile Picture">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Phone No.<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="(+99) 9999 999 999">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Email <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" value="demo@sample.com">
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>

                        <div class="text-end btn-page">

                            <div class="btn btn-primary">Update Profile</div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="user-set-passwort" role="tabpanel"
                  aria-labelledby="user-set-passwort-tab">
                  <div class="card alert alert-warning p-0">
                    <div class="card-body">
                      <div class="d-flex align-items-center">
                        <div class="flex-grow-1 me-3">
                          <h4 class="alert-heading">Note!</h4>
                          <p class="mb-2">A password must contain the following.</p>
                          <p>
                            <ul class="list-group list-style-none">
                                <li class="list-group-item"><span class="fas fa-check-square"></span> A lowercase letter</li>
                                <li class="list-group-item"><span class="fas fa-check-square"></span> A uppercase letter</li>
                                <li class="list-group-item"><span class="fas fa-check-square"></span> A number</li>
                                <li class="list-group-item"><span class="fas fa-check-square"></span> Minimum 8 characters</li>
                            </ul>
                          </p>
                           
                        </div>
                        <div class="flex-shrink-0">
                          <img src="<?= base_url("public/admin_assets/assets/images/application/img-accout-password-alert.png"); ?>" alt="img" class="img-fluid wid-80">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h5>Change Password</h5>
                    </div>
                    <div class="card-body">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item pt-0 px-0">
                          <div class="form-group row mb-0">
                            <label class="col-form-label col-md-4 col-sm-12 text-md-end">Current Password <span
                                class="text-danger">*</span>
                            </label>
                            <div class="col-md-8 col-sm-12">
                              <input type="password" class="form-control">
                              <div class="form-text"> Forgot password? <a href="#" class="link-primary">Click here</a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item px-0">
                          <div class="form-group row mb-0">
                            <label class="col-form-label col-md-4 col-sm-12 text-md-end">New Password <span
                                class="text-danger">*</span></label>
                            <div class="col-md-8 col-sm-12">
                              <input type="password" class="form-control">
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item pb-0 px-0">
                          <div class="form-group row mb-0">
                            <label class="col-form-label col-md-4 col-sm-12 text-md-end">Confirm Password <span
                                class="text-danger">*</span></label>
                            <div class="col-md-8 col-sm-12">
                              <input type="password" class="form-control">
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body text-end">
                      <div class="btn btn-outline-secondary me-2">Cancel</div>
                      <div class="btn btn-primary">Change Password</div>
                    </div>
                  </div>
                </div>





                </div>
            </div>
        </div>
    </div>
    <!-- [ sample-page ] end -->
</div>
<!-- [ Main Content ] end -->
</div>
</div>
<!-- [ Main Content ] end -->

<?= $this->endSection() ?>
<!-- [ Main Content ] end -->