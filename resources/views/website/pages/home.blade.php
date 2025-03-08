@extends('website.partials.frontend-main')

@push('css')
<style>
    .website-home-sec-1-row
    {
        background-image: url('{{ asset('imgs/main-banner.jpg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        /*min-height: 1180px;*/
    }

    .banner-content-box-main {
        padding-top: 200px;
    }

    .banner-content-box-main .banner-para-1 {
        font-size: 17px;
        letter-spacing: 1px;
        line-height: 30px;
        text-transform: uppercase;
        color: #2997f0;
        font-family: "GalanoGrotesque";
        margin-bottom: 0px;
    }
    .banner-content-box-main h2 .underline-img
    {
        position: absolute;
        bottom: -15px;
        right: 0px;
        
    }
    .banner-content-box-main h2 span {
        font-size: 75px;
        line-height: 88px;
        color: #ffffff;
        font-weight: bold;
        font-family: "GalanoGrotesque";
        display: block;
    }
    .banner-content-box-main .banner-para-2
    {
        font-size: 19px;
        letter-spacing: 0px;
        line-height: 30px;
        color: #ffffff;
        font-family: "GalanoGrotesque";
    }
    .banner-content-box-main .banner-btn
    {
        font-size: 17px;
        letter-spacing: 1px;
        line-height: 30px;
        text-transform: uppercase;
        font-weight: 500;
        font-family: "GalanoGrotesque";
        padding: 10px 30px;
    }
    .banner-bottom-box-main{
        padding-top: 270px;
    }
    .banner-bottom-box-main .banner-bottom-box-inner
    {
        background-image: url('{{ asset('imgs/banner-box-bg.png') }}');
        background-size: cover;
        /* background-position: center; */
        background-position: -10px 0px;
        background-repeat: no-repeat;
        /* opacity: 0.820; */
        border-radius: 15px;
        /* background-image: linear-gradient(34deg, #072441 0%, #072441 1%, #080e1e 100%); */
        border: 1px solid #080e1e;
    }
    .banner-bottom-box-main .banner-bottom-box .number
    {
        font-size: 65px;
        line-height: 88px;
        color: #ffffff;
        font-weight: 600;
        font-family: "GalanoGrotesque";
        margin: 0px;
        padding: 0px 15px 0px 30px;
        position: relative;
        top: 30px;
    }
    .banner-bottom-box-main .banner-bottom-box .number-text
    {
        font-size: 18px;
        /* line-height: 88px; */
        text-transform: uppercase;
        color: #ffffff;
        font-weight: bold;
        font-family: "GalanoGrotesque";
        margin: 0px;
        padding: 30px 15px 40px 30px;
    }


    .sec-heading-main-wrap p
    {
        font-family: "GalanoGrotesque";
        font-size: 17px;
        letter-spacing: 1px;
        line-height: 30px;
        text-transform: uppercase;
        color: #2997f0;
        margin-bottom: 0px;
    }
    .sec-heading-main-wrap h2 span 
    {
        font-size: 55px;
        line-height: 65px;
        color: #ffffff;
        font-weight: bold;
        font-family: "GalanoGrotesque";
    }
    .sec-heading-main-wrap h2 span.gradient-text
    {
        position: relative;
    }

    .sec-heading-main-wrap h2 span.gradient-text img
    {
        position: absolute;
        bottom: -15px;
        right: 0px;
    }
    .website-home-sec-2-row
    {
        padding-top: 150px;
    }

    .website-home-sec-2-row
    {
        background-image: url('{{ asset('imgs/sec-2-bg.jpg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
    }
    .website-home-sec-2-row .section-floating-icon {
        position: absolute;
        max-width: 120px;
        left: 0px;
        top: 160px;
    }
    .sec-content-main-wrap
    {
        padding: 110px 0px;
    }
    .sec-content-left-col-wrap p {
        margin: 0px;
        font-size: 40px;
        line-height: 55px;
        color: #ffffff;
        font-weight: bold;
        font-family: "GalanoGrotesque";
        padding-bottom: 35px;
    }
    .sec-content-right-col-wrap p
    {
        /* max-width: 567px; */
        font-size: 19px;
        letter-spacing: 0px;
        line-height: 30px;
        color: #ffffff;
        font-family: "GalanoGrotesque";
    }
    .sec-content-right-col-wrap .sec-content-btn {
        border-radius: 28px;
        padding: 15px 50px;
        font-size: 17px;
        letter-spacing: 1px;
        font-weight: bold;
        font-family: "GalanoGrotesque";
        text-transform: uppercase;
    }
    .row.website-home-sec-3-row.m-0 {
        padding: 70px 0px;
    }

    .website-home-sec-4-row
    {
        background-image: url('{{ asset('imgs/sec-4-bg.jpg') }}');
        background-size: cover;
        background-position: right;
        background-repeat: no-repeat;
    }


    .website-home-sec-5-row.website-home-sec-5-row
    {
        background-image: url('{{ asset('imgs/sec-5-bg.jpg') }}');
        background-size: cover;
        background-position: right;
        background-repeat: no-repeat;
    }
    .website-home-sec-5-row .sec-heading-main-wrap h2
    {
        padding-right: 150px;
        position: relative;
    }

    .website-home-sec-5-row .handle-slider-btns-wrap
    {
        position: absolute;
        top: 0px;
        right: 0px;
    }
    .handle-slider-btns-wrap button
    {
        border: 1px solid #0e4889;
        width: 42px;
        height: 42px;
        display: inline-block;
        padding: 0px 0px 0px 0px;
        margin: 0px 5px;
        border-radius: 40px;
        font-size: 20px;
        text-align: center;
        background: transparent;
        color: #0e4889;
        transition: all 0.3s ease;
    }
    .handle-slider-btns-wrap button:hover
    {
        background-color: #0e4889;
        color: #ffffff;
        transition: all 0.3s ease;
    }


    .website-home-sec-5-row .contect-box-main-wrap {
        padding-top: 175px;
    }

    .website-home-sec-5-row .contect-box-form
    {
        background-image: url('{{ asset('imgs/Background-grdnt.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        border-radius: 20px;
        background-color: #092290;
        padding: 70px 50px;
    }
    .contect-box-main-row .sec-heading-main-wrap p
    {
        color: #ffffff;
        padding-bottom: 25px;
    }
    .contect-box-main-wrap .input-box-col-wrap {
        position: relative;
    }
    .contect-box-main-wrap .form-control {
        border-radius: 8px;
        filter: drop-shadow(0px 30px 43.5px rgba(41, 192, 255, 0.07));
        background-color: #020610cf;
        border: 2px solid #29c0ff;
        font-size: 18px;
        letter-spacing: 0px;
        line-height: 40px;
        color: #fff !important;
        font-weight: 300;
        font-family: "GalanoGrotesque";
        font-weight: 500;
        padding-right: 50px;
        margin-bottom: 25px;
    }

    .contect-box-main-wrap .form-control::placeholder {
        color: #8e8e8e;
        font-weight: 500;
    }

    .contect-box-main-row  .input-box-col-wrap .fa
    {
        position: absolute;
        top: 20px;
        right: 30px;
        color: #a6a6a6;

    }
    .contect-box-main-row  .input-box-col-wrap .fa-building-o
    {
        right: 20px;
    }
    .contect-box-main-row .submit-btn-wrap
    {
        position: relative;
        text-align: center;
        padding: 30px 0px 0px;
    }
    .contect-box-main-row .submit-btn-wrap .btn
    {
        border-radius: 29px;
        background-color: #ffffff;
        font-size: 20px;
        letter-spacing: 1px;
        line-height: 30px;
        text-transform: uppercase;
        color: #0d4590;
        font-weight: bold;
        padding: 5px 20px 5px 30px;
    }
    .contect-box-main-row .submit-btn-wrap .btn .fa-angle-right
    {
        font-size: 27px;
        color: #4013d1;
        background-color: #d3ccf3;
        padding: 0px 10px;
        border-radius: 25px;
        position: relative;
        top: 2px;
    }
    .contect-box-main-row  .submit-btn-img {
        position: absolute;
        max-width: 80px;
        top: 5px;
        margin: 0px 0px 0px 25px;
    }

    .website-home-sec-5-row .contect-box-main-wrap .mic-img
    {
        max-width: 160px;
        max-height: 160px;
        position: absolute;
        bottom: -45px;
        right: -100px;
    }



</style>
@endpush

@section('content')
<div class="website-home-main-wrap">

    <!--website-home-sec-1-row-open-->
    <div class="row website-home-sec-1-row m-0">
        
        <div class="col-12">
            <div class="container-lg">

                <!--banner-content-box-main-open-->
                <div class="col-md-12 banner-content-box-main">
                    
                    <!--banner-content-box-row-open-->
                    <div class="row banner-content-box-row">

                        <!--banner-content-box-col-open-->
                        <div class="col-md-6 banner-content-box-col">
                            <p class="banner-para-1">SOFLINUS SIPLIFYING YOUR DIGITAL WORLD</p>
                            <h2>
                                <span>Elevate Your</span>
                                <span class="gradient-text">
                                    Brand's Digital
                                    <img src="{{ asset('imgs/gurange.png') }}" alt="underline-img" class="img-fluid underline-img">
                                </span>
                                <span>Presence!</span>
                                
                            </h2>
                            <p class="banner-para-2">It is a long established fact that a reader will be distracted by
                                the readable content of a page.</p>
                            <a href="#" class="btn btn-primary-website btn-website-round banner-btn">Get Started</a>
                        </div>
                        <!--banner-content-box-col-close-->

                    </div>
                    <!--banner-content-box-row-close-->
                    

                </div>
                <!--banner-content-box-main-close-->

                <!--banner-bottom-box-main-open-->
                <div class="col-md-12 banner-bottom-box-main">

                    <!--banner-bottom-box-row-open-->
                    <div class="row banner-bottom-box-row">

                        <!--banner-bottom-box-col-open-->
                        <div class="col-md-3 banner-bottom-box">
                            <div class="banner-bottom-box-inner">
                                <p class="number">500 +</p>
                                <p class="number-text">Real Happy Clients</p>
                            </div>
                        </div>
                        <!--banner-bottom-box-col-close-->

                        <!--banner-bottom-box-col-open-->
                        <div class="col-md-3 banner-bottom-box">
                            <div class="banner-bottom-box-inner">
                                <p class="number">20 +</p>
                                <p class="number-text">Years Experience</p>
                            </div>
                        </div>
                        <!--banner-bottom-box-col-close-->

                        <!--banner-bottom-box-col-open-->
                        <div class="col-md-3 banner-bottom-box">
                            <div class="banner-bottom-box-inner">
                                <p class="number">100 +</p>
                                <p class="number-text">winer Awwards</p>
                            </div>
                        </div>
                        <!--banner-bottom-box-col-close-->

                        <!--banner-bottom-box-col-open-->
                        <div class="col-md-3 banner-bottom-box">
                            <div class="banner-bottom-box-inner">
                                <p class="number">999 +</p>
                                <p class="number-text">Successful projects</p>
                            </div>
                        </div>
                        <!--banner-bottom-box-col-close-->
                        
                    </div>
                    <!--banner-bottom-box-row-close-->

                </div>
                <!--banner-bottom-box-main-close-->
            </div>
        </div>
    </div>
    <!--website-home-sec-1-row-close--> 

    <!--website-home-sec-2-row-open-->
    <div class="row website-home-sec-2-row m-0">
        <div class="col-12">
            
            <!--section-floating-icon-open-->
            <div class="section-floating-icon">
                <img src="{{ asset('imgs/mega-phone.png') }}" alt="floating-icon" class="img-fluid floating-icon">
            </div>
            <!--section-floating-icon-close-->
            <div class="container-lg">
                <!--row-open-->
                <div class="row">
                    
                    <!--sec-heading-main-wrap-open-->
                    <div class="col-md-12 sec-heading-main-wrap text-center">
                        <p>Who We Are</p>
                        <h2>
                            <span>We Are</span>
                            <span class="gradient-text">
                                Innovative Digital
                                <img src="{{ asset('imgs/gurange.png') }}" alt="underline-img" class="img-fluid underline-img">
                            </span>
                            <br>
                            <span>Agency</span>
                        </h2>
                    </div>
                    <!--sec-heading-main-wrap-close-->

                    <!--sec-content-main-wrap-open-->
                    <div class="col-md-12 sec-content-main-wrap">
                        
                        <div class="row">
                            <div class="col-md-6 sec-content-left-col-wrap">
                                <p>About Soflinus Siplifying Your Digital World</p>
                                <img src="{{ asset('imgs/sec-1-img.png') }}" alt="about-img" class="img-fluid about-img">
                            </div>
                            <div class="col-md-6 sec-content-right-col-wrap">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum.
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                    If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum</p>
                                    <a href="#" class="btn btn-primary-website btn-website-round sec-content-btn">Learn More About Us</a>
                            </div>
                            
                        </div>




                    </div>
                    <!--sec-content-main-wrap-close-->
                    
                </div>
                <!--row-close-->
            </div>
        </div>
    </div>
    <!--website-home-sec-2-row-close-->

    <!--website-home-sec-3-row-open-->
    <div class="row website-home-sec-3-row m-0">
        <div class="col-12">
            <div class="container-lg">
                 <!--row-open-->
                 <div class="row">
                    
                    <!--sec-heading-main-wrap-open-->
                    <div class="col-md-12 sec-heading-main-wrap text-center">
                        <p>Our Services</p>
                        <h2>
                            <span>Growth Your</span>
                            <span class="gradient-text"> BusinesS Through</span>
                            <br>
                            <span>Digital Agency</span>
                        </h2>
                    </div>
                    <!--sec-heading-main-wrap-close-->
                    
                    <!--services-tab-section-open-->
                    <services-tab-section :base-url="'{{ asset('/') }}'"></services-tab-section>
                    <!--services-tab-section-close-->
                    
                 </div>
                 <!--row-close-->
            </div>
        </div>
    </div>
    <!--website-home-sec-3-row-close-->

    <!--website-home-sec-3-row-open-->
    <div class="row website-home-sec-4-row m-0">
        <div class="col-12">
            <div class="container-lg">
                 <!--row-open-->
                 <div class="row">
                    
                    <!--sec-heading-main-wrap-open-->
                    <div class="col-md-12 sec-heading-main-wrap text-center">
                        <p>Pricing</p>
                        <h2>
                            <span>Choose Your</span>
                            <span class="gradient-text"> Perfect Plan</span>
                        </h2>
                    </div>
                    <!--sec-heading-main-wrap-close-->
                    
                    <!--price-plan-slider-open-->
                    <price-plan-slider :base-url="'{{ asset('/') }}'"></price-plan-slider>
                    <!--price-plan-slider-close-->
                    
                 </div>
                 <!--row-close-->
            </div>
        </div>
    </div>
    <!--website-home-sec-3-row-close-->

    <!--website-home-sec-3-row-open-->
    <div class="row website-home-sec-5-row m-0">
        <div class="col-12">
            <div class="container-lg">
                 <!--row-open-->
                 <div class="row">
                    
                    <!--price-plan-slider-open-->
                    <testimonial-slider></testimonial-slider>
                    <!--price-plan-slider-close-->
                    
                    <!--contect-box-open-->
                    <div class="col-md-12 contect-box-main-wrap">
                        
                        <!--contect-box-form-open-->
                        <form action="#" method="post" class="contect-box-form">

                            <!--contect-box-main-row-open-->
                            <div class="row contect-box-main-row">
                        
                                <!--sec-heading-main-wrap-open-->
                                <div class="col-md-12 sec-heading-main-wrap text-center">
                                    <p>Get In Touch</p>
                                    <h2 class="p-0">
                                        <span>Let’s</span>
                                        <span class="gradient-text"> Do Something</span>
                                        <span> Togther</span>
                                    </h2>
                                </div>
                                <!--sec-heading-main-wrap-close-->

                                <!--input-box-col-wrap-open-->
                                <div class="col-md-6 input-box-col-wrap">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                        <i class="fa fa-user-o"></i>
                                    </div>
                                </div>
                                <!--input-box-col-wrap-close-->

                                <!--input-box-col-wrap-open-->
                                <div class="col-md-6">
                                    <div class="form-group input-box-col-wrap">
                                        <input type="email" class="form-control" id="email" name="Email Address *" placeholder="Email">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                </div>
                                <!--input-box-col-wrap-close-->

                                <!--input-box-col-wrap-open-->
                                <div class="col-md-6">
                                    <div class="form-group input-box-col-wrap">
                                        <input type="text" class="form-control" id="company" name="company" placeholder="Company Name *">
                                        <i class="fa fa-building-o"></i>
                                    </div>
                                </div>
                                <!--input-box-col-wrap-close-->

                                <!--input-box-col-wrap-open-->
                                <div class="col-md-6">
                                    <div class="form-group input-box-col-wrap">
                                        <input type="text" class="form-control" id="url" name="url" placeholder="Website URL *">
                                        <i class="fa fa-link"></i>
                                    </div>
                                </div>
                                <!--input-box-col-wrap-close-->
                                
                                <!--input-box-col-wrap-open-->
                                <div class="col-md-12">
                                    <div class="form-group input-box-col-wrap">
                                        <textarea name="message" id="message" class="form-control" placeholder="Message"></textarea>
                                        <i class="fa fa-comments"></i>
                                    </div>
                                </div>
                                <!--input-box-col-wrap-close-->


                                <div class="col-md-12 submit-btn-wrap">
                                    <button type="button" class="btn">Submit <i class="fa fa-angle-right"></i></button>
                                    <img src="{{ asset('imgs/Hand-Drown-Arrow.png') }}" alt="submit-btn-img" class="img-fluid submit-btn-img" />
                                </div>


                                <img src="{{ asset('imgs/mega-phone.png') }}" alt="submit btn" class="img-fluid mic-img">

                            </div>
                            <!--contect-box-main-row-close-->

                        </form>
                        <!--contect-box-form-close-->
                    </div>
                    <!--contect-box-close-->

                 </div>
                 <!--row-close-->
            </div>
        </div>
    </div>
    <!--website-home-sec-3-row-close-->

</div>

@endsection

@push('scripts')

@endpush