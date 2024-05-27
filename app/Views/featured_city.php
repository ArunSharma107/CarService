<!-- Codeinginter(CI) function to extend main_site_layout -->
<?= $this->extend('layouts/main_site_layout') ?>


<!-- CI function to use main-content section -->
<?= $this->section('main-content') ?>

<!-- Search section starts here  -->
<section class="hero-section-featured-city">
    <div class="px-4 py-5 text-center">
        <section class="search-section my-5 container-fluid">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="input-group input-group-lg">
                    <input class="form-control rounded-pill" id="searchBar" type="search" value="Search..."
                        autocomplete="off">
                    <span class="input-group-append">
                        <button class="btn btn-lg  rounded-pill" id="searchBtn" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>


            </div>
        </section>
        <!-- Dependent dropdown search facility starts here -->
        <section class="feature-section mb-5 d-none" id="dropdownSearch">
            <div class="container mt-5">

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 mt-2">
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                <option selected>Four Wheel Drive</option>
                                <option value="1">Small Car</option>
                                <option value="2">Sedan</option>
                                <option value="3">Front Wheel Drive</option>
                            </select>
                            <label for="floatingSelect">Select Category</label>
                        </div>

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 mt-2">

                        <div class="input-group input-group-lg">
                            <input class="form-control" id="dropdownSrcBar" type="search" placeholder="Search here"
                                autocomplete="off">
                            <span class="input-group-append">
                                <button class="btn btn-lg bg-white" id="srchBtn" type="button">
                                    <i class="fa fa-search"></i>
                                </button>

                            </span>
                        </div>


                    </div>
                </div>

                <div class="row justify-content-center">

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 mt-2">

                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                <option selected>Arunachal Pradesh</option>
                                <option value="1">Assam</option>
                                <option value="2">Bihar</option>
                                <option value="3">Chattisgarh</option>
                            </select>
                            <label for="floatingSelect">Select State</label>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 mt-2">
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                <option selected>Agartala</option>
                                <option value="1">Agra</option>
                                <option value="2">Ahmedabad</option>
                                <option value="3">Bareily</option>
                            </select>
                            <label for="floatingSelect">Select City</label>
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <!-- dependent dropdown search facility ends-->
    </div>
</section>
<!-- Dependent dropdown section ends here -->

<!-- car sales section starts here -->
<section class="car-sales">
    <div class="container mt-5 ">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12">
                <div class="section_title text-center mb-5">
                    <h2 class="title_text">
                        <span>CarSales In Cityname</span>
                    </h2>
                </div>

                <div class="section_title mb-2">
                    <span>
                        <h2 class="title_text">
                            <span class="title_sub">Exclusive cars in cityname</span>
                        </h2>

                    </span>
                </div>
                <div class="slider-container">
                    <div class="container">
                        <!-- swiper slider starts -->
                        <div class="swiper carSwiper">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <a href="#">
                                        <img src="<?= base_url('public/assets/images/cars/bugatti.jpg') ?>"
                                            class="img-fluid" alt="Bugatti">
                                    </a>
                                </div>


                                <div class="swiper-slide">
                                    <a href="#">
                                        <img src="<?= base_url('public/assets/images/cars/jeep.jpg') ?>"
                                            class="img-fluid" alt="Jeep">

                                    </a>

                                </div>

                                <div class="swiper-slide">
                                    <a href="#">
                                        <img src="<?= base_url('public/assets/images/cars/lamboarghini.jpg') ?>"
                                            class="img-fluid" alt="Lamborghini">
                                    </a>
                                </div>

                                <div class="swiper-slide">
                                    <a href="#">
                                        <img src="<?= base_url('public/assets/images/cars/audi.jpg') ?>"
                                            class="img-fluid" alt="audi">
                                    </a>
                                </div>

                                <div class="swiper-slide">
                                    <a href="#">
                                        <img src="<?= base_url('public/assets/images/cars/mustang.jpg') ?>"
                                            class="img-fluid" alt="Mustang">
                                    </a>
                                </div>

                                <div class="swiper-slide">
                                    <a href="#">
                                        <img src="<?= base_url('public/assets/images/cars/ambasador.jpg') ?>"
                                            class="img-fluid" alt="Ambasador">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#">
                                        <img src="<?= base_url('public/assets/images/cars/aston-martin.jpg') ?>"
                                            class="img-fluid" alt="AstonMartin">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#">
                                        <img src="<?= base_url('public/assets/images/cars/jaguar.jpg') ?>"
                                            class="img-fluid" alt="Jaguar">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#">
                                        <img src="<?= base_url('public/assets/images/cars/mercedes-benz.jpg') ?>"
                                            class="img-fluid" alt="Mercedes Benz">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#">
                                        <img src="<?= base_url('public/assets/images/cars/transformer.jpg') ?>"
                                            class="img-fluid" alt="Bumble Bee">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#">
                                        <img src="<?= base_url('public/assets/images/cars/porsche.jpg') ?>"
                                            class="img-fluid" alt="Porsche">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#">
                                        <img src="<?= base_url('public/assets/images/cars/range-rover.jpg') ?>"
                                            class="img-fluid" alt="Range Rover">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#">
                                        <img src="<?= base_url('public/assets/images/cars/rolls-royce.jpg') ?>"
                                            class="img-fluid" alt="Rolls Royce">
                                    </a>
                                </div>


                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <!-- swiper slider ends -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Exclusive car ads starts here -->
