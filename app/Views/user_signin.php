<!-- Extending signup_signin_form_layout -->
<?= $this->extend('layouts/signup_signin_form_layout') ?>
 
<?= $this->section('form') ?>
<!-- User signin page starts here -->
<section class="user-signin-form">
    <div class="container">
        <div id="user-signin-section" class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 text-center">
            <div class="signin-form-header mb-5">
                <i class="fa-regular fa-thumbs-up"></i>
                <span>
                    <h5>Activate our exclusive promotions</h5>
                </span>
                 
            </div>
            <form action="" class="rounded bg-white shadow p-5">
                <h3>Sign In</h3>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="user-email">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <input type="email" class="form-control" placeholder=""
                        aria-label="user-email" aria-describedby="user-email">
                </div>

                <div class="input-group mb-2">
                    <span class="input-group-text" id="user-pwd">
                        <i class="fas fa-eye"></i>
                    </span>
                    <input type="password" class="form-control" placeholder=""
                        aria-label="user-pwd" aria-describedby="user-pwd">
                </div>
               
                <div class="mt-3">
                <div class="g-recaptcha" data-sitekey="6Lex0uUpAAAAALdUHICtQ8oRwDMktJhQdjCsoCjL"></div>
                </div>

                <button class="btn w-100 my-4" id="userSigninBtn">
                <i class="fa-solid fa-right-to-bracket"> </i> Login 
                   
                </button>

                <div class="text-muted mb-3">
                <a href="#" class="fw-bold text-decoration-none text-quinary" onclick="hideSigninForm()">Forgot Your Password?</a>
                </div>
                <div class="text-muted">
                    <p>Don't have an account yet? <a href="<?= base_url('/signup'); ?>" class="text-decoration-none text-quinary"> Sign Up</a></p>
                </div> 
            </form>
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
<?= $this->endSection() ?>

<!-- CI function to use section of custom js -->
<?= $this->section('scripts') ?>
<script>
// functionality of hiding and displaying login and forgot password form
  function hideSigninForm(){
  var signinform = document.getElementById('user-signin-section')
  var forgotpwdform = document.getElementById('forgot-pwd-section');
  signinform.classList.add('d-none');
  forgotpwdform.classList.remove('d-none');
}
</script>

<?= $this->endSection() ?>

 



 