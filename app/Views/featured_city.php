<!-- Including Header and navbar section -->
<?php 
include('assets_component/front_end_component/header.php');
include('assets_component/front_end_component/navbar.php'); 
?>

<section class="hero-section-featured-city">
    <div class="px-4 py-5 text-center">
        <!-- Search section starts here  -->
        <section class="search-section my-5 container">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="input-group input-group-lg">
                    <input class="form-control rounded-pill" id="searchBar" type="search" placeholder="Search City"
                        autocomplete="off">
                    <span class="input-group-append">
                        <button class="btn btn-lg  rounded-pill" id="searchBtn" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- search suggestion box -->
                <div class="search-suggestion-box mt-3 p-1 border-danger" id="searchResult">
                    <!-- getting data from javascript -->
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
                            <input class="form-control" id="" type="search" placeholder="Search here"
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

<!-- Search bar section starts here -->
<!-- <section class="search-section my-5 container">
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <div class="input-group input-group-lg">
            <input class="form-control rounded-pill" id="searchBar" type="search" placeholder="Search City"
                autocomplete="off">
            <span class="input-group-append">
                <button class="btn btn-lg  rounded-pill" id="searchBtn" type="button">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
         
        <div class="search-suggestion-box mt-3 p-1 border-danger" id="searchResult">

        </div>

    </div>
</section> -->

<!-- Search bar section ends here -->

<!-- Dependent dropdown section starts here -->
<!-- <section class="feature-section mb-5 d-none" id="dropdownSearch">
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
            <input class="form-control" id="" type="search" placeholder="Search here"
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
</section> -->

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
                        <h2 class="title_text"> Top premium cars in cityname</h2>

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



                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <!-- swiper slider ends -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- top premium car section starts here -->
