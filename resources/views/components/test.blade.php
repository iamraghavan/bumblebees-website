<?php
$testimonials = [
    [
        'name' => 'Mohamed Ishaq Syed',
        'company' => 'Bench Mark Builder',
        'location' => 'Chennai',
        'testimonialsContent' => 'Bumble Bees IT Solutions exceeded our expectations with their innovative solutions and prompt service. A reliable partner for our technological needs!'
    ],
    [
        'name' => 'Nivethaidha',
        'company' => 'Vaibhaav LLC',
        'location' => 'USA (Denver)',
        'testimonialsContent' => 'Impressed by the professionalism and expertise of Bumble Bees IT Solutions. They transformed our ideas into seamless digital experiences. Highly recommended!'
    ],
    [
        'name' => 'Priya Thirumalainambi',
        'company' => 'GoGreen LLC',
        'location' => 'USA (Colorado)',
        'testimonialsContent' => 'Exceptional service from Bumble Bees IT Solutions! Their team\'s dedication and technical prowess made our project a success. Thank you!'
    ],
    [
        'name' => 'Raj Kumar',
        'company' => 'Technozendesign ',
        'location' => 'Ambattur, Chennai',
        'testimonialsContent' => 'Bumble Bees IT Solutions is a reliable partner for all our digital needs. Their team is professional, responsive, and delivers high-quality work. Highly recommended!'
    ],
    [
        'name' => 'Aravind',
        'company' => 'Easun Engineereing & New India Tools ',
        'location' => 'Ambattur, Chennai',
        'testimonialsContent' => 'They are a game-changer! The social media content they created for my brand is captivating, and their software development services are next level. If you are looking for comprehensive IT solutions, this is the place to go.'
    ],
    [
        'name' => 'Sathish Kotti',
        'company' => 'Sri Thiruthani Builders and Foundation',
        'location' => 'Chennai',
        'testimonialsContent' => 'Raghavan is a visionary leader with a passion for driving positive change. His strategic insights and commitment to excellence have made a lasting impact in the tech industry.'
    ],
];
?>

<div class="feedback-section-two box-layout">
    <div class="bg-wrapper">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-7 col-md-6">
                    <div class="title-style-one text-center text-md-start">
                        <h2 class="title">What’s our <span>client</span> say about us.</h2>
                    </div>
                </div>
                <div class="col-xl-5 col-md-6 d-flex justify-content-center justify-content-md-end">
                    <ul class="slider-arrows d-flex style-none">
                        <li class="prev_b slick-arrow" style=""><i class="bi bi-chevron-left"></i></li>
                        <li class="next_b slick-arrow" style=""><i class="bi bi-chevron-right"></i></li>
                    </ul>
                </div>
            </div>
        </div> <!-- /.container -->

        <div class="feedback_slider_two">
            <?php foreach ($testimonials as $testimonial): ?>
                <div class="item">
                    <div class="testimonial-block-one">
                       
                        <blockquote>
                            <?= $testimonial['testimonialsContent'] ?>
                        </blockquote>
                        <div class="name">
                            <?= $testimonial['name'] ?> <span><?= $testimonial['location'] ?></span>
                        </div>
                    </div> <!-- /.testimonial-block-one -->
                </div>
            <?php endforeach; ?>
        </div> <!-- /.feedback_slider_two -->
    </div> <!-- /.bg-wrapper -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.feedback_slider_two').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                prevArrow: '<i class="bi bi-chevron-left"></i>',
                nextArrow: '<i class="bi bi-chevron-right"></i>',
            });
        });
    </script>
</div>
