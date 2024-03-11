@extends('layouts.app')
@section('content')
    <div class="hero-banner-five mt-225 md-mt-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 ms-auto">
                    <h1 class="hero-heading h1of">Empowering Your Ideas with Us</h1>
                    <p class="hero-sub-heading text-lg">Transforming your concepts into reality, Bumble Bees IT Solutions is
                        your dedicated partner for innovative and tailored IT solutions.</p>
                </div>
            </div>
        </div>
        <div class="illustration-container">
            <img src="images/assets/ils_04.svg" alt="Bumble_Bees_Home" />
        </div>
    </div>

    <div class="vcamp-text-block-eleven mt-140 lg-mt-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="title-style-nine">
                        <div class="upper-title"> </div>
                        <h2 class="title">We solve your Problem.</h2>
                    </div>
                </div>
                <div class="col-lg-5 ms-auto">
                    <p class="meta-info-text">We team up with great founders for shared success.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="vcamp-text-block-three dark-bg mt-150 p0">
        <div class="pt-150 pb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 ms-auto order-md-last">
                        <div class="text-wrapper">
                            <h6>Over <span class="counter">30</span>+ Client</h6>
                            <p>We created over <span>38+</span> stunning &amp; quality products over last 4 year with
                                satisfaction.</p>
                            <div class="name position-relative">Raghavan Jeeva (Lead Development Executive).</div>
                        </div>
                    </div>
                    <div class="col-md-6 text-md-start text-center">
                        <div class="img-container position-relative d-inline-block sm-mt-50">
                            <img src="images/media/img_22.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-100 lg-mt-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 pe-xl-5 text-lg-end text-start">
                            <div class="counter-block">
                                <div class="main-count"><span class="counter">30</span>+</div>
                                <p>Client's</p>
                            </div>
                            <div class="counter-block">
                                <div class="main-count">
                                    <span class="counter">38</span>+ Projects
                                </div>
                                <p>98% Average Rating</p>
                            </div>
                        </div>
                        <div class="col-lg-4 ps-xxl-3">
                            <div class="text-block">
                                <h4>Who we are?</h4>
                                <p>Empowering success through IT solutions. Bumble Bees, since 2020, delivers excellence in
                                    web solutions for clients and team prosperity.</p>
                                <p></p>
                            </div>
                            <!-- /.text-block -->
                        </div>
                        <div class="col-lg-4 ps-xxl-5">
                            <div class="text-block">
                                <h4>Our Goal</h4>
                                <p>We're a startup from India helping small and medium businesses save money with smart
                                    solutions. We team up with great founders for shared success.</p>
                            </div>
                            <!-- /.text-block -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="vcamp-feature-section-three mt-200 lg-mt-120">
        <div class="container">
            <div class="row align-items-center mb-40 md-mb-20">
                <div class="col-lg-5 col-md-6 col-sm-8">
                    <div class="title-style-five">
                        <h2 class="title">Digital Design Services.</h2>
                    </div>
                </div>
                <div class="col-md-6 col-sm-4 me-auto text-sm-end text-start">
                    <a href="{{ url('/') }}" class="theme-btn-five position-relative xs-mt-30">See all Services</a>
                </div>
            </div>

            <div class="row gx-xl-5 justify-content-between">
                <!-- each loop equivalent -->
                <div class="col-md-4 col-sm-6">
                    <div class="card-style-three mt-50">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <img src="{{ asset('/images/icon/icon_25.svg') }}" alt="" class="tran3s" />
                        </div>
                        <h4 class="title">Design</h4>
                        <p>
                            Crafting innovative and visually stunning designs that elevate user experiences. From
                            conceptualization to the digital realm, our designs leave a lasting impression.
                        </p>
                    </div>
                    <!-- /.card-style-three -->
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="card-style-three mt-50">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <img src="{{ asset('/images/icon/icon_24.svg') }}" alt="" class="tran3s" />
                        </div>
                        <h4 class="title">Development</h4>
                        <p>
                            Building the foundation for seamless digital experiences. Our development process ensures
                            fluidity in user interactions and efficient navigation.
                        </p>
                    </div>
                    <!-- /.card-style-three -->
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="card-style-three mt-50">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <img src="{{ asset('/images/icon/icon_26.svg') }}" alt="" class="tran3s" />
                        </div>
                        <h4 class="title">Marketing</h4>
                        <p>
                            Empowering businesses with comprehensive digital marketing solutions. Take command of your
                            digital presence with our strategic and effective marketing approaches.
                        </p>
                    </div>
                    <!-- /.card-style-three -->
                </div>
            </div>
        </div>
    </div>



    <div class="vcamp-feature-section-nine pt-170 lg-pt-120" id="about">
        <div class="container">
            <div class="title-style-seven text-center pb-60 lg-pb-20">
                <h2 class="title">
                    We turn your ideas into successful real businesses
                </h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6 aos-init" data-aos="fade-up">
                    <div class="card-style-nine mt-40">
                        <div class="img-holder d-flex align-items-center justify-content-center">
                            <img src="{{ asset('/images/assets/ils_08.png') }}" alt="" />
                        </div>
                        <h3>Build like a co-founder</h3>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 aos-init" data-aos="fade-up">
                    <div class="card-style-nine mt-40">
                        <div class="img-holder d-flex align-items-center justify-content-center">
                            <img src="{{ asset('/images/assets/ils_09.png') }}" alt="" />
                        </div>
                        <h3>Investing as a Partner</h3>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 aos-init" data-aos="fade-up">
                    <div class="card-style-nine mt-40">
                        <div class="img-holder d-flex align-items-center justify-content-center">
                            <img src="{{ asset('/images/assets/ils_10.png') }}" alt="" />
                        </div>
                        <h3>Work for our company</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="counter-section-one mt-170 lg-mt-120">
        <div class="inner-container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-block-one text-center mb-45">
                        <div class="main-count font-recoleta">
                            <span class="counter">40</span>+
                        </div>
                        <p class="theme-mb-0">Project done successfully</p>
                    </div>
                    <!-- /.counter-block-one -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-block-one text-center mb-45">
                        <div class="main-count font-recoleta">
                            <span class="counter">35</span>+
                        </div>
                        <p class="theme-mb-0">Happy clients</p>
                    </div>
                    <!-- /.counter-block-one -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-block-one text-center mb-45">
                        <div class="main-count font-recoleta">
                            <span class="counter">10</span>+
                        </div>
                        <p class="theme-mb-0">Teams</p>
                    </div>
                    <!-- /.counter-block-one -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-block-one text-center mb-45">
                        <div class="main-count font-recoleta">
                            <span class="counter">24</span>/7
                        </div>
                        <p class="theme-mb-0">Customer Support</p>
                    </div>
                    <!-- /.counter-block-one -->
                </div>
            </div>
        </div>
    </div>

    @include('components.test')
    @include('components.enquiryform')
    @include('components.cta')
@endsection
