@php
    // Disable SSL verification (not recommended for production)
    $ipResponse = Http::timeout(10)->withoutVerifying()->get('https://api64.ipify.org/?format=json');
    $ipData = $ipResponse->json();

    // Extract the IP address from the response
    $ipAddress = $ipData['ip'];

    // Make a request to the geoplugin API to get location information based on IP
    $locationResponse = Http::timeout(10)
        ->withoutVerifying()
        ->get("http://www.geoplugin.net/json.gp?ip={$ipAddress}");
    $locationData = $locationResponse->json();

    // Check if the 'geoplugin_countryName' key exists in the response
    $country = isset($locationData['geoplugin_countryName']) ? $locationData['geoplugin_countryName'] : 'Unknown';

    $countryCode = '';

    $countriesResponse = Http::withoutVerifying()->get('https://restcountries.com/v3.1/all');
    $countriesData = $countriesResponse->json();

    foreach ($countriesData as $data) {
        if ($data['name']['common'] == $country) {
            $countryCode = strtolower($data['cca2']); // Get the country code
            break;
        }
    }
@endphp


<style>
    .flag {
        width: auto;
        height: 1.2rem;
        margin-left: 5px;
    }

    .flex-align-center {
        align-items: center;
    }
</style>


<footer class="vcamp-footer-two dark-footer pt-150 lg-pt-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-2 mb-40">
                <div class="logo"><a href="/"><img src="{{ asset('/images/bbwhite.svg') }}"
                            alt="Bumble Bees IT Solutions"></a></div>
                <div class="newsletter">
                    <p class="">
                        <strong>Address :</strong> 183/2 Dhermer Street, Collector Office (Pt) <br>Nagapattinam, Tamil
                        Nadu <br> 611003
                    </p>

                </div>

            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 mb-40">
                <h5 class="title">Links</h5>
                <ul class="footer-list style-none">
                    <li><a href="/who-we-are">Our History</a></li>
                    <li><a href="/contact">Contact Our Team</a></li>
                    <li><a href="/career">Career / Internships</a></li>

                </ul>
                <h5 class="title" style="padding-top: 1.6rem;">Legal</h5>
                <ul class="footer-list style-none">
                    <li><a href="/legal/terms-and-condition">Terms &amp; Conditions</a></li>
                    <li><a href="/legal/privacy-policy">Privacy Policy</a></li>

                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 mb-40">
                <h5 class="title">Our Services</h5>
                <ul class="footer-list style-none">
                    <li><a href="/website/landing-page">Landing Page</a></li>
                    <li><a href="/website/dynamic-website">Dynamic Website</a></li>
                    <li><a href="/website/wordpress-website">WordPress Website</a></li>
                    <li><a href="/website/cms">Joomla / Shopify / Opencart</a></li>
                    <li><a href="/marketing/social-media-manager">Social Media Manager</a></li>
                    <li><a href="/marketing/social-media-marketing">Social Media Marketing</a></li>
                    <li><a href="/marketing/search-engine-optimization">Search Engine Optimization</a></li>
                    <li><a href="/production/social-media-ads-design">Social Media Ads Design</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6 mb-40">
                <h5 class="title">When Our Bee's Got Recognized</h5>
                <div class="row logos-container d-flex justify-content-center align-items-center">
                    <div class="col-6">
                        <img src="{{ asset('/images/good-firms.png') }}" alt="" srcset="">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('/images/startup-india-logo1-02-500x500.webp') }}" alt=""
                            srcset="">
                    </div>
                    <div class="col-6">
                        <img src="https://seeklogo.com/images/G/google-partner-logo-2BA563BAC5-seeklogo.com.png"
                            alt="" srcset="">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('/images/aws-partner-network.png') }}" alt="" srcset="">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="bottom-footer">
            <div class="row">
                <div class="col-lg-2 order-lg-3 mb-15">
                    <ul
                        class="list-unstyled d-flex justify-content-center justify-content-lg-start footer-nav style-none">
                        <li class="d-flex flex-align-center">
                            <span class="text-uppercase text-white">


                                @if ($countryCode)
                                    <div class="d-flex align-items-center" style="font-size: 15px !important;">
                                        ( <b>{{ Config::get('app.locale') }}</b> )
                                        <img class="flag" src="https://flagcdn.com/{{ $countryCode }}.svg"
                                            alt="{{ $country }} Flag">
                                        <b style="margin-left: 0.5rem">{{ $country }}</b>
                                    </div>
                                @endif

                            </span>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-2 order-lg-1 mb-15">
                    <ul class="d-flex justify-content-center justify-content-lg-end social-icon style-none">
                        <li><a href="https://www.facebook.com/bumblebeesindia"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com/bumblebees_india/"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com/company/itzbumblebees/"><i
                                    class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-8 order-lg-2 mb-15">
                    <p class="copyright text-center">Copyright &copy; 2020 - <span> {{ date('Y') }} | All Rights
                            Reserved
                        </span>

                        |
                        <span style="color: #EDA73E;"> Bumble Bees IT Solutions </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
