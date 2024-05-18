<!-- Including header section -->
<?php 
include('assets_component/front_end_component/header.php');
?>

<!-- User signin page starts here -->
<section class="user-signin-form d-flex align-items-center justify-content-center">
    <div class="container w-25 m-auto signinform">
        <form action="" class="form-floating">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="Enter your email id">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Enter your password">
                <label for="floatingPassword">Password</label>
            </div>
            <button class="btn btn-outline-secondary" type="submit">
                <i class="fas fa-sign-in"></i>
                Signin
            </button>
        </form>

        
    </div>

</section>

<!-- Including scripts page section -->
<?php 
include('assets_component/front_end_component/last_link_page.php');
?>