<section class="top-premium-car-section mt-5">
    <div class="container">
        <div class="section_title">
            <h2 class="title_text">
                <span class="title_sub">Exclusive Cars</span>
            </h2>
        </div>
        <div class="card topPremiumCarCard">
            <div class="row">
                <div class="slider-container">
                    <div class="container">
                        <!-- swiper slider starts -->
                        <div class="swiper exclusiveCarSwiper mt-4">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <a href="#">
                                        <img src="<?= base_url('public/assets/images/cars/car-front.webp');  ?>"
                                            alt="Lamboarghini" class="card-img-top img-fluid">
                                    </a>
                                </div>


                                <div class="swiper-slide">
                                    <a href="#">
                                        <img src="<?= base_url('public/assets/images/cars/car-back.webp');  ?>"
                                            alt="Lamboarghini" class="card-img-top img-fluid">

                                    </a>

                                </div>

                                <div class="swiper-slide">
                                    <a href="#">
                                        <img src="<?= base_url('public/assets/images/cars/car-side.webp');  ?>"
                                            alt="Lamboarghini" class="card-img-top img-fluid">
                                    </a>
                                </div>

                                <div class="swiper-slide">
                                    <a href="#">
                                        <img src="<?= base_url('public/assets/images/cars/car-interior.webp');  ?>"
                                            alt="Lamboarghini" class="card-img-top img-fluid">
                                    </a>
                                </div>





                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination text-info"></div>
                        </div>
                        <!-- swiper slider ends -->

                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card-body">



                        <h5 class="card-title">Exclusive car heading - Lorem ipsum dolor sit amet.</h5>

                        <p class="card-text car-page-nav"> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Minima similique
                            neque dolores quae nulla qui, aliquid ex eum praesentium soluta minus maxime est aspernatur
                            quas dicta, et, mollitia nemo magni voluptates ut consequatur! Blanditiis molestiae, dolor
                            optio amet recusandae excepturi ea, quae aliquam et sequi quidem dignissimos quisquam in
                            omnis exercitationem. Magni corporis reiciendis eum, assumenda nostrum ipsa nesciunt <a
                                href="#">...</a></p>
                        <h5 class="text-left">
                            <span class="badge text-secondary bg-secondary-subtle  border-secondary rounded-pill">2024
                                Lamborghine Gold</span>
                        </h5>
                        <p class="card-text text-left"><small
                                class="text-muted badge text-secondary bg-secondary-subtle  border-secondary rounded-pill">
                                <i class="fa-solid fa-location-dot"></i>
                                cityname
                                <img src="<?= base_url('public/assets/images/nations flag/india-logo.png'); ?>"
                                    alt="Indian logo" id="car-address-img">
                            </small></p>


                        <div class="contact-owner">
                            <a class="btn btn-light btn-floating m-1" href="#!" role="button"><i
                                    class="fa-brands fa-whatsapp"></i></a>
                            <a class="btn btn-light btn-floating m-1" href="#!" role="button"><i
                                    class="fa-solid fa-phone"></i></a>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Exclusive car card ends here -->


<!-- Premium car ads section starts here -->
<section class="exclusive-car-section mt-5">
    <div class="container">
        <div class="section_title">
            <h2 class="title_text">
                <span class="title_sub">Premium Cars</span>
            </h2>
        </div>
        <div class="card premium-car-card">
            <div class="row">
                <div class="col-md-4">
                    <div class="img-container">
                        <img src="<?= base_url('public/assets/images/cars/mustang.jpg') ?>"
                            class="img-fluid rounded-start" alt="Mustang">

                        <span
                            class="badge bg-secondary-subtle border border-secondary-subtle text-secondary-emphasis rounded-pill carImages">
                            <i class="fa-solid fa-image"></i> +5</span>

                    </div>

                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Premium cars heading - Lorem ipsum dolor sit.</h5>


                        <p class="car-description car-page-nav card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quibusdam consectetur magnam
                            ad voluptatem sit illo laudantium fugiat iure aliquam in, autem labore exercitationem
                            eveniet quas incidunt aut voluptatum voluptatibus voluptate officia eos. Unde tempore <a
                                href="#">...</a></p>
                        </p>

                        <p class="card-text mt-3">
                            <span class="badge text-secondary bg-secondary-subtle  border-secondary rounded-pill">2024
                                Mustang XI</span>
                        </p>




                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</section>

