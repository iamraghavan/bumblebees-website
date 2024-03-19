@extends('layouts.app')
@section('content')


<div class="inside-hero-one hero-spacing">
    <div class="container">
        <h2 class="page-title font-recoleta">Get in Touch</h2>
        <p>Talk to Our Sales & Marketing Team</p>
    </div>
</div>


<div class="contact-section-four mt-120 lg-mt-100">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="address-block-one text-center mb-40">
                    <div class="icon d-flex align-items-center justify-content-center m-auto"><img
                            src="images/icon/icon_17.svg" alt=""></div>
                    <h5 class="title">Our Address</h5>
                    <p>No: 2 Dhermer Street, Collector Office (Pt)
                        <br>Nagapattinam, Tamil Nadu - 611003
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="address-block-one text-center mb-40">
                    <div class="icon d-flex align-items-center justify-content-center m-auto"><img
                            src="images/icon/icon_18.svg" alt=""></div>
                    <h5 class="title">Contact Info</h5>
                    <p>Open a chat or give us call at <br><a href="tel:+919942502245" class="call">(+91) 99425 02245</a>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="address-block-one text-center mb-40">
                    <div class="icon d-flex align-items-center justify-content-center m-auto"><img
                            src="images/icon/icon_19.svg" alt=""></div>
                    <h5 class="title">Live Support</h5>
                    <p>live chat service <br><a href="/" class="webaddress">www.bumblebees.co.in/chat/whatsapp</a></p>
                </div>
            </div>
        </div>
    </div>

@if(session('success'))
<script>
   swal({
title: "Form Submitted Successfully!",
text: "{{ session('success') }}",
icon: "success",
animation: true,
confirmButtonText: "Cool",
footer: "We will get back to you soon!"
});

</script>
@endif
    <div class="container">
        <div class="row">
            <div class="col-xl-11 m-auto">
                <div class="form-style-one">
<form action="/contact" method="POST" id="contact-form" data-toggle="validator" novalidate>
    @csrf


    <div class="messages"></div>
    <div class="row controls">
        <div class="col-sm-6">
            <div class="input-group-meta form-group mb-25">
                <label for="name">First Name*</label>
                <input type="text" placeholder="Raghavan" name="name" id="name" value="{{ old('name') }}" required
                    data-error="Name is required.">
                @error('name')
                <div class="help-block with-errors">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-sm-6">
            <div class="input-group-meta form-group mb-25">
                <label for="Lname">Last Name*</label>
                <input type="text" placeholder="Jeeva" name="Lname" id="Lname" value="{{ old('Lname') }}" required
                    data-error="Last Name is required.">
                @error('Lname')
                <div class="help-block with-errors">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-sm-6">
            <div class="input-group-meta form-group mb-25">
                <label for="phone">Phone*</label>
                <div class="intl-tel-input allow-dropdown">
                    <!-- Your international phone input here -->
                </div>
                <input id="phone" name="phone" placeholder="(+91) 924422-3822" type="tel" value="{{ old('phone') }}"
                    required data-error="Phone is required." autocomplete="off">
                @error('phone')
                <div class="help-block with-errors">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-6">
            <div class="input-group-meta form-group mb-40">
                <label for="email">Email*</label>
                <input type="email" placeholder="rshdkabir@gmail.com" name="email" id="email" value="{{ old('email') }}"
                    required data-error="Valid email is required.">
                @error('email')
                <div class="help-block with-errors">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-sm-12">
            <div class="input-group-meta form-group mb-25">
                <input type="text" placeholder="Enter your Request / Message " name="message"
                    value="{{ old('message') }}" required data-error="Message is required.">
                @error('message')
                <div class="help-block with-errors">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="theme-btn-one ripple-btn">Send Message</button>
        </div>
    </div>
</form>
                </div>
            </div>
        </div>
    </div>
    <div class="map-area-one mt-150 mb-90 lg-mt-100 lg-mb-50">
        <div class="box-layout">
            <div class="mapouter">
                <div class="gmap_canvas"><iframe class="gmap_iframe"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125412.95375547503!2d79.7500019072146!3d10.79945309398845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9e20bdc4bfed073%3A0x7fca72dab56ace1e!2sBumble%20Bees%20IT%20Solutions!5e0!3m2!1sen!2sin!4v1702625808604!5m2!1sen!2sin"
                        title="Google Map"></iframe></div>
            </div>
        </div>
    </div>
</div>

@endsection
