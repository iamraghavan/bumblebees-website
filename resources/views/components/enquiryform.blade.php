
<div class="contact-section-one box-layout mt-100 mb-80 lg-mt-130 sm-mb-40">
    <div class="bg-wrapper">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6 order-lg-last ms-auto" data-aos="fade-left">
                    <div class="contact-meta-one">
                        <div class="title-style-one">
                            <h2 class="title">Let’s talk <br>about your<span>project</span></h2>
                        </div>
                        <p class="text-lg">Talk to Our Sales & Marketing Team.</p>
                        <div class="help-text">For urgent help call us at</div>
                        <a href="tel:+919942502245" class="call-button">+(91) 9942 502 245</a>
                    </div> 
                </div>
                <div class="col-lg-6 order-lg-first" data-aos="fade-right">
                    <div class="form-style-one md-mt-40">
                        <form action="/submit-form" method="POST">
                            @csrf

                            <div class="messages"></div>
                            <div class="input-group-meta form-group mb-25">
                                <label for="name">Name*</label>
                                <input type="text" id="name" placeholder="Raghavan Jeeva" name="name" required data-error="Name is required." />
                            </div>
                            <div class="input-group-meta form-group mb-25">
                                <label for="email">Email*</label>
                                <input type="email" id="email" placeholder="yourmailid@example.com" name="email" required data-error="Valid email is required." />
                            </div>
                            <div class="input-group-meta form-group mb-25">
                                <label for="contactNumber">Contact Number*</label>
                                <input type="tel" id="contactNumber" placeholder="Your Contact Number" name="contactNumber" required data-error="Contact Number is required." />
                            </div>
                            <div class="input-group-meta form-group mb-25">
                                <label for="appointmentTime">Appointment Time</label>
                                <input type="time" id="appointmentTime" name="appointmentTime" />
                            </div>
                            <div class="input-group-meta form-group mb-25">
                                <label for="appointmentDate">Appointment Date</label>
                                <input type="date" id="appointmentDate" name="appointmentDate" />
                            </div>


                             <div class="input-group-meta form-group mb-25">

                                <x-turnstile />

                            </div>

                          


                            <div class="col-12"><button type="submit" class="theme-btn-one ripple-btn w-100">Send Message</button></div>
                        </form>
                    </div> <!-- /.form-style-one -->
                </div>
            </div>
        </div>
    </div> <!-- /.bg-wrapper -->

    <div class="container mt-100 sm-mt-80">
        <div class="row">
            <div class="col-md-4" data-aos="fade-up">
                <div class="address-block-one text-center mb-40">
                    <div class="icon d-flex align-items-center justify-content-center m-auto"><img src="{{ asset('images/icon/icon_17.svg') }}" alt=""></div>
                    <h5 class="title">Our Address</h5>
                    <p>No: 2 Dhermer Street, Collector Office (Pt)  <br>Nagapattinam, Tamil Nadu - 611003</p>
                </div> 
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="address-block-one text-center mb-40">
                    <div class="icon d-flex align-items-center justify-content-center m-auto"><img src="{{ asset('images/icon/icon_18.svg') }}" alt=""></div>
                    <h5 class="title">Contact Info</h5>
                    <p>Open a chat or give us a call at <br><a href="tel:+919942502245">(+91) 9942 502 245</a> <br><a href="tel:+919344223822">(+91) 9344 223 822</a></p>
                </div> 
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="address-block-one text-center mb-40">
                    <div class="icon d-flex align-items-center justify-content-center m-auto"><img src="{{ asset('images/icon/icon_19.svg') }}" alt=""></div>
                    <h5 class="title">Live Support</h5>
                    <p>live chat service <br><a href="/" class="webaddress">www.jsraghavan.me/contact</a></p>
                </div> 
            </div>
        </div>
    </div>
</div>
<!-- Add your script section at the end of the file -->



