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
                        <form action="#" method="POST" enctype="multipart/form-data" id="add_city_form" novalidate>

                            <div class="row mb-3">
                                <label for="country-name" class="col-sm-3 col-form-label">Select Country</label>
                                <div class="col-sm-9">

                                    <select class="form-control" data-trigger name="countrySelect"
                                        id="countrySelect">
                                        <option value="" id="countryList">Select Country</option>
                                        
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



<!-- editCountryModal Starts here -->
<div id="editCountryModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Edit Country</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-md-12">


                        <!--edit country form starts here -->
                        <form action="#" method="POST" enctype="multipart/form-data" id="update_country_form"
                            novalidate>

                            <div class="row mb-3">
                                <input type="hidden" name="country-id" id="countryId">
                                <input type="hidden" name="old-country-img" id="oldCountryImg">
                            </div>

                            <div class="row mb-3">
                                <label for="edit-country-name" class="col-sm-3 col-form-label">Country Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="editcountryname" class="form-control"
                                        id="edit-country-name" required>
                                    <div class="invalid-feedback">The country name field is required</div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="edit-country-image" class="col-sm-3 col-form-label ">Upload Country
                                    Image</label>
                                <div class="col-md-9">
                                    <div class="form-file mb-3">
                                        <input type="file" class="form-control" aria-label="file example"
                                            name="editcountryimg">
                                        <div class="invalid-feedback" id="cimg_error">The country image field is
                                            required</div>
                                        <div id="edit-country-image"></div>

                                    </div>
                                </div>

                            </div>

                            <button type="submit" class="btn btn-primary mb-4" id="updateCountryBtn">Update
                                Country</button>

                            <button type="reset" class="btn btn-info mb-4 mx-2"
                                id="updateCountryResetBtn">Reset</button>

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
    fetchCountryList();
// fetch all country data from database using ajax call
function fetchCountryList() {
    $.ajax({
        url: '<?= base_url('admin-country-list');?>',
        method: 'get',
        success: function(response) {
            console.log(response.message);
            $('#countrySelect').html(response.message);
           

            
        }
    });
}


// this method fetches the data from db and displays in the view section
// fetchCountryData();

// add country data through ajax call
// $('#add_country_form').submit(function(e) {
//     e.preventDefault();
//     const formData = new FormData(this);
//     if (!this.checkValidity()) {
//         e.preventDefault();
//         $(this).addClass('was-validated');


//     } else {
//         $('#addCountryBtn').text('Adding Country');
//         $.ajax({
//             url: '<?= base_url('admin-add-countries');?>',
//             method: 'post',
//             data: formData,
//             contentType: false,
//             cache: false,
//             processData: false,
//             dataType: 'json',
//             success: function(response) {
//                 console.log(response);
//                 if (response.error) {
//                     $('#country-image').addClass('is-invalid');
//                     $('#country-image').next().text(response.message
//                         .countryimage);

//                 } else {
//                     $('#add_country_form')[0].reset();
//                     $('#addCountryBtn').text('Add Country');
//                     $('#country-image').removeClass('is-invalid');
//                     $('#country-name').removeClass('is-invalid');
//                     $('#country-image').next().text('');
//                     $('#country-name').next().text('');
//                     $('#addCountryModal').modal('hide');

//                     Swal.fire({
//                         icon: "success",
//                         title: response.message,
//                         timer: 1500
//                     });
//                     fetchCountryData();

//                 }
//             }
//         });

//     }


// });


// fetch all country data from database using ajax call
// function fetchCountryData() {
//     $.ajax({
//         url: '<?= base_url('admin-countries-data');?>',
//         method: 'get',
//         success: function(response) {
//             // console.log(response.message);
//             $('#country-data').html(response.message);
//         }
//     });
// }

// fetching country data in the editCountryModal using ajax call
// $(document).delegate('.editCountryBtn', 'click', function(e) {
//     e.preventDefault();
//     const countryId = $(this).attr('id');
//     $.ajax({
//         url: '<?= base_url('admin-fetch-country') ?>/' + countryId,
//         method: 'get',
//         success: function(response) {
//             $('#countryId').val(response.country_id);
//             $('#old-country-img').val(response.country_image);
//             $('#oldCountryImg').val(response.country_image);
//             $('#edit-country-name').val(response.country_name);
//             $('#edit-country-image').html(
//                 '<img src="<?= base_url('public/assets/images/nations-flag/') ?>/' +
//                 response.country_image +
//                 '" class="img-fluid mt-2 img-thumbnail" width="150">');

//         }
//     });
// });

// updating country data through ajax call
// $('#update_country_form').submit(function(e) {
//     e.preventDefault();
//     const formData = new FormData(this);
//     if (!this.checkValidity()) {
//         e.preventDefault();
//         $(this).addClass('was-validated');


//     } else {
//         $('#updateCountryBtn').text('Updating Country');
//         $.ajax({
//             url: '<?= base_url('admin-update-countries');?>',
//             method: 'post',
//             data: formData,
//             contentType: false,
//             cache: false,
//             processData: false,
//             dataType: 'json',
//             success: function(response) {
//                 $('#update_country_form')[0].reset();
//                 $('#editCountryModal').modal('hide');
//                 fetchCountryData();
//                 Swal.fire({
//                     icon: "success",
//                     title: response.message,
//                     timer: 2000
//                 });

//                 $('#updateCountryBtn').text('Update Country');
//             }
//         });
//     }
// });

// deleting country data using ajax call
// $(document).delegate('.deleteCountryBtn', 'click', function(e) {
//     e.preventDefault();
//     const countryId = $(this).attr('id');
//     Swal.fire({
//         title: "Are you sure you want to delete this country?",
//         text: "You won't be able to revert this!",
//         icon: "warning",
//         showCancelButton: true,
//         confirmButtonColor: "#3085d6",
//         cancelButtonColor: "#d33",
//         confirmButtonText: "Yes, delete it!"
//     }).then((result) => {
//         if (result.isConfirmed) {
//             $.ajax({
//                 url: '<?= base_url('admin-delete-country') ?>/' + countryId,
//                 method: 'get',
//                 success: function(response) {
//                     console.log(response);
//                     Swal.fire({
//                         title: "Deleted!",
//                         text: response.message,
//                         icon: "success"
//                     });
//                     fetchCountryData();
//                 }
//             });
//         }
//     });
// });

});
</script>
<?= $this->endSection() ?>