<section class="top-premium-car-section mt-5 ">
    <div class="container">
        <div class="swiper topPremiumCarSwiper">
            <div class="swiper-wrapper">
                <!-- card1 -->
                <div class="swiper-slide">
                    <div class="card top-premium-car-card">
                        <img class="card-img-top img-fluid" src="<?= base_url('public/assets/images/cars/lamboarghini.jpg') ?> "
                            alt="Lamborghini">
                        <div class="card-body">
                            <h5>
                                <span
                                    class="badge text-secondary bg-secondary-subtle  border-secondary rounded-pill">2024
                                    Lamborghine Gold</span>
                            </h5>
                            <p class="card-text">
                                <span class="badge text-secondary bg-secondary-subtle  border-secondary rounded-pill">
                                    <i class="fa-solid fa-gauge"></i> 200 Km</span>
                                <span class="badge text-secondary bg-secondary-subtle  border-secondary rounded-pill">
                                    <i class="fa-solid fa-gas-pump"></i> Diesel</span>
                                <span class="badge text-secondary bg-secondary-subtle  border-secondary rounded-pill">
                                    <i class="fa-solid fa-tag"></i> 20Lakh</span>

                            </p>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>

                        </div>
                    </div>

                </div>

                <!-- card-2 -->
                <div class="swiper-slide">
                    <div class="card top-premium-car-card">
                        <img class="card-img-top img-fluid" src="<?= base_url('public/assets/images/cars/rolls-royce.jpg') ?> "
                            alt="Rolls Royce">
                        <div class="card-body">
                            <h5>
                                <span
                                    class="badge text-secondary bg-secondary-subtle  border-secondary rounded-pill">2019
                                    RollsRoyce Ghost</span>
                            </h5>
                            <p class="card-text">
                                <span class="badge text-secondary bg-secondary-subtle  border-secondary rounded-pill">
                                    <i class="fa-solid fa-gauge"></i> 2000 Km</span>
                                <span class="badge text-secondary bg-secondary-subtle  border-secondary rounded-pill">
                                    <i class="fa-solid fa-gas-pump"></i> Diesel</span>
                                <span class="badge text-secondary bg-secondary-subtle  border-secondary rounded-pill">
                                    <i class="fa-solid fa-tag"></i> 2Cr</span>

                            </p>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>

                        </div>
                    </div>

                </div>

                <!-- card-3 -->
                <div class="swiper-slide">
                    <div class="card top-premium-car-card">
                        <img class="card-img-top" src="<?= base_url('public/assets/images/cars/mustang.jpg') ?> "
                            alt="Mustang">
                        <div class="card-body">
                            <h5>
                                <span
                                    class="badge text-secondary bg-secondary-subtle  border-secondary rounded-pill">2008
                                    Mustang OS</span>
                            </h5>
                            <p class="card-text">
                                <span class="badge text-secondary bg-secondary-subtle  border-secondary rounded-pill">
                                    <i class="fa-solid fa-gauge"></i> 17000 Km</span>
                                <span class="badge text-secondary bg-secondary-subtle  border-secondary rounded-pill">
                                    <i class="fa-solid fa-gas-pump"></i> Diesel</span>
                                <span class="badge text-secondary bg-secondary-subtle  border-secondary rounded-pill">
                                    <i class="fa-solid fa-tag"></i> 13Lakh</span>

                            </p>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>

                        </div>
                    </div>

                </div>

                <!-- card-4 -->
                <div class="swiper-slide">
                    <div class="card top-premium-car-card">
                        <img class="card-img-top" src="<?= base_url('public/assets/images/cars/jeep.jpg') ?> "
                            alt="Jeep">
                        <div class="card-body">
                            <h5>
                                <span
                                    class="badge text-secondary bg-secondary-subtle  border-secondary rounded-pill">2023
                                    Jeep Rectus</span>
                            </h5>
                            <p class="card-text">
                                <span class="badge text-secondary bg-secondary-subtle  border-secondary rounded-pill">
                                    <i class="fa-solid fa-gauge"></i> 7000 Km</span>
                                <span class="badge text-secondary bg-secondary-subtle  border-secondary rounded-pill">
                                    <i class="fa-solid fa-gas-pump"></i> Diesel</span>
                                <span class="badge text-secondary bg-secondary-subtle  border-secondary rounded-pill">
                                    <i class="fa-solid fa-tag"></i> 20Lakh</span>

                            </p>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>

                        </div>
                    </div>

                </div>

                <!-- card-5 -->
                <div class="swiper-slide">
                    <div class="card top-premium-car-card">
                        <img class="card-img-top" src="<?= base_url('public/assets/images/cars/bugatti.jpg') ?> "
                            alt="Bugatti">
                        <div class="card-body">
                            <h5>
                                <span
                                    class="badge text-secondary bg-secondary-subtle  border-secondary rounded-pill">2021
                                    Bugatti Black Mamba</span>
                            </h5>
                            <p class="card-text">
                                <span class="badge text-secondary bg-secondary-subtle  border-secondary rounded-pill">
                                    <i class="fa-solid fa-gauge"></i> 5000 Km</span>
                                <span class="badge text-secondary bg-secondary-subtle  border-secondary rounded-pill">
                                    <i class="fa-solid fa-gas-pump"></i> Petrol</span>
                                <span class="badge text-secondary bg-secondary-subtle  border-secondary rounded-pill">
                                    <i class="fa-solid fa-tag"></i> 30Lakh</span>

                            </p>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>

                        </div>
                    </div>

                </div>

                <!-- card-6 -->
                <div class="swiper-slide">
                    <div class="card top-premium-car-card">
                        <img class="card-img-top" src="<?= base_url('public/assets/images/cars/audi.jpg') ?> "
                            alt="audi">
                        <div class="card-body">
                            <h5>
                                <span
                                    class="badge text-secondary bg-secondary-subtle  border-secondary rounded-pill">2022
                                    Audi Silver</span>
                            </h5>
                            <p class="card-text">
                                <span class="badge text-secondary bg-secondary-subtle  border-secondary rounded-pill">
                                    <i class="fa-solid fa-gauge"></i> 200 Km</span>
                                <span class="badge text-secondary bg-secondary-subtle  border-secondary rounded-pill">
                                    <i class="fa-solid fa-gas-pump"></i> Diesel</span>
                                <span class="badge text-secondary bg-secondary-subtle  border-secondary rounded-pill">
                                    <i class="fa-solid fa-tag"></i> 20Lakh</span>

                            </p>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>

                        </div>
                    </div>

                </div>




            </div>
            <div class="swiper-pagination"></div>
 
        </div>




    </div>