<!-- Standard car section starts here -->
<section class="less-premium-car-section mt-5">
    <div class="container">
        <div class="section_title">
            <h2 class="title_text">
                <span class="title_sub">Standard Cars</span>
            </h2>
        </div>
        <div class="card premium-car-card">
            <div class="row g-0">

                <div class="col-md-12">

                    <div class="card-body">
                        <h5 class="card-title">Standard cars heading - The best cars in cityname</h5>



                        <p class="car-description car-page-nav card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quibusdam consectetur magnam
                            ad voluptatem sit illo laudantium fugiat iure aliquam in, autem labore exercitationem
                            eveniet quas incidunt aut voluptatum voluptatibus voluptate officia eos. Unde tempore
                            <a href="#">...</a>
                        </p>
                        <p class="card-text mt-3">
                            <span class="badge text-secondary bg-secondary-subtle  border-secondary rounded-pill">2016
                                Mustang XI</span>
                        </p>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- top premium cars swiper starts here -->
<section class="top-premium-cars-swiper mt-5">
    <div class="container mt-5">

        <div class="swiper footerPremiumCarSwiper">

            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="#">
                        <img src="<?= base_url('public/assets/images/cars/bugatti.jpg') ?>" class="img-fluid"
                            alt="Bugatti">
                    </a>
                </div>


                <div class="swiper-slide">
                    <a href="#">
                        <img src="<?= base_url('public/assets/images/cars/jeep.jpg') ?>" class="img-fluid" alt="Jeep">

                    </a>

                </div>

                <div class="swiper-slide">
                    <a href="#">
                        <img src="<?= base_url('public/assets/images/cars/lamboarghini.jpg') ?>" class="img-fluid"
                            alt="Lamborghini">
                    </a>
                </div>

                <div class="swiper-slide">
                    <a href="#">
                        <img src="<?= base_url('public/assets/images/cars/audi.jpg') ?>" class="img-fluid" alt="audi">
                    </a>
                </div>

                <div class="swiper-slide">
                    <a href="#">
                        <img src="<?= base_url('public/assets/images/cars/mustang.jpg') ?>" class="img-fluid"
                            alt="Mustang">
                    </a>
                </div>

                <div class="swiper-slide">
                    <a href="#">
                        <img src="<?= base_url('public/assets/images/cars/ambasador.jpg') ?>" class="img-fluid"
                            alt="Ambasador">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="<?= base_url('public/assets/images/cars/aston-martin.jpg') ?>" class="img-fluid"
                            alt="AstonMartin">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="<?= base_url('public/assets/images/cars/jaguar.jpg') ?>" class="img-fluid"
                            alt="Jaguar">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="<?= base_url('public/assets/images/cars/mercedes-benz.jpg') ?>" class="img-fluid"
                            alt="Mercedes Benz">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="<?= base_url('public/assets/images/cars/transformer.jpg') ?>" class="img-fluid"
                            alt="Bumble Bee">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="<?= base_url('public/assets/images/cars/porsche.jpg') ?>" class="img-fluid"
                            alt="Porsche">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="<?= base_url('public/assets/images/cars/range-rover.jpg') ?>" class="img-fluid"
                            alt="Range Rover">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="<?= base_url('public/assets/images/cars/rolls-royce.jpg') ?>" class="img-fluid"
                            alt="Rolls Royce">
                    </a>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<!-- pagination starts here -->
<nav aria-label="Page navigation example" class="mt-5 p-2">
    <ul class="pagination justify-content-center">
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>
<!-- pagination ends here -->

<!-- empty space for the admin to write someting -->
<section class="mt-5 p-5">
    <div class="container admin-content p-5">

        <p class="card-text">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero praesentium quod amet iste illum animi
            culpa, eos odio delectus ipsum voluptatem ullam laudantium dolore repudiandae esse necessitatibus repellat
            tempora impedit? Asperiores iusto amet nostrum doloribus voluptatum quidem quas tempore corporis, expedita
            cumque atque cupiditate dolores dolorum et quis possimus commodi.
        </p>


    </div>
</section>

<?= $this->endSection() ?>

<?=  $this->section('scripts') ?>
<script>
// search bar toggle dependent dropdown 
const inputBox = document.getElementById('searchBar');
const element = document.getElementById('dropdownSearch');

inputBox.addEventListener("click", () => {
    element.classList.remove('d-none');
    inputBox.setAttribute('value', '');

});
</script>


<?= $this->endSection() ?>