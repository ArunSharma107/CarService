<!-- Including Header and navbar section -->
<?php 
include('assets_component/front_end_component/header.php');
include('assets_component/front_end_component/navbar.php'); 
?>


<!-- Search bar section starts here -->
<section class="search-section my-5 container">
    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
        <div class="input-group">
            <input class="form-control rounded-pill" id="searchBar" type="search" value="Search City">
            <span class="input-group-append">
                <button class="btn btn-outline-dark bg-white rounded-pill" id="searchBtn" type="button">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </div>
</section>
<!-- Search bar section ends here -->

<!-- Dependent dropdown section starts here -->
<section class="feature-section mb-5">
    <div class="container mt-5">

        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                <div class="section_title text-center mb-5">
                    <h2 class="title_text">
                        <span>Select Country</span>
                    </h2>
                </div>

                <select name="" id="" class="form-select country-select">

                    <option value="1">
                        Canada
                    </option>
                    <option value="2" selected>
                        India
                    </option>
                </select>

                <select name="" id="" class="form-select city-select">
                    <option selected>Agra</option>
                    <option value="1">Agartala</option>
                    <option value="2">Ahmedabad</option>

                </select>

            </div>
        </div>
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

<!-- Top premium car section starts here -->
<section class="top-premium-car-section ">
    <div class="container">
        <div class="card top-premium-car-card">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?= base_url('public/assets/images/cars/mustang.jpg') ?>" class="img-fluid rounded-start"
                        alt="Mustang">
                    <span
                        class="badge bg-secondary-subtle border border-secondary-subtle text-secondary-emphasis rounded-pill carPrice">
                        <i class="fa-solid fa-tag"></i> Rs. 70Lakh</span>
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
                            <button class="btn btn-outline-secondary me-2">
                                <i class="fa-brands fa-whatsapp"></i> Whatsapp
                            </button>

                            <button class="btn btn-outline-secondary">
                                <i class="fa-solid fa-phone"></i> Telephone
                            </button>
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
        <div class="card top-premium-car-card">
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
                            <button class="btn btn-outline-secondary me-2">
                                <i class="fa-brands fa-whatsapp"></i> Whatsapp
                            </button>

                            <button class="btn btn-outline-secondary">
                                <i class="fa-solid fa-phone"></i> Telephone
                            </button>
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

    <div class="swiper topPremiumCarSwiper">

    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="<?= base_url('public/assets/images/cars/audi.jpg') ?>" class="img-fluid" alt="audi" width="30" height="30"/>
      </div>

      <div class="swiper-slide">
      <img src="<?= base_url('public/assets/images/cars/lamboarghini.jpg') ?>" class="img-fluid" alt="Lamborghini">
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
      <img src="<?= base_url('public/assets/images/cars/range-rover.jpg') ?>" class="img-fluid" alt="Range Rover">
      </div>
      <div class="swiper-slide">
      <img src="<?= base_url('public/assets/images/cars/rolls-royce.jpg') ?>" class="img-fluid" alt="Rolls Royce">
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

        
        <p class="col-md-12">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus odio consequuntur minima ex iure quasi. Expedita, sint quisquam magni non harum quo sit explicabo reiciendis voluptatibus iure natus earum similique quidem. Sint asperiores tempore quisquam? Nemo laborum totam, error voluptatem quae ea porro maiores commodi. Cum sint officiis voluptate voluptatibus.</p>
        
      </div>
</div>
</section>


<!-- Including footer section -->
<?php
include('assets_component/front_end_component/footer.php');
include('assets_component/front_end_component/last_link_page.php');
?>