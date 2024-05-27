<!--=======================================
=========================================== 
Author : Rahul
Date of Starting : 12th-May-2024
Developed by : Arun Sharma
===========================================
=========================================-->

<!-- Codeigniter function to extend main_site_layout -->
<?=  $this->extend('layouts/main_site_layout')  ?>


<?=  $this->section('main-content') ?>
<!-- hero section starts here -->
<section class="hero-section">
    <div class="px-4 py-5 text-center">
        <h1 class="hero-heading">Welcome To CarServices</h1>
        <div class="col-lg-6 mx-auto">
            <p class="subheading mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <div class="d-grid d-flex justify-content-center">
                <button type="button" class="btn btn-danger btn-lg px-4">
                    <i class="fas fa-user-plus"></i>
                    SignUp / Login</button>
                <!-- <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button> -->
            </div>
        </div>
    </div>
</section>
<!-- hero section ends here -->

<!-- featured country section starts here -->
<section class="feature-section mb-5">
    <div class="container mt-5">

        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                <div class="section_title text-center mb-5">
                    <h2 class="title_text">
                        <span>Featured Countries</span>
                    </h2>
                </div>

                <!-- country 1- Canada -->
                <div class="dropdown">
                    <div class="feature-country" data-bs-toggle="dropdown" aria-expanded="false">
                        <button class="btn btn-lg w-100 dropdown-toggle " type="button">
                            <div class="country-img-container">
                                <img src="<?= base_url('public/assets/images/nations flag/canada-logo.jpg'); ?>"
                                    alt="canada-logo" class="img-fluid rounded-circle">
                            </div>
                            <div class="country-name">Canada</div>

                        </button>

                    </div>

                    <ul class="dropdown-menu container states-name-dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="<?= base_url('/city'); ?>">
                                <img src="<?= base_url('public/assets/images/canada-cities/abbotsford.jpg'); ?>"
                                    alt="Abbotsford" class="img-fluid state-img">
                                <span class="state-name">Abbotsford</span>

                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="#">
                                <img src="<?= base_url('public/assets/images/canada-cities/barrie.jpg'); ?>"
                                    alt="Barrie" class="img-fluid state-img">
                                <span class="state-name">Barrie</span>

                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <img src="<?= base_url('public/assets/images/canada-cities/brandon.jpg'); ?>"
                                    alt="Brandon" class="img-fluid state-img">
                                <span class="state-name">Brandon</span>

                            </a>
                        </li>
                    </ul>
                </div>

                <!-- country 2- India -->
                <div class="dropdown">
                    <div class="feature-country" data-bs-toggle="dropdown" aria-expanded="false">
                        <button class="btn btn-lg w-100 dropdown-toggle " type="button">
                            <div class="country-img-container">
                                <img src="<?= base_url('public/assets/images/nations flag/india-logo.png'); ?>"
                                    alt="india-logo" class="img-fluid rounded-circle">
                            </div>
                            <div class="country-name">India</div>

                        </button>

                    </div>

                    <ul class="dropdown-menu container states-name-dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">
                                <img src="<?= base_url('public/assets/images/indian-cities/agartala.jpg'); ?>"
                                    class="img-fluid state-img" alt="Agartala">
                                <span class="state-name">Agartala</span>

                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="#">
                                <img src="<?= base_url('public/assets/images/indian-cities/agra.jpg'); ?>"
                                    alt="British Columbia" class="img-fluid state-img">
                                <span class="state-name">Agra</span>

                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item " href="#">
                                <img src="<?= base_url('public/assets/images/indian-cities/ahmedabad.jpg'); ?>"
                                    alt="Manitoba" class="img-fluid state-img">
                                <span class="state-name">Ahmedabad</span>

                            </a>
                        </li>
                    </ul>
                </div>

                <!-- country 3- Singapore -->
                <div class="dropdown">
                    <div class="feature-country" data-bs-toggle="dropdown" aria-expanded="false">
                        <button class="btn btn-lg w-100 dropdown-toggle " type="button">
                            <div class="country-img-container">
                                <img src="<?= base_url('public/assets/images/nations flag/singapore-logo.png'); ?>"
                                    alt="india-logo" class="img-fluid rounded-circle">
                            </div>
                            <div class="country-name">Singapore</div>

                        </button>

                    </div>

                    <ul class="dropdown-menu container states-name-dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">
                                <img src="<?= base_url('public/assets/images/backgrounds/car_bg01.jpg'); ?>"
                                    class="img-fluid state-img" alt="Alberta">
                                <span class="state-name">Central Region</span>

                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="#">
                                <img src="<?= base_url('public/assets/images/backgrounds/car_bg01.jpg'); ?>"
                                    alt="British Columbia" class="img-fluid state-img">
                                <span class="state-name">East Region</span>

                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item " href="#">
                                <img src="<?= base_url('public/assets/images/backgrounds/car_bg01.jpg'); ?>"
                                    alt="Manitoba" class="img-fluid state-img">
                                <span class="state-name">North Region</span>

                            </a>
                        </li>
                    </ul>
                </div>

                <!-- country 4- United Kingdom -->
                <div class="dropdown">
                    <div class="feature-country" data-bs-toggle="dropdown" aria-expanded="false">
                        <button class="btn btn-lg w-100 dropdown-toggle " type="button">
                            <div class="country-img-container">
                                <img src="<?= base_url('public/assets/images/nations flag/uk-flag.png'); ?>"
                                    alt="india-logo" class="img-fluid rounded-circle">
                            </div>
                            <div class="country-name">United Kingdom</div>

                        </button>

                    </div>

                    <ul class="dropdown-menu container states-name-dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">
                                <img src="<?= base_url('public/assets/images/backgrounds/car_bg01.jpg'); ?>"
                                    class="img-fluid state-img" alt="Alberta">
                                <span class="state-name">Aberdeen</span>

                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="#">
                                <img src="<?= base_url('public/assets/images/backgrounds/car_bg01.jpg'); ?>"
                                    alt="British Columbia" class="img-fluid state-img">
                                <span class="state-name">Bedford</span>

                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item " href="#">
                                <img src="<?= base_url('public/assets/images/backgrounds/car_bg01.jpg'); ?>"
                                    alt="Manitoba" class="img-fluid state-img">
                                <span class="state-name">Brimingham</span>

                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- featured country section ends here -->

<?= $this->endSection() ?>