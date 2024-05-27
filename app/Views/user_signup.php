<!-- CI function to extend the layout of signup form -->
<?= $this->extend('layouts/signup_signin_form_layout')  ?>

<!-- CI function to use form section -->
<?= $this->section('form')  ?>
<section class="user-signup-form mt-5">
    <div class="container">
        <div id="user-signup-section" class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 text-center rounded bg-white shadow p-5 ">

            <form action="#" class="">
                <h3>Sign Up</h3>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="user-email">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <input type="email" class="form-control" placeholder="" aria-label="user-email"
                        aria-describedby="user-email">
                </div>

                <div class="input-group mb-2">
                    <span class="input-group-text" id="user-pwd">
                        <i class="fas fa-eye"></i>
                    </span>
                    <input type="password" class="form-control" placeholder="" aria-label="user-pwd"
                        aria-describedby="user-pwd">
                </div>

                <div class="mt-3 mb-2">
                    <div class="g-recaptcha" data-sitekey="6Lex0uUpAAAAALdUHICtQ8oRwDMktJhQdjCsoCjL"></div>
                </div>

                <div class="form-check mt-3">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox">I declare that I have read the terms &
                        conditions and accept the content in full.
                    </label>
                </div>

                <button class="btn w-100 my-4" id="userSignupBtn">
                    Sign-Up
                </button>
            </form>
            <div class="text-quinary">
                <h4> Already, have an account!</h4>
            </div>

            <a href="<?= base_url('/signin'); ?>">
                    <button class="btn btn-success w-100 my-4">
                        Login
                    </button>
            </a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>