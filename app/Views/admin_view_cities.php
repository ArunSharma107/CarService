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
                            <h5 class="mb-0">Admin - View Cities</h5>
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
                        <h5>View Countries</h5>
                        <button class="btn btn-shadow btn-info mt-3" data-bs-toggle="modal"
                            data-bs-target="#addCityModal">
                            <i class="fas fa-plus"></i>Add City
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- table starts here -->
                                <!-- Column Rendering table start -->


                                <div class="card-body">
                                    <div class="dt-responsive table-responsive-sm">
                                        <table id="colum-render"
                                            class="table table-striped table-bordered text-center  nowrap">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Country Image</th>
                                                    <th>Country Name</th>
                                                    <th>City Image</th>
                                                    <th>City Name</th>
                                                    <th>Created At</th>
                                                    <th colspan="2">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody id="city-data">
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Country Image</th>
                                                    <th>Country Name</th>
                                                    <th>City Image</th>
                                                    <th>City Name</th>
                                                    <th>Created At</th>
                                                    <th colspan="2">Actions</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>




                            </div>
                            <!-- row -->



                        </div>
                    </div>
                </div>


                <!-- [ Main Content ] end -->
            </div>
        </div>


    </div>
</div>

<!-- addCityModal Starts here -->
<div id="addCityModal" class="modal fade" tabindex="-1" role="" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">Add City</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-md-12">


                        <!-- add_city_form starts here -->
                        <form action="#" method="POST" enctype="multipart/form-data" id="add_city_form" autocomplete="off" novalidate>

                            <div class="row mb-3">
                                <label for="country-name" class="col-sm-3 col-form-label">Select Country</label>
                                <div class="col-sm-9">

                                    <select class="form-control" data-trigger name="countrySelect"
                                        id="countrySelect">
                                         <!-- country list coming through ajax call -->
                                        
                                    </select>


                                    <div class="invalid-feedback">The country name field is required</div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="city-name" class="col-sm-3 col-form-label">City Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="cityname" class="form-control" id="city-name" required>
                                    <div class="invalid-feedback">The city name field is required</div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="city-image" class="col-sm-3 col-form-label ">Upload City Image</label>
                                <div class="col-md-9">
                                    <div class="form-file mb-3">
                                        <input type="file" class="form-control" id="city-image"
                                            aria-label="file example" name="cityimg" required>
                                        <div class="invalid-feedback" id="cimg_error">The city image field is required
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mb-4" id="addCityBtn">Add City</button>

                            <button type="reset" class="btn btn-info mb-4 mx-2" id="addCityResetBtn">Reset</button>

                        </form>

                    </div>
                </div>




                <!-- [ Main Content ] end -->
            </div>
        </div>

    </div>

</div>
<!-- addCountryModal Ends here -->



<!-- editCityModal Starts here -->
<div id="editCityModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Edit City</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-md-12">
                        <!--edit city form starts here -->
                        <form action="#" method="POST" enctype="multipart/form-data" id="update_city_form"
                            novalidate>

                            <div class="row mb-3">
                                <input type="text" name="city-id" id="cityId">
                                <!-- <input type="text" name="country-id" id="countryId"> -->
                                <input type="text" name="old-city-img" id="oldCityImg">
                            </div>

                            <div class="row mb-3">
                                <label for="country-name" class="col-sm-3 col-form-label">Select Country</label>
                                <div class="col-sm-9">

                                    <select class="form-control" data-trigger name="editCountrySelect"
                                        id="editCountrySelect">
                                         <!-- country list coming through ajax call -->
                                        
                                    </select>


                                    <div class="invalid-feedback">The country name field is required</div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="edit-country-name" class="col-sm-3 col-form-label">City Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="editcityname" class="form-control"
                                        id="edit-city-name" required>
                                    <div class="invalid-feedback">The city name field is required</div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="edit-city-image" class="col-sm-3 col-form-label ">Upload City Image</label>
                                <div class="col-md-9">
                                    <div class="form-file mb-3">
                                        <input type="file" class="form-control" aria-label="file example"
                                            name="editcityimg">
                                        <div class="invalid-feedback" id="cimg_error">The city image field is required</div>
                                        <div id="edit-city-image"></div>

                                    </div>
                                </div>

                            </div>

                            <button type="submit" class="btn btn-primary mb-4" id="updateCityBtn">Update City</button>
                            <button type="reset" class="btn btn-info mb-4 mx-2"
                                id="updateCityResetBtn">Reset</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- editCountryModal Ends here -->
