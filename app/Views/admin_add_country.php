<!-- CodeIgniter function to extend the admin dashboard layout -->
<?=  $this->extend('layouts/admin_dashboard_layout') ?>

<?= $this->section('main-content')?>
<div class="pc-container">
    <div class="pc-content">

    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center justify-content-between">
                <div class="col-sm-auto">
                    <div class="page-header-title">
                        <h5 class="mb-0">Admin - Add Countries</h5>
                    </div>
                </div>

            </div>
        </div>
    </div>

 
<!-- [ Main Content ] start -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Add Countries</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <!-- alert message for success or failure -->
                        <div class="alert alert-success alert-dismissible fade show d-none" role="alert"
                            id="msg-box">

                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                        <!-- form starts here -->
                        <form action="#" method="POST" enctype="multipart/form-data" id="add_country_form"
                            novalidate>

                            <div class="row mb-3">
                                <label for="country-name" class="col-sm-3 col-form-label">Enter Country
                                    Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="countryname" class="form-control" id="country-name"
                                        required>
                                    <div class="invalid-feedback">The country name field is required</div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="country-image" class="col-sm-3 col-form-label ">Upload Country
                                    Image</label>
                                <div class="col-md-9">
                                    <div class="form-file mb-3">
                                        <input type="file" class="form-control" id="country-image"
                                            aria-label="file example" name="countryimg" required>
                                        <div class="invalid-feedback" id="cimg_error">The country image field is
                                            required</div>

                                    </div>
                                </div>

                            </div>

                            <button type="submit" class="btn btn-primary mb-4" id="addCountryBtn">Add Country</button>

                            <button type="reset" class="btn btn-info mb-4 mx-2" id="addCountryResetBtn">Reset</button>
                            
                        </form>

                    </div>
                </div>
            </div>
        </div>


        <!-- [ Main Content ] end -->
    </div>
</div>
</div>
</div>

<?= $this->endSection() ?>
<!-- [ Main Content ] end -->

<!-- custom scripts for uploading data through ajax -->
<?= $this->section('admin-scripts')?>

<script>
$(document).ready(function() {
    $('#add_country_form').submit(function(e) {
        e.preventDefault();
        const formData = new FormData(this);
        if (!this.checkValidity()) {
            e.preventDefault();
            $(this).addClass('was-validated');


        } else {
            $('#addCountryBtn').text('Adding Country');
            $.ajax({
                url: '<?= base_url('admin-add-countries');?>',
                method: 'post',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                dataType: 'json',
                success: function(response) {
                    console.log(response);
                    if (response.error) {
                        $('#country-image').addClass('is-invalid');
                        $('#country-image').next().text(response.message
                            .countryimage);

                    } else {
                        $('#add_country_form')[0].reset();
                        $('#addCountryBtn').text('Add Country');
                        $('#country-image').removeClass('is-invalid');
                        $('#country-name').removeClass('is-invalid');
                        $('#country-image').next().text('');
                        $('#country-name').next().text('');
                        Swal.fire({
                            icon: "success",
                            title: response.message,
                            timer: 1500
                        });
                    }
                }
            });

        }


    });


});
</script>

<?= $this->endSection() ?>