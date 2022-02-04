@extends('Layouts.app')

@section('main-content')

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <!-- <h3 class="text-white mb-3 d-none d-sm-block">Best Pet Services</h3>
                            <h1 class="display-3 text-white mb-3">Keep Your Pet Happy</h1>
                            <h5 class="text-white mb-3 d-none d-sm-block">Duo nonumy et dolor tempor no et. Diam sit
                                diam sit diam erat</h5>
                            <a href="" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Book Now</a>
                            <a href="" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Learn More</a> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <!-- <h3 class="text-white mb-3 d-none d-sm-block">Best Pet Services</h3>
                            <h1 class="display-3 text-white mb-3">Pet Spa & Grooming</h1>
                            <h5 class="text-white mb-3 d-none d-sm-block">Duo nonumy et dolor tempor no et. Diam sit
                                diam sit diam erat</h5>
                            <a href="" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Book Now</a>
                            <a href="" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Learn More</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Best Products Start -->
    <div class="container mt-5 pt-5 pb-3">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-secondary mb-3">Best Products</h4>
            <h1 class="display-4 m-0">Check Our <span class="text-primary">Products</span></h1>
        </div>
        <div class="owl-carousel testimonial-carousel">

            <div class="col-md-8">
                <div class="team card position-relative overflow-hidden border-0 mb-4">
                    <img class="card-img-top" src="img/product-02.jpg" alt="">
                    <div class="card-body text-center p-0">
                        <div class="team-text d-flex flex-column justify-content-center bg-light">
                            <h5>Product name</h5>
                            <!-- <i>Founder & CEO</i> -->
                        </div>
                        <div class="team-social d-flex align-items-center justify-content-center bg-dark">
                            <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                                style="width: 36px; height: 36px;" href="#"></a>
                            <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                                style="width: 36px; height: 36px;" href="#"></a>
                            <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                                style="width: 36px; height: 36px;" href="#"></a>
                            <a class="btn btn-outline-primary rounded-circle text-center px-0"
                                style="width: 36px; height: 36px;" href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="team card position-relative overflow-hidden border-0 mb-4">
                    <img class="card-img-top" src="img/product-02.jpg" alt="">
                    <div class="card-body text-center p-0">
                        <div class="team-text d-flex flex-column justify-content-center bg-light">
                            <h5>Product name</h5>
                            <!-- <i>Chef Executive</i> -->
                        </div>
                        <div class="team-social d-flex align-items-center justify-content-center bg-dark">
                            <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                                style="width: 36px; height: 36px;" href="#"></a>
                            <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                                style="width: 36px; height: 36px;" href="#"></a>
                            <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                                style="width: 36px; height: 36px;" href="#"></a>
                            <a class="btn btn-outline-primary rounded-circle text-center px-0"
                                style="width: 36px; height: 36px;" href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="team card position-relative overflow-hidden border-0 mb-4">
                    <img class="card-img-top" src="img/product-02.jpg" alt="">
                    <div class="card-body text-center p-0">
                        <div class="team-text d-flex flex-column justify-content-center bg-light">
                            <h5>Product name</h5>
                            <!-- <i>Doctor</i> -->
                        </div>
                        <div class="team-social d-flex align-items-center justify-content-center bg-dark">
                            <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                                style="width: 36px; height: 36px;" href="#"></a>
                            <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                                style="width: 36px; height: 36px;" href="#"></a>
                            <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                                style="width: 36px; height: 36px;" href="#"></a>
                            <a class="btn btn-outline-primary rounded-circle text-center px-0"
                                style="width: 36px; height: 36px;" href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="team card position-relative overflow-hidden border-0 mb-4">
                    <img class="card-img-top" src="img/product-02.jpg" alt="">
                    <div class="card-body text-center p-0">
                        <div class="team-text d-flex flex-column justify-content-center bg-light">
                            <h5>Product name</h5>
                            <!-- <i>Trainer</i> -->
                        </div>
                        <div class="team-social d-flex align-items-center justify-content-center bg-dark">
                            <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                                style="width: 36px; height: 36px;" href="#"></a>
                            <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                                style="width: 36px; height: 36px;" href="#"></a>
                            <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                                style="width: 36px; height: 36px;" href="#"></a>
                            <a class="btn btn-outline-primary rounded-circle text-center px-0"
                                style="width: 36px; height: 36px;" href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="team card position-relative overflow-hidden border-0 mb-4">
                    <img class="card-img-top" src="img/product-02.jpg" alt="">
                    <div class="card-body text-center p-0">
                        <div class="team-text d-flex flex-column justify-content-center bg-light">
                            <h5>Product name</h5>
                            <!-- <i>Trainer</i> -->
                        </div>
                        <div class="team-social d-flex align-items-center justify-content-center bg-dark">
                            <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                                style="width: 36px; height: 36px;" href="#"></a>
                            <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                                style="width: 36px; height: 36px;" href="#"></a>
                            <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                                style="width: 36px; height: 36px;" href="#"></a>
                            <a class="btn btn-outline-primary rounded-circle text-center px-0"
                                style="width: 36px; height: 36px;" href="#"></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Best Products End -->

    <!-- Partenaire Maps Start -->
    <div class="container pt-5">

        <div class="d-flex flex-column text-center mb-5">
           
            <h1 class="display-4 m-0">Afri <span class="text-primary">Med</span> Partenaire</h1>
        </div>
        <div class="distribution-map">
            <img src="img/map.png" alt="" />

            <button class="map-point" style="top:15%;left:35%">
                <div class="content">
                    <div class="centered-y">
                        <h2>A Place</h2>
                        <p>You can put plenty of details in here. In the original, I listed contact information and
                            linked phone numbers and email addresses.</p>
                    </div>
                </div>
            </button>
            <button class="map-point" style="top:35%;left:50%">
                <div class="content">
                    <div class="centered-y">
                        <h2>Another Place</h2>
                        <p>Lorem ipsum something something</p>
                    </div>
                </div>
            </button>
            <button class="map-point" style="top:76%;left:82.5%">
                <div class="content">
                    <div class="centered-y">
                        <h2>Marauder Town</h2>
                        <p>I solemnly swear that I am up to no good</p>
                    </div>
                </div>
            </button>
            <button class="map-point" style="top:45%;left:16%">
                <div class="content">
                    <div class="centered-y">
                        <h2>Logan's Mum</h2>
                        <p>I’m a marshmallow</p>
                    </div>
                </div>
            </button>
            <button class="map-point" style="top:60%;left:53%">
                <div class="content">
                    <div class="centered-y">
                        <h2>Toto</h2>
                        <p>I bless the rains</p>
                    </div>
                </div>
            </button>
            <button class="map-point" style="top:25%;left:70%">
                <div class="content">
                    <div class="centered-y">
                        <h2>With Love</h2>
                        <p>— 007</p>
                    </div>
                </div>
            </button>
        </div>
    </div>
    <!-- Partenaire Maps End -->

  


    <!-- Blog Start -->
    <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5">

            <h1 class="display-4 m-0"><span class="text-primary">AfriMed</span> News</h1>
        </div>
        <div class="row pb-3">
            <div class="col-lg-4 mb-4">
                <div class="card border-0 mb-2">
                    <img class="card-img-top" src="img/blog_1.jpg" alt="">
                    <div class="card-body bg-light p-4">
                        <h4 class="card-title text-truncate">Diam amet eos at no eos</h4>

                        <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos, rebum
                            sit vero stet justo</p>
                        <a class="font-weight-bold" href="">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0 mb-2">
                    <img class="card-img-top" src="img/blog_3.jpg" alt="">
                    <div class="card-body bg-light p-4">
                        <h4 class="card-title text-truncate">Diam amet eos at no eos</h4>

                        <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos, rebum
                            sit vero stet justo</p>
                        <a class="font-weight-bold" href="">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0 mb-2">
                    <img class="card-img-top" src="img/blog_1.jpg" alt="">
                    <div class="card-body bg-light p-4">
                        <h4 class="card-title text-truncate">Diam amet eos at no eos</h4>

                        <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos, rebum
                            sit vero stet justo</p>
                        <a class="font-weight-bold" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!-- Counter Start -->
    <div class="container pt-5">

        <div class="d-flex flex-column text-center mb-5">

            <h1 class="display-4 m-0"><span class="text-primary">AfriMed</span> Chiffres</h1>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="counter">
                    <div class="counter-icon"><i class="fa fa-globe"></i></div>
                    <h3>Expérience</h3>
                    <div class="value" akhi="26">0</div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="counter green">
                    <div class="counter-icon"><i class="fa fa-rocket"></i></div>
                    <h3>Produits</h3>
                    <div class="value" akhi="80">0</div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="counter green">
                    <div class="counter-icon"><i class="fa fa-rocket"></i></div>
                    <h3>Employers</h3>
                    <div class="value" akhi="230">0</div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="counter">
                    <div class="counter-icon"><i class="fa fa-globe"></i></div>
                    <h3>Partenaires</h3>
                    <div class="value" akhi="953">0</div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="counter green">
                    <div class="counter-icon"><i class="fa fa-rocket"></i></div>
                    <h3>Pays</h3>
                    <div class="value" akhi="15">0</div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="counter green">
                    <div class="counter-icon"><i class="fa fa-rocket"></i></div>
                    <h3>Espèces</h3>
                    <div class="value" akhi="10">0</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter End -->
    @endsection
