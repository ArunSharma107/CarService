<!-- Extending signup_signin_form_layout -->
<?= $this->extend('layouts/signup_signin_form_layout') ?>

<?= $this->section('form') ?>
<!-- User signin page starts here -->
<section class="user-signin-form">
    <div class="container">
        <div class="errorMsg"></div>
        <div id="admin-signin-section"
            class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 text-center">
            <div class="signin-form-header mb-5 text-center">
                <img src="<?= base_url('public/assets/images/logo/carlogo.png'); ?>" alt="car logo"
                    class="img-fluid rounded-circle border mb-2" width="100" height="100">
                <span>
                    <h5>CarSales - Admin Signin </h5>
                </span>

            </div>
            <div  class="rounded bg-white shadow p-5">
                <h3>Sign In - Admin</h3>
                <!-- ajax status msg box -->
                <div id="status-msg" class="mb-3 alert ">

                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <input type="email" class="form-control" id="admin-email" placeholder="" aria-label="user-email"
                        aria-describedby="user-email">


                </div>
                <!-- <span id="error-email-msg" class="text-danger mb-3"></span> -->
                <div id="error-email-msg" class="text-danger mb-3 text-start"></div>


                <div class="input-group mb-2">
                    <span class="input-group-text">
                        <i class="fas fa-eye-slash"></i>
                    </span>
                    <input type="password" class="form-control" id="admin-pwd" placeholder="" aria-label="user-pwd"
                        aria-describedby="user-pwd">
                </div>
                <div id="error-pwd-msg" class="text-danger text-start mb-3"></div>




                <button class="btn w-100 my-4" id="adminSigninBtn">
                    <i class="fa-solid fa-right-to-bracket"> </i> Login

                </button>

                <div class="text-muted mb-3">
                    <a href="#" class="fw-bold text-decoration-none text-quinary" onclick="hideSigninForm()">Forgot Your
                        Password?</a>
                </div>
                <div class="text-muted">
                    <p>Not an admin ? <a href="<?= base_url('/'); ?>" class="text-decoration-none text-quinary"> Go to
                            Home</a></p>
                </div>
</div>
        </div>
    </div>

    <div id="forgot-pwd-section" class="container d-none">
        <div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 text-center">
            <div class="forgotpwd-header">
                <i class="fa-solid fa-user-shield"></i>
                <span>
                    <h5>Update your password</h5>
                </span>
            </div>
            <form action="" class="rounded bg-white shadow p-5">

                <div class="input-group input-group-lg mb-3">
                    <span class="input-group-text" id="user-email">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <input type="email" class="form-control" placeholder="Enter your registered mail id"
                        aria-label="user-email" aria-describedby="user-email" required>
                </div>

                <button class="btn w-100 my-4" id="forgotPwdBtn">
                    <i class="fa-solid fa-pen-to-square"></i> Update

                </button>
            </form>
        </div>

    </div>
</section>


<!-- // $password = "Arun@1978";
// $hpwd = password_hash($password, PASSWORD_DEFAULT);
// $hpwd = md5($password);

// echo $hpwd; -->

<?= $this->endSection() ?>

<!-- CI function to use section of custom js -->
<?= $this->section('scripts') ?>
<script>
// functionality of hiding and displaying login and forgot password form
function hideSigninForm() {
    var signinform = document.getElementById('admin-signin-section')
    var forgotpwdform = document.getElementById('forgot-pwd-section');
    signinform.classList.add('d-none');
    forgotpwdform.classList.remove('d-none');
}

// functionality of hiding and displaying the password
let password = document.getElementById('admin-pwd');
let visibility = document.querySelector('span .fa-eye-slash');
let clickedtimes = true;

visibility.addEventListener('click', function() {
    if (clickedtimes) {
        password.setAttribute('type', 'text');
        visibility.classList.remove('fa-eye-slash');
        visibility.classList.add('fa-eye');

        clickedtimes = false;
    } else {
        password.setAttribute('type', 'password');
        visibility.classList.remove('fa-eye');
        visibility.classList.add('fa-eye-slash');
        clickedtimes = true;
    }

});

$(document).ready(function() {

    $('#adminSigninBtn').on('click', function() {
        // validating the input field
        if ($.trim($('#admin-email').val()).length == 0) {
            error_email = 'The email field is required!';
            $('#error-email-msg').text(error_email);

        } else {
            error_email = '';
            $('#error-email-msg').text(error_email);

        }

        if ($.trim($('#admin-pwd').val()).length == 0) {
            error_pwd = 'The password field is required!';
            $('#error-pwd-msg').text(error_pwd);

        } else {
            error_pwd = '';
            $('#error-pwd-msg').text(error_pwd);

        }

        if (error_email != '' || error_pwd != '') {
            return false;

        } else {
            var data = {
                'email': $('#admin-email').val(),
                'password': $('#admin-pwd').val(),
            };
            $.ajax({
                method: "POST",
                url: "<?= base_url('admin-signin'); ?>",
                data: data,
                success: function(response) {
                    // console.log(response.status);
                    // Successfully logging-in
                    if (response.status == 1) {
                        $('#admin-email').css('border', '1px solid green');
                        $('#admin-pwd').css('border', '1px solid green');

                        $('#status-msg').html('Logging In');
                        $('#status-msg').removeClass('alert-danger');
                        $('#status-msg').addClass('alert-success');

                        setTimeout(() => {
                            window.location.href =
                                "<?= base_url('admin-dashboard') ?>";

                        }, 2000);
                    }
                    // Password did not matched
                    if (response.status == 2) {
                        $('#admin-email').css('border', '1px solid red');
                        $('#admin-pwd').css('border', '1px solid red');
                        $('#status-msg').html('The email id or password is incorrect');
                        $('#status-msg').addClass('alert-danger');

                    }
                    // The email id is not registered with us.
                    if (response.status == 3) {
                        $('#admin-email').css('border', '1px solid red');
                        $('#admin-pwd').css('border', '1px solid red');
                        $('#status-msg').html(' This email id is not registered with us.');
                        $('#status-msg').addClass('alert-danger');

                    }





                }
            });

        }
    });
});
</script>

<?= $this->endSection() ?>