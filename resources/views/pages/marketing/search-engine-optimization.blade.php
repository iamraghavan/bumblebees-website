@extends('layouts.app')
@section('content')
@php
$sections = [
["title" => "SEO Optimization", "description" => "Boost your online presence with our expert SEO optimization services
tailored to elevate your brand."],
["title" => "Keyword Strategy", "description" => "Crafting strategic keyword strategies to enhance visibility and reach
your target audience effectively."],
["title" => "Content Marketing Solutions", "description" => "Engage your audience with captivating content marketing
solutions designed for optimal search engine performance."],
];

$logos = [
"https://logowik.com/content/uploads/images/ahrefs-seo-tool4789.jpg",
"https://upload.wikimedia.org/wikipedia/commons/b/bb/Google-page-speed-insights-explained.png",
"https://upload.wikimedia.org/wikipedia/commons/8/89/Logo_Google_Analytics.svg",
"https://logowik.com/content/uploads/images/google-search-console7508.jpg",
"https://asia.wordcamp.org/2023/files/2022/11/logo-yoast-640x320-1.png",
"https://upload.wikimedia.org/wikipedia/commons/c/c7/Bing_logo_%282016%29.svg",
"https://prowly-uploads.s3.eu-west-1.amazonaws.com/uploads/60169/assets/601033/large-d1806779a83b60250f2690585d2a8a70.png",
];
@endphp


<div class="inside-hero-three bg-color">
    <img src="images/shape/shape_35.svg" alt="" class="shapes shape-one">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="page-title font-recoleta">Boost Your Brand with<span>Bumble Bees</span> SEO Optimization
                    Magic</h2>
            </div>
            <div class="col-xxl-5 col-md-6 ms-auto">
                <p>At Bumble Bees IT Solutions, our SEO experts specialize in optimizing your online presence. Here's
                    why we stand out in the world of SEO optimization.</p>
            </div>
        </div>
    </div>
</div>

<div class="vcamp-text-block-thirteen pt-150 mb-130 lg-pt-100 lg-mb-80">
  <div class="container">
        <div class="img-media mb-80 lg-mb-40"><img src="  " alt="" class="w-100"></div>
        <div class="row mb-40">
            <div class="col-lg-12">
                <p class="lead">Elevate your brand's online visibility with Bumble Bees IT Solutions. We go beyond ordinary
                    SEO practices; we create digital experiences that leave a lasting impression.</p>
            </div>
        </div>

        <!-- Why Choose Bumble Bees SEO Optimization -->
        <div class="row mt-5">
            <div class="col-lg-6">

                <ul class="ui-list-item-one style-none">
                    <li><strong>Strategic Expertise:</strong> Crafted SEO strategies that align with your brand goals and
                        resonate with your target audience.</li>
                    <li><strong>Keyword Optimization:</strong> Implementing strategic keyword optimization to enhance your
                        online visibility.</li>
                    <li><strong>Content Marketing:</strong> Engaging content marketing solutions for optimal search engine
                        performance.</li>
                </ul>
            </div>
            <div class="col-lg-6">

                <ul class="ui-list-item-one style-none">
                    <li><strong>Brand Visibility:</strong> Boosting your brand's visibility through carefully crafted SEO
                        strategies and content marketing.</li>
                    <li><strong>Data-Driven Decisions:</strong> Utilizing analytics for informed decisions, ensuring
                        continuous improvement and success.</li>
                    <li><strong>Responsive Engagement:</strong> Ensuring timely and meaningful interactions with your
                        audience for enhanced SEO results.</li>
                </ul>
            </div>
        </div>

        <!-- Additional Information -->
        <div class="row mt-5">
            <div class="col-lg-12">
                <p>Partner with Bumble Bees IT Solutions for SEO optimization that doesn't just meet industry standards; it
                    redefines them. Ready to boost your brand's online success? Contact us today.</p>
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
                    <h2 class="title">Let's elevate your <span>online success </span> <br> together!</h2>
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
