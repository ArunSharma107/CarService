<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->renderSection('page-title')?>
    </title>

    <!-- custom css file -->
    <link rel="stylesheet" href="<?= base_url('public/assets/css/frontstyle.css'); ?>">
    <!-- bootstrap 5 css file -->
    <link rel="stylesheet" href="<?= base_url('public/assets/css/bootstrap.min.css'); ?>">
    <!-- fontawesome css file -->
    <link rel="stylesheet" href="<?= base_url('public/assets/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/assets/css/fontawesome.min.css'); ?>">
    <!-- swiper css file -->
    <link rel="stylesheet" href="<?= base_url('public/assets/css/swiper-bundle.min.css'); ?>">

</head>

<body>
    <!-- navbar starts here -->
    <header class="p-2 indexnav">
        <div class="container">
            <div class="d-flex flex-row align-items-center justify-content-start">
                <!-- logo image -->
                <div class="logo me-auto">
                    <img src="<?= base_url('public/assets/images/logo/carlogo.png'); ?>" alt="car logo"
                        class="img-fluid rounded-circle border">
                </div>
                 
                <div class="post-add-btn">
                    <a href="<?= base_url('/signup'); ?>">
                        <button class="btn btn-secondary btn-small btn-dark">
                            <i class="fa-solid fa-rectangle-ad"></i>
                            <span>
                                <b>
                                Post Your Add
                                </b>
                            </span>


                        </button>
                    </a>
                </div>
 


            </div>
        </div>
    </header>
    <!-- navbar ends here -->


    <!-- Codeigniter function to renderSection Main-content -->
    <?=  $this->renderSection('main-content') ?>





    <!-- footer starts here -->
    <div class="container mt-5">
        <footer class=" py-3 my-4 border-top">
            <div class="row align-items-center">
                <div class="col mb-5">
                    <div class="section_title text-center mb-3">
                        <h4 class="title_text_sm ">
                            Terms & Conditions
                        </h4>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#indexModal">
                            <i class="fa-solid fa-file-contract"></i>
                            Terms & Conditions
                        </button>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="section_title text-center mb-3">
                        <h4 class="title_text_sm ">
                            Privacy Ploicy
                        </h4>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-outline-secondary">
                            <i class="fa-solid fa-shield-halved"></i>
                            Privacy Policy
                        </button>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="section_title text-center mb-3">
                        <h4 class="title_text_sm ">
                            Contact Us
                        </h4>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-outline-secondary">
                            <i class="fa fa-address-book"></i>
                            Contact Us
                        </button>
                    </div>
                </div>
                <?= $this->renderSection('footer-cta')?>

                
            </div>
    </div>
    <div class="row">
        <div class="text-center">
            <ul class="list-group list-group-flush">

                <li class="list-group-item">
                    <a class="btn btn-primary btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-secondary btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-danger btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-instagram"></i></a>
                </li>
            </ul>
        </div>

    </div>

    </footer>
    </div>
    <!-- footer ends here -->

    <!-- Copyright -->
    <div class="text-center p-3 footer-copyright">
        <!-- © 2024 Copyright:
        <a class="company-link" href="#">CarServices.com</a> -->
    </div>
    <!-- Copyright -->



    <!-- modal starts here -->
    <!-- Modal to show warning/terms and condition -->
    <div class="modal fade" id="indexModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Terms And Conditions</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora fugiat itaque voluptatum vitae
                        ab repudiandae illo odio, quisquam quaerat quia corporis corrupti pariatur veritatis? In eos
                        natus, vel magni placeat amet atque? Vero aperiam quia tempora assumenda nostrum, fuga
                        voluptate!
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Accept</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal ends here -->

    <!-- bootstrap 5 bundle with popper -->
    <script src="<?= base_url('public/assets/js/bootstrap.bundle.min.js'); ?> "></script>
    <!-- jQurey file -->
    <script src="<?= base_url('public/assets/js/jquery.min.js'); ?>"></script>
    <!-- swiper file -->
    <script src="<?= base_url('public/assets/js/swiper-bundle.min.js'); ?>"></script>
    <!-- custom javascript file -->
    <script src="<?= base_url('public/assets/js/frontView.js'); ?> "></script>
    <!-- google recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <?= $this->renderSection('scripts') ?>

</body>

</html>