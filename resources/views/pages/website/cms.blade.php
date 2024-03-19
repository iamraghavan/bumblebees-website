@extends('layouts.app')
@section('content')
@php
$sections = [
    ['title' => 'Joomla Development', 'description' => 'Crafting dynamic and feature-rich websites using the powerful Joomla CMS platform.'],
    ['title' => 'Shopify Solutions', 'description' => 'Building scalable and visually stunning online stores with customized Shopify development.'],
    ['title' => 'Opencart Expertise', 'description' => 'Providing comprehensive Opencart solutions for seamless e-commerce experiences.'],
];

$logos = [
    'https://docs.joomla.org/images/2/2c/Horizontal-logo-light-background-en.png',
    'https://upload.wikimedia.org/wikipedia/commons/0/0e/Shopify_logo_2018.svg',
    'https://upload.wikimedia.org/wikipedia/commons/thumb/6/63/OpenCart_logo.svg/512px-OpenCart_logo.svg.png',
    'https://cdn.shopify.com/app-store/listing_images/5a5385cf8a756c3fc55c4fb80706f9f6/icon/CLa98_yf6PMCEAE=.png',
    'https://upload.wikimedia.org/wikipedia/commons/e/eb/Linktree-logo-2.png',
    'https://www.coywolf.news/wp-content/uploads/2020/05/og-shop-app.png',
];
@endphp


<div class="inside-hero-three bg-color">
    <img src="images/shape/shape_35.svg" alt="" class="shapes shape-one">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="page-title font-recoleta">Unlock Your Potential with <span>Bumble Bees</span> CMS Solutions
                </h2>
            </div>
            <div class="col-xxl-5 col-md-6 ms-auto">
                <!-- Replace the following with your own introductory content -->
                <p>Elevate your digital presence with Bumble Bees CMS solutions tailored for your business needs.
                    Discover the power of Joomla, Shopify, and Opencart in transforming your online experience.</p>
            </div>
        </div>
    </div>
</div>

<div class="vcamp-text-block-thirteen pt-150 mb-130 lg-pt-100 lg-mb-80">

    <div class="container">
        <div class="img-media mb-80 lg-mb-40"><img src="images/cms.webp" alt="" class="w-100"></div>
        <div class="row mb-40">
            <div class="col-lg-12">
                <!-- Replace the following with your introductory content -->
                <p class="lead">Explore the power of CMS with Bumble Bees IT Solutions, your partner in crafting dynamic
                    online experiences. Discover why businesses choose us for their CMS needs.</p>
            </div>
        </div>

        <!-- Why Choose Bumble Bees IT Solutions -->
        <div class="row mt-5">
            <div class="col-lg-6">

                <ul class="ui-list-item-one style-none">
                    <!-- Replace the following with your specific points -->
                    <li><strong>Expertise:</strong> Years of experience crafting powerful CMS solutions.</li>
                    <li><strong>Innovation:</strong> Creative solutions that make your website stand out.</li>
                    <li><strong>Client-Centric Approach:</strong> Your goals are our priority.</li>
                </ul>
            </div>
            <div class="col-lg-6">

                <ul class="ui-list-item-one style-none">
                    <!-- Replace the following with your specific CMS services -->
                    <li><strong>Bespoke Design:</strong> Tailored web designs reflecting your brand identity.</li>
                    <li><strong>Advanced Functionality:</strong> Cutting-edge features for seamless user experiences.
                    </li>
                    <li><strong>Responsive Development:</strong> Stunning websites functioning flawlessly across all
                        devices.</li>
                </ul>
            </div>
        </div>

        <!-- Additional Information -->
        <div class="row mt-5">
            <div class="col-lg-12">
                <!-- Replace the following with your closing statement -->
                <p>Choose Bumble Bees IT Solutions for CMS excellence. Ready to redefine your digital presence? Contact
                    us
                    today.</p>
            </div>
        </div>
    </div>

</div>


<div class="partner-section-two pt-180 mb-200 lg-pt-50 lg-mb-100">
    <img src="images/shape/shape_13.svg" alt="" class="shapes shape-one">
    <div class="container">
        <div class="row">
            <div class="col-xxl-7 col-xl-8 col-lg-6 col-md-8 col-sm-10 m-auto">
                <div class="title-style-one text-center">
                    <div class="upper-title">In partners</div>
                    <h2 class="fs-20">Our <span>Trusted and Authorized </span> Technology Collaborator</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-11 m-auto">
                <div class="partent-logos">
                    <div class="row g-0">
                        @foreach ($logos as $index => $logo)
                        <div class="col-md-3 col-6">
                            <div class="logo d-flex align-items-center justify-content-center">
                                <a href="/"><img src="{{ $logo }}"
                                        style="height: auto; padding: 0 1.8rem; width: 15rem;"
                                        alt="Logo {{ $index + 1 }}" class="tran3s"></a>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div> <!-- /.partent-logos -->
            </div>
        </div>
    </div>
</div>

<div class="vcamp-feature-section-seven mt-70">
    <div class="container">
        <div class="row">
            <div class="col-xxl-7 col-xl-8 col-lg-6 col-md-8 m-auto aos-init aos-animate" data-aos="fade-up">
                <div class="title-style-one text-center">
                    <h2 class="title">Powerful CMS Solutions by <span> Bumble Bees</span></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="box-layout mt-40 lg-mt-10">
        <div class="row">
            <div class="col-xxl-11 m-auto">
                <div class="row">
                    @foreach ($sections as $section)
                    <div class="col-md-4 col-sm-6 d-flex mt-45 aos-init aos-animate" data-aos="fade-up">
                        <div class="card-style-seven">
                            <h4>{{ $section['title'] }}</h4>
                            <p>{{ $section['description'] }}</p>
                        </div> <!-- /.card-style-seven -->
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>




    <img src="images/shape/shape_36.svg" alt="" class="shapes shape-one">
    <img src="images/shape/shape_37.svg" alt="" class="shapes shape-two">
</div>
@endsection
