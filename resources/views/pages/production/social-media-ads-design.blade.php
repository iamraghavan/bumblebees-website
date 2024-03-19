@extends('layouts.app')
@section('content')
@php
$sections = [
['title' => "Eye-Catching Poster Ads", 'description' => "Crafting visually stunning poster ads to captivate your
audience and elevate your brand's online presence."],
['title' => "Creative Design Solutions", 'description' => "Empowering your brand with innovative and impactful poster
designs that resonate with your target audience."],
['title' => "Audience Engagement", 'description' => "Ensuring your poster ads stand out and engage your audience
effectively for maximum impact."]
];

$logos = [
"https://pngimg.com/uploads/photoshop/photoshop_PNG64.png",
"https://vivim.net/blog/wp-content/uploads/2019/03/Adobe-Illustrator-logo-300x120.png",
"/images/ComapanyLogo/Adobe-indesign-logo.png",
"https://freelogopng.com/images/all_img/1682566066filmora-logo-png.png",
"https://freelogopng.com/images/all_img/1656734858canva-png-logo.png",
"https://www.pngall.com/wp-content/uploads/13/Figma-Logo-PNG-Photos.png",
"https://upload.wikimedia.org/wikipedia/commons/f/f1/CorelDraw_logo.svg",
"https://upload.wikimedia.org/wikipedia/commons/9/90/DaVinci_Resolve_17_logo.svg",

];
@endphp


<div class="inside-hero-three bg-color">
    <img src="images/shape/shape_35.svg" alt="" class="shapes shape-one">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="page-title font-recoleta">Elevate Your Brand with<span>Bumble Bees</span> Poster Ads Design
                </h2>
            </div>
            <div class="col-xxl-5 col-md-6 ms-auto">
                <p>At Bumble Bees IT Solutions, our creative team specializes in crafting eye-catching poster ads to
                    enhance your brand's visibility. Here's why we stand out in poster design.</p>
            </div>
        </div>
    </div>
</div>

<div class="vcamp-text-block-thirteen pt-150 mb-130 lg-pt-100 lg-mb-80">
   <div class="container">
        <div class="img-media mb-80 lg-mb-40"><img src="  " alt="" class="w-100"></div>
        <div class="row mb-40">
            <div class="col-lg-12">
                <p class="lead">Elevate your brand with Bumble Bees IT Solutions, where eye-catching poster ads meet
                    creative design solutions. We go beyond ordinary poster designs; we create visual experiences that leave
                    a lasting impression.</p>
            </div>
        </div>

        <!-- Why Choose Bumble Bees Poster Ads Design -->
        <div class="row mt-5">
            <div class="col-lg-6">

                <ul class="ui-list-item-one style-none">
                    <li><strong>Visually Stunning:</strong> Crafted poster ads that captivate your audience and elevate your
                        brand's online presence.</li>
                    <li><strong>Creative Design:</strong> Innovative and impactful poster designs that resonate with your
                        target audience.</li>
                    <li><strong>Audience Engagement:</strong> Ensuring your poster ads stand out and engage your audience
                        effectively for maximum impact.</li>
                </ul>
            </div>
            <div class="col-lg-6">

                <ul class="ui-list-item-one style-none">
                    <li><strong>Brand Empowerment:</strong> Empowering your brand with creative and visually appealing
                        poster ads that leave a lasting impression.</li>
                    <li><strong>Data-Driven Design:</strong> Utilizing analytics for informed design decisions, ensuring
                        continuous improvement and success.</li>
                    <li><strong>Effective Communication:</strong> Ensuring your poster ads communicate the intended message
                        clearly and effectively.</li>
                </ul>
            </div>
        </div>

        <!-- Additional Information -->
        <div class="row mt-5">
            <div class="col-lg-12">
                <p>Partner with Bumble Bees IT Solutions for poster ads design that redefines industry standards. Ready to
                    elevate your brand's visual impact? Contact us today.</p>
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
                    <h2 class="title">Let's elevate your <span>visual impact together!</span></h2>
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
