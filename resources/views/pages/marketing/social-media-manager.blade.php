@extends('layouts.app')
@section('content')
@php
$sections = [
        ['title' => 'Strategic Social Media Management', 'description' => 'Crafting tailored social media strategies to elevate your brand\'s online presence.'],
        ['title' => 'Engaging Content Creation', 'description' => 'Empowering your social channels with captivating content that resonates with your audience.'],
        ['title' => 'Audience Growth and Interaction', 'description' => 'Ensuring your social media platforms thrive with a growing and engaged audience.']
];

$logos = [
        '/images/ComapanyLogo/Hootsuite_logo.png',
        '/images/ComapanyLogo/HubSpot-Logo.png',
        '/images/ComapanyLogo/Later_Logo-1-300x102.png',
        '/images/ComapanyLogo/Sprinklr_Logo.png',
        '/images/ComapanyLogo/sproutsocial.png',
        '/images/ComapanyLogo/zoho_social.png'
];
@endphp


<div class="inside-hero-three bg-color">
    <img src="images/shape/shape_35.svg" alt="" class="shapes shape-one">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="page-title font-recoleta">Boost Your Brand with<span>Bumble Bees</span> Social Media Magic
                </h2>
            </div>
            <div class="col-xxl-5 col-md-6 ms-auto">
                <p>At Bumble Bees IT Solutions, our Social Media Managers specialize in creating buzzworthy online
                    experiences. Here's why we stand out.</p>
            </div>
        </div>
    </div>
</div>

<div class="vcamp-text-block-thirteen pt-150 mb-130 lg-pt-100 lg-mb-80">
    <div class="container">
        <div class="img-media mb-80 lg-mb-40"><img src="  " alt="" class="w-100"></div>
        <div class="row mb-40">
            <div class="col-lg-12">
                <p class="lead">Elevate your brand's social media presence with Bumble Bees IT Solutions, where
                    strategic
                    management meets engaging content creation. We go beyond ordinary social media practices; we create
                    digital experiences that leave a lasting impression.</p>
            </div>
        </div>

        <!-- Why Choose Bumble Bees Social Media Management -->
        <div class="row mt-5">
            <div class="col-lg-6">

                <ul class="ui-list-item-one style-none">
                    <li><strong>Strategic Expertise:</strong> Crafted social media strategies that align with your brand
                        goals and resonate with your audience.</li>
                    <li><strong>Creative Content:</strong> Engaging and captivating content creation that sparks
                        conversations and boosts brand recognition.</li>
                    <li><strong>Community Growth:</strong> Focused efforts on growing and nurturing your online
                        community
                        for sustained brand success.</li>
                </ul>
            </div>
            <div class="col-lg-6">

                <ul class="ui-list-item-one style-none">
                    <li><strong>Brand Visibility:</strong> Boosting your brand's visibility through carefully curated
                        social
                        media campaigns and interactions.</li>
                    <li><strong>Data-Driven Decisions:</strong> Utilizing analytics for informed decisions, ensuring
                        continuous improvement and success.</li>
                    <li><strong>Responsive Engagement:</strong> Ensuring timely and meaningful interactions with your
                        audience across all social channels.</li>
                </ul>
            </div>
        </div>

        <!-- Additional Information -->
        <div class="row mt-5">
            <div class="col-lg-12">
                <p>Partner with Bumble Bees IT Solutions for social media management that doesn't just meet industry
                    standards; it redefines them. Ready to boost your brand's social success? Contact us today.</p>
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
                                <a href="/"><img src="{{url($logo)}}"
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
                    <h2 class="title">Let's elevate your <span> social success together! </span></h2>
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