<?= $this->endSection() ?>


<!-- custom scripts for crud operation through ajax -->
<?= $this->section('admin-scripts')?>

<script>
// var resetSimple = new Choices(document.getElementById('countrySelect'));
$(document).ready(function() {
// This function is used to fetch country name and id in the select box
fetchCountryList();
fetchCityData();
// fetch all country data from database using ajax call
function fetchCountryList() {
    $.ajax({
        url: '<?= base_url('admin-country-list');?>',
        method: 'get',
        success: function(response) {
            // console.log(response.message);
            $('#countrySelect').html(response.message);   
        }
    });
}

// add country data through ajax call
$('#add_city_form').submit(function(e) {
    e.preventDefault();
    const formData = new FormData(this);
    if (!this.checkValidity()) {
        e.preventDefault();
        $(this).addClass('was-validated');


    } else {
        $('#addCityBtn').text('Adding City');
        $.ajax({
            url: '<?= base_url('admin-add-city');?>',
            method: 'post',
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            dataType: 'json',
            success: function(response) {
                if (response.error) {
                    $('#city-image').addClass('is-invalid');
                    $('#city-image').next().text(response.message.cityimage);
                } else {
                    $('#add_city_form')[0].reset();
                    $('#addCityBtn').text('Add City');
                    $('#city-image').removeClass('is-invalid');
                    $('#city-name').removeClass('is-invalid');
                    $('#city-image').next().text('');
                    $('#city-name').next().text('');
                    $('#addCityModal').modal('hide');

                    Swal.fire({
                        icon: "success",
                        title: response.message,
                        timer: 1500
                    });
                    fetchCityData();
                }
            }
        });
    }
});
// fetching city table data through ajax
function fetchCityData() {
    $.ajax({
        url: '<?= base_url('admin-city-data');?>',
        method: 'get',
        success: function(response) {
            // console.log(response.message);
            $('#city-data').html(response.message);
        }
    });
}

// fetching city data in the editCityModal using ajax call
$(document).delegate('.editCityBtn', 'click', function(e) {
    e.preventDefault();
    const cityId = $(this).attr('id');
    $.ajax({
        url: '<?= base_url('admin-fetch-city') ?>/' + cityId,
        method: 'get',
        success: function(response) {
            // console.log(response);
            $('#cityId').val(response.city_id);
            $('#old-city-img').val(response.city_image);
            $('#oldCityImg').val(response.city_image);
            $('#edit-city-name').val(response.city_name);
            $('#edit-city-image').html(
                '<img src="<?= base_url('public/assets/images/cities_images/') ?>/' +
                response.city_image +
                '" class="img-fluid mt-2 img-thumbnail" width="150">');
            $('#editCountrySelect').html('<option vlaue="'+response.country_id+'">'+response.country_name+'</option>');

        }
    });
});

$('#editCountrySelect').on("mouseenter", function(e){
    e.preventDefault();
    $.ajax({
        url: '<?= base_url('admin-country-list');?>',
        method: 'get',
        success: function(response) {
            // console.log(response.message);
            $('#editCountrySelect').html(response.message);   
        }
    });
    
});


// updating country data through ajax call
$('#update_city_form').submit(function(e) {
    e.preventDefault();
    const formData = new FormData(this);
    if (!this.checkValidity()) {
        e.preventDefault();
        $(this).addClass('was-validated');
    } else {
        $('#updateCityBtn').text('Updating City');
        $.ajax({
            url: '<?= base_url('admin-update-city');?>',
            method: 'post',
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            dataType: 'json',
            success: function(response) {
                // console.log(response);
                $('#update_city_form')[0].reset();
                $('#editCityModal').modal('hide');
                fetchCityData();
                Swal.fire({
                    icon: "success",
                    title: response.message,
                    timer: 5000
                });

                $('#updateCityBtn').text('Update City');
            }
        });
    }
});

// deleting city data using ajax call
$(document).delegate('.deleteCityBtn', 'click', function(e) {
    e.preventDefault();
    const cityId = $(this).attr('id');
    Swal.fire({
        title: "Are you sure you want to delete this city?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: '<?= base_url('admin-delete-city') ?>/' + cityId,
                method: 'get',
                success: function(response) {
                    Swal.fire({
                        title: "Deleted!",
                        text: response.message,
                        icon: "success"
                    });
                    fetchCityData();
                }
            });
        }
    });
});

});
</script>
<?= $this->endSection() ?>