</section>

<!-- Premium car section starts here -->
<section class="premium-car-section">
    <div class="container">
        <div class="card premium-car-card">
            <div class="row ">
                <div class="col-md-4">
                    <img src="<?= base_url('public/assets/images/cars/mustang.jpg') ?>" class="img-fluid rounded-start"
                        alt="Mustang">
                    <span
                        class="badge bg-secondary-subtle border border-secondary-subtle text-secondary-emphasis rounded-pill carPrice">
                        <i class="fa-solid fa-tag"></i> Rs. 70Lakh</span>
                        <span
                        class="badge bg-secondary-subtle border border-secondary-subtle text-secondary-emphasis rounded-pill carImages">
                        <i class="fa-solid fa-image"></i> +5</span>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">The best cars in cityname</h5>
                        <p class="card-text mt-3">
                            <span class="badge text-secondary bg-secondary-subtle  border-secondary rounded-pill">2024
                                Mustang XI</span>
                        </p>
                        <p class="card-text">
                            <span class="badge text-secondary bg-secondary-subtle  border-secondary rounded-pill"> <i
                                    class="fa-solid fa-gauge"></i> 50,000 Km</span>
                            <span class="badge text-secondary bg-secondary-subtle  border-secondary rounded-pill"> <i
                                    class="fa-solid fa-gas-pump"></i> Petrol</span>
                        </p>
                        <p class="car-description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quibusdam consectetur magnam
                            ad voluptatem sit illo laudantium fugiat iure aliquam in, autem labore exercitationem
                            eveniet quas incidunt aut voluptatum voluptatibus voluptate officia eos. Unde tempore
                            laboriosam ex. Corporis, laborum quo. Iste rem dolore fugiat autem reiciendis ullam unde
                            quidem maiores.
                        </p>
                        <p class="card-text"><small class="text-muted">
                                <i class="fa-solid fa-location-dot"></i>
                                123 Agra agartala India
                                <img src="<?= base_url('public/assets/images/nations flag/india-logo.png'); ?>"
                                    alt="Indian logo" id="car-address-img">
                            </small></p>


                        <div class="contact-owner">
                        <!-- <button class="btn btn-outline-secondary  me-2">
                                <i class="fa-brands fa-whatsapp"></i> 
                            </button>

                            <button class="btn btn-outline-secondary">
                                <i class="fa-solid fa-phone"></i> 
                            </button> -->
                            <a class="btn btn-light btn-floating m-1" href="#!" role="button"><i class="fa-brands fa-whatsapp"></i></a>
                            <a class="btn btn-light btn-floating m-1" href="#!" role="button"><i class="fa-solid fa-phone"></i></a>
                             
                             
 
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- less premium car section starts here -->
<section class="less-premium-car-section mt-4">
    <div class="container">
        <div class="card premium-car-card">
            <div class="row g-0">

                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">The best cars in cityname</h5>
                        <p class="card-text mt-3">
                            <span class="badge text-secondary bg-secondary-subtle  border-secondary rounded-pill">2024
                                Mustang XI</span>
                        </p>
                        <p class="card-text">
                            <span class="badge text-secondary bg-secondary-subtle  border-secondary rounded-pill"> <i
                                    class="fa-solid fa-gauge"></i> 50,000 Km</span>
                            <span class="badge text-secondary bg-secondary-subtle  border-secondary rounded-pill"> <i
                                    class="fa-solid fa-gas-pump"></i> Petrol</span>
                        </p>
                        <p class="car-description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quibusdam consectetur magnam
                            ad voluptatem sit illo laudantium fugiat iure aliquam in, autem labore exercitationem
                            eveniet quas incidunt aut voluptatum voluptatibus voluptate officia eos. Unde tempore
                            laboriosam ex. Corporis, laborum quo. Iste rem dolore fugiat autem reiciendis ullam unde
                            quidem maiores.
                        </p>
                        <p class="card-text"><small class="text-muted">
                                <i class="fa-solid fa-location-dot"></i>
                                123 Agra agartala India
                                <img src="<?= base_url('public/assets/images/nations flag/india-logo.png'); ?>"
                                    alt="Indian logo" id="car-address-img">
                            </small></p>


                        <div class="contact-owner">
                        <a class="btn btn-light btn-floating m-1" href="#!" role="button"><i class="fa-brands fa-whatsapp"></i></a>
                            <a class="btn btn-light btn-floating m-1" href="#!" role="button"><i class="fa-solid fa-phone"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- top premium cars swiper starts here -->
<section class="top-premium-cars-swiper">
    <div class="container mt-5">

        <div class="swiper footerPremiumCarSwiper">

            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?= base_url('public/assets/images/cars/audi.jpg') ?>" class="img-fluid" alt="audi"
                        width="30" height="30" />
                </div>

                <div class="swiper-slide">
                    <img src="<?= base_url('public/assets/images/cars/lamboarghini.jpg') ?>" class="img-fluid"
                        alt="Lamborghini">
                </div>
                <div class="swiper-slide">
                    <img src="<?= base_url('public/assets/images/cars/jeep.jpg') ?>" class="img-fluid" alt="Jeep">
                </div>
                <div class="swiper-slide">
                    <img src="<?= base_url('public/assets/images/cars/bugatti.jpg') ?>" class="img-fluid" alt="Bugatti">
                </div>
                <div class="swiper-slide">
                    <img src="<?= base_url('public/assets/images/cars/mustang.jpg') ?>" class="img-fluid" alt="Mustang">
                </div>
                <div class="swiper-slide">
                    <img src="<?= base_url('public/assets/images/cars/porsche.jpg') ?>" class="img-fluid" alt="Porsche">
                </div>
                <div class="swiper-slide">
                    <img src="<?= base_url('public/assets/images/cars/range-rover.jpg') ?>" class="img-fluid"
                        alt="Range Rover">
                </div>
                <div class="swiper-slide">
                    <img src="<?= base_url('public/assets/images/cars/rolls-royce.jpg') ?>" class="img-fluid"
                        alt="Rolls Royce">
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<!-- pagination starts here -->
<nav aria-label="Page navigation example" class="mt-5">
    <ul class="pagination justify-content-center">
        <li class="page-item disabled">
            <a class="page-link">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#">Next</a>
        </li>
    </ul>
</nav>

<!-- company declaration section starts here -->
<section class="company-declartion mt-5">
    <div class=" bg-body-secondary rounded-3">
        <div class="container-fluid p-3">
            <div class="section_title text-center mb-5">
                <h2 class="title_text ">
                    <span>Company Declaration</span>
                </h2>
            </div>


            <p class="col-md-12">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus odio consequuntur
                minima ex iure quasi. Expedita, sint quisquam magni non harum quo sit explicabo reiciendis voluptatibus
                iure natus earum similique quidem. Sint asperiores tempore quisquam? Nemo laborum totam, error
                voluptatem quae ea porro maiores commodi. Cum sint officiis voluptate voluptatibus.</p>

        </div>
    </div>
</section>


<!-- Including footer section -->
<?php
include('assets_component/front_end_component/footer.php');
include('assets_component/front_end_component/last_link_page.php');
?>