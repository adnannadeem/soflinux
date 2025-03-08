@extends('website.partials.frontend-main')

@push('css')
<style>
    .website-home-sec-1-row
    {
        background-image: url(https://kit.nirmanavisual.com/digicy/wp-content/uploads/sites/31/2023/08/Bg-1.png);
        background-position: bottom center;
        background-repeat: no-repeat;
        background-size: contain;

        /* extra*/
        margin: 0px 0px 0px 0px;
        min-height: 700px;
        padding-top: 110px;
    }

    .box-mid-heading{
        text-align: center;
    }
    .box-mid-heading .lg-heading
    {
        text-transform: uppercase;
        text-align: center;
        font-size: 64px;
        font-weight: 800;
        color: #fff;
        font-family: 'Kanit',Sans-serif;
        line-height: 64px;
    }
    .box-mid-heading .btn-primary-website
    {
        font-size: 16px;
        font-weight: 600;
        line-height: 24px;
        fill:#fff;
        color:#fff;
        background-color: #7000ff;
        box-shadow: 0px 5px 25px 0px #7000FF;
        padding: 012px 024px 12px 024px;
        margin-top: 30px;
        transition: all 0.3s ease;
        position: relative;
        bottom: 0px;

    }

    .box-mid-heading .btn-primary-website:hover, .box-mid-heading .btn-primary-website:focus, .box-mid-heading .btn-primary-website:active
    {
        background-color: #fff;
        color: #7000ff;
        bottom: 20px;
        
    }
    .box-mid
    {
        margin: 0px 0px 055px 0px;
        padding: 32px 32px 32px 32px;
        background-color: transparent;
        background-image: linear-gradient(220deg, #505663 12%, #5B6DF2 40%);
        border-radius: 24px 24px 24px 24px;
    }
    .box-mid-warp {
        padding-top: 140px;
    }
    .box-mid-warp-1 {
        padding-left: 10%;
    }
    .box-mid-warp-2 {
        padding-right: 10%;
    }
    .box-mid p
    {
        color: #fff;
        font-family: 'Kanit', Sans-serif;
        font-size: 40px;
        font-weight:600;
        line-height: 40px;
        text-align: center;
        margin-bottom: 0px;
    }    
    .box-mid .box-mid-p
    {
        font-size: 16px;
        font-weight:500;
        text-transform: uppercase;
        line-height: 20px;
    }
    /* .box-mid-warp-sec-2
    {
        padding-top: 100px;
    } */
    .box-mid-warp-sec-2-1
    {
        padding-left: 10%;
        padding-right: 4%;
    }
    .box-mid-warp-sec-2-2
    {
        padding-left: 4%;
        padding-right: 10%;
    }
    .box-mid-inner-sec-2
    {
        margin: 0px 0px 0px 0px;
        padding: 32px 32px 32px 32px;
        background-color: transparent;
        background-image: linear-gradient(180deg, #288FFF 0%, #4792FF 100%);
        border-style: solid;
        border-width: 1px 1px 1px 1px;
        border-color: #63A2FF;
        border-radius: 24px 24px 24px 24px;
        box-shadow: 0px 32px 100px 0px #2126A0;
        text-align: center;
        
    }
    .box-mid-inner-sec-2 .num-box
    {
        color: #fff;
        font-family: 'Kanit', Sans-serif;
        font-size: 40px;
        font-weight:600;
        line-height: 40px;
        text-align: center;
        margin-bottom: 0px;
    }
    .box-mid-inner-sec-2 .text-box
    {
        font-size: 16px;
        font-weight:500;
        text-transform: uppercase;
        line-height: 20px;
        color: #fff;
    }
    .box-mid-warp-sec-2 .text-box-2
    {
        font-family: Inter, Sans-serif;
        font-size: 16px;
        font-weight: 400;
        line-height: 20px;
        color: #fff;
        padding-top: 20px;
    }
    .website-home-sec-2-row
    {
        background-image: url(https://kit.nirmanavisual.com/digicy/wp-content/uploads/sites/31/2023/08/Bg-2.png);
        background-position: top center;
        background-repeat: no-repeat;
        background-size: cover;
        margin: 0px;
        padding-top: 250px;
    }
    .website-home-sec-2-row .lg-heading
    {
        color: #fff;
        font-family: Kanit, Sans-serif;
        font-size: 40px;
        font-weight: 800;
        text-transform: uppercase;
        line-height: 44px;
        padding-right: 8%;
    }
    .website-home-sec-2-row .btn
    {
        font-family: Inter, Sans-serif;
        font-size:14px;
        font-weight: 600;
        line-height:24px;
        border-radius: 9999px 9999px 9999px 9999px;
        padding: 8px 16px 8px 16px;
        margin-top: 24px;
    }

    .website-home-sec-2-row .heading-secondary
    {
        color: #fff;
        font-size: 16px;
        font-weight: 700;
        text-transform: capitalize;
        line-height: 20px;
    }

    .website-home-sec-2-row .text-box-2
    {
        color: #fff;
        font-size: 16px;
        font-weight: 400;
        line-height: 20px;
        font-family: Inter, Sans-serif;
        padding-right: 15%;
    }

    .website-home-sec-2-row .img-fluid {
        padding-top: 60px;
    }

    .website-home-sec-3-row
    {
        margin: 0px; 
        padding-top: 100px;
    }
    .website-home-sec-3-row .sec-main-heading
    {
        color: #fff;
        font-family: Kanit, Sans-serif;
        font-size: 40px;
        font-weight: 800;
        text-transform: uppercase;
        line-height: 44px;
        text-align: center;
        max-width: 660px;
        margin: 0 auto 65px;
    }
    .website-home-sec-3-row .website-home-sec-3-img
    {
        border-radius: 32px 32px 32px 32px;
        width: 85%;
    }

    .website-home-sec-3-row .sec-3-right-box-wrap {
        padding: 15px;
    }
    .website-home-sec-3-row .sec-3-right-box-wrap-inner {
        border: 1px solid;
        text-align: center;
        padding: 42px 0px 35px;
        border-radius: 24px;
        min-height: 240px;
    }
    .website-home-sec-3-row .sec-3-right-box-wrap-inner .iocn-wrap img {
        border-radius: 50%;
        position: relative;
        transition: all 0.3s ease;
        cursor: pointer;
        bottom: 0px;

    }

    .website-home-sec-3-row .sec-3-right-box-wrap-inner .iocn-wrap img:hover {
        bottom: 10px;
        border-radius: 0%;
    }
    .website-home-sec-3-row .sec-3-right-box-wrap-inner .text-wrap h3 {
        color: #fff;
        font-family: Inter, Sans-serif;
        font-size: 20px;
        line-height: 28px;
        padding: 15px 20px 0px;

    }
    .website-home-sec-3-row .sec-3-right-box-wrap-inner-1 {
        background-color: #26114B;
        border-color: #6528d2;
    }
    .website-home-sec-3-row .sec-3-right-box-wrap-inner-2 {
        background-color: #15213d;
        border-color: #226799;
    }
    .website-home-sec-3-row .sec-3-right-box-wrap-inner-3 {
        background-color: #2e1922;
        border-color: #86472c;
    }
    .website-home-sec-3-row .sec-3-right-box-wrap-inner-4 {
        background-color: #141437;
        border-color: #1d3280;
    }
    .website-home-sec-4-row
    {
        padding: 160px 0px 0px;
    }
    .website-home-sec-4-row .sec-main-heading
    {
        color: #fff;
        font-family: Kanit, Sans-serif;
        font-size: 40px;
        font-weight: 800;
        text-transform: uppercase;
        line-height: 44px;
        padding-bottom: 50px;
    }
    .website-home-sec-4-row .list-sec-wrap
    {
        padding-right: 65px;
    }
    .website-home-sec-4-row .list-sec-wrap-inner
    {
        border-right: 1px solid #fff;
    }
    .website-home-sec-4-row .list-sec-wrap-inner ul
    {
        list-style: none;
        margin: 0px;
        padding: 0px;
    }
    .website-home-sec-4-row .list-sec-wrap-inner .list-sec-li
    {
        padding: 23px 68px;
        color: #fff;
        font-family: Inter, Sans-serif;
        font-size: 16px;
        font-weight: 700;
        text-transform: capitalize;
        line-height: 25px;
        margin-bottom: 25px;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .website-home-sec-4-row .list-sec-wrap-inner .list-sec-li:hover
    {
        background-color:#b880ff;
        border-style: solid;
        border-width: 0px 02px 0px 0px;
        border-radius: 012px 0px 0px 012px;
    }
    .website-home-sec-4-row .list-sec-wrap-inner .list-sec-li.active
    {
        background-color:#311073;
        border-style: solid;
        border-width: 0px 02px 0px 0px;
        border-color: #7000ff;
        border-radius: 012px 0px 0px 012px;
    }
    .website-home-sec-5-row {
        padding-top: 70px;
    }
    .web-home-sec-5-box-wrap {
        padding: 25px;
    }
    .web-home-sec-5-box-wrap .web-home-sec-5-box-wrap-inner {
        background-color: #26174375;
        border-radius: 25px;
        border: 1px solid #7000FF;
        padding: 30px;
    }
    .web-home-sec-5-box-wrap .web-home-sec-5-box-wrap-inner .icon-box .fas {
        background-color: #7000FF;
        border-radius: 50%;
        padding: 15px;
        fill: #fff;
        color: #fff;
        font-size: 24px;
    }

    .web-home-sec-5-box-wrap-inner h3 {
        color: #fff;
        font-family: Inter, Sans-serif;
        font-size: 18px;
        font-weight: 700;
        line-height: 20px;
        padding-top: 20px;
        padding-bottom: 10px;
        padding-bottom: 20px;
    }
    .web-home-sec-5-box-wrap-inner p {
        color: #fff;
        font-family: Inter, Sans-serif;
        font-size: 16px;
        font-weight: 400;
    }
    .website-home-sec-6-row .sec-main-heading
    {
        font-family: 'Kanit',Sans-serif;
        font-size: 40px;
        font-weight: 800;
        text-transform: uppercase;
        line-height: 44px;
        color: #fff;
    }
    .website-home-sec-6-row .sec-6-text
    {
        color: #fff;
        font-family: Inter, Sans-serif;
        font-size: 16px;
        font-weight: 400;
        line-height: 20px;
    }
    .website-home-sec-6-row {
        height: 870px;
        overflow: hidden;
    }

    .price-plan-slider-main-wrap {
        padding-top: 90px;
    }
    .sec-6-heading-wrap
    {
        padding-bottom: 50px;
    }

    .website-home-sec-6-row .price-box-wrap
    {
        padding: 65px 40px 40px 40px;
    }

    .website-home-sec-6-row .price-box-wrap-1
    {
        padding: 40px 40px 40px 40px;
    }

    .price-box-wrap .price-box-wrap-inner
    {
        border-radius: 25px;
        padding: 25px;
    }

    .price-box-wrap-1 .price-box-wrap-inner
    {
        background-color: transparent;
        background-image: linear-gradient(140deg, #28e5ff 0%, #d185ff 100%);
    }

    .price-box-wrap-2 .price-box-wrap-inner
    {
        background-color: #311073;
    }

    .price-box-wrap-3 .price-box-wrap-inner
    {
        background-color: #261743;
    }

    .website-home-sec-6-row .title-box {
        padding-top: 20px;
        padding-bottom: 35px;
    }
    .website-home-sec-6-row .title-box h2 {
        color: #fff;
        font-family: Inter, Sans-serif;
        font-size: 26px;
        font-weight: 600;
        line-height: 32px;
    }
    .website-home-sec-6-row .price-box-wrap-1 .title-box h2
    {

        color: #110a1f;
    }

    .website-home-sec-6-row .title-box .tag {
        color: #110a1f;
        font-family: Inter, Sans-serif;
        font-size: 15px;
        font-weight: 600;
        line-height: 20px;
        text-align: right;
    }
    .website-home-sec-6-row .title-box .tag .tag-inner {
        padding: 05px 015px;
        background-color: #c9f3ff;
        border-radius: 999px;
    }
    .website-home-sec-6-row .price-box
    {
        text-align: center;
        color: #fff;
        font-family: Inter, Sans-serif;
    }
    .website-home-sec-6-row .price-box-wrap-1 .price-box
    {
        color: #110a1f;
    }

    .website-home-sec-6-row .price-box .price
    {
        font-size: 48px;
        font-weight: 700;
        line-height: 40px;
    }
    .website-home-sec-6-row .price-box .price
    {
        font-size: 48px;
        font-weight: 700;
        line-height: 40px;
    }

    .website-home-sec-6-row .price-box .duration
    {
        font-size: 32px;
        font-weight: 400;
        line-height: 40px;
        position: relative;
        bottom: 5px;
    }

    .website-home-sec-6-row .price-btn-warp
    {
       padding: 35px 0px;
       text-align: center;
    }

    .website-home-sec-6-row .price-box-wrap .price-btn-warp .price-btn
    {
        fill:#fff;
        color: #fff;
        background-color: #7000ff;
        padding: 012px 100px 012px 0100px;
        border-radius: 9999px;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .website-home-sec-6-row .price-box-wrap .price-btn-warp .price-btn:hover
    {
        background-color: #fff;
        color: #7000ff;
    }

    .website-home-sec-6-row .price-box-wrap-1 .price-btn-warp .price-btn
    {
        fill:#fff;
        color: #fff;
        background-color: #110a1f;
        padding: 012px 100px 012px 0100px;
        border-radius: 9999px;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    .website-home-sec-6-row .price-box-wrap-1 .price-btn-warp .price-btn:hover
    {
        background-color: #fff;
        color: #110a1f;
        
    }
    .website-home-sec-6-row .price-feature-box
    {
        padding: 15px 0px;
        color: #fff;
    }

    .website-home-sec-6-row .price-box-wrap-1 .price-feature-box h6
    {
        color: #110a1f;
    }

    .website-home-sec-6-row ul
    {
        list-style: none;
        margin: 0px;
        padding: 0px;
    }
    .website-home-sec-6-row ul li
    {
        font-family: Inter, Sans-serif;
        font-size: 16px;
        font-weight: 400;
        line-height: 20px;
        padding: 13px 0px;
    }

    .website-home-sec-6-row .price-box-wrap-1 ul li
    {
        color: #110a1f;
    }

    .website-home-sec-6-row ul li .fa-check
    {
        padding-right: 10px;
        font-size: 17px;
        color: #b880ff;
    }

    .website-home-sec-6-row .price-box-wrap-1 ul li .fa-check
    {
        color: #110a1f;
    }

    .website-home-sec-6-row .price-feature-box h6
    {

        font-family: Inter, Sans-serif;
        font-size: 20px;
        font-weight: 500;
        line-height: 28px;
    }
    .website-home-sec-7-row
    {
        padding-top: 90px;
        padding-bottom: 90px;
    }
    .website-home-sec-7-row .sec-7-heading-wrap h2 {
        font-family: 'Kanit',Sans-serif;
        font-size: 40px;
        font-weight: 800;
        text-transform: uppercase;
        line-height: 44px;
        color: #fff;
        text-align: center;
    }
    .website-home-sec-7-row .testimonial-inner-wrap {
        padding-top: 70px;
    }
    .website-home-sec-7-row .testimonial-inner-wrap {
        max-width: 800px;
        margin: 0 auto;
    }
    .website-home-sec-7-row .testimonial-text-wrap h2 {
        font-family: 'Kanit',Sans-serif;
        font-size: 56px;
        font-weight: 700;
        line-height: 56px;
        color: #fff;
        text-transform: uppercase;
    }
    .website-home-sec-7-row .testimonial-text-wrap .testimonial-user-sec {
        padding-top: 60px;
    }
    .website-home-sec-7-row .testimonial-user-sec .testimonial-user-img
    {
        display: inline-block;
        width: 100%;
        max-width: 50px;
        position: relative;
        bottom: 15px;
    }
    .website-home-sec-7-row .testimonial-user-sec .testimonial-user-img img
    {
        border-radius: 50%;
    }
    .website-home-sec-7-row .testimonial-user-sec .testimonial-user-text
    {
        display: inline-block;
        padding-left: 10px;
    }
    .website-home-sec-7-row .testimonial-user-sec .testimonial-user-text h3
    {
        margin-bottom: 0px;
        color: #fff;
        font-family: 'Inter',Sans-serif;
        font-size: 24px;
        font-weight: 600;
        line-height: 32px;
    }
    .website-home-sec-7-row .testimonial-user-sec .testimonial-user-text p
    {
        margin-bottom: 0px;
        color: #b880ff;
        font-family: 'Inter',Sans-serif;
        font-size: 16px;
        font-weight: 400;
        line-height: 20px;
    }
    .website-home-sec-7-row .testimonial-video-wrap
    {
        position: relative;
    }
    .website-home-sec-7-row .testimonial-video-wrap .testimonial-video-sec img
    {
        border-radius: 25px;
    }
    .website-home-sec-7-row .testimonial-video-wrap .testimonial-video-sec
    {
        position: relative;
    }
    .website-home-sec-7-row .testimonial-video-wrap .testimonial-video-play-warp {
        position: absolute;
        background-color: #ffffff91;
        bottom: 10px;
        padding: 5px 15px 5px 5px;
        border-radius: 30px;
        left: 5px;
    }
    .website-home-sec-7-row .testimonial-video-wrap .testimonial-video-play-warp span
    {
        color: #311073;
        font-family: 'Inter',Sans-serif;
        font-size: 16px;
        font-weight: 600;
        line-height: 24px;
        padding-left: 5px;
    }
    .website-home-sec-7-row .testimonial-video-wrap p
    {
        margin: 0px;
        color: #fff;
        padding-top: 20px;
        font-family: 'Inter',Sans-serif;
        font-size: 14px;
        font-weight: 500;
        line-height: 24px;
    }
    .testimonial-box-warp
    {

    }

    .website-home-sec-7-row .testimonial-inner-wrap .testimonial-divider {
        width: 100%;
        height: 1px;
        margin: 60px 0px;
        background-color: #ffffff85;
    }
    .testimonial-button-warp {
        text-align: center;
        padding-top: 70px;
    }
    .testimonial-button-warp .btn-website-hilight {
       font-size: 16px;
       font-family: 'Inter',Sans-serif;
       font-weight: 600;
       line-height: 24px;
       padding: 6px 24px;

    }

    .website-home-sec-8-row .subscribe-sec-wrap {
        border: 1px solid #7000ff;
        padding: 50px;
        border-radius: 30px;
        background-color: #26174375;
    }
    .website-home-sec-8-row .subscribe-sec-wrap img {
        width: 100%;
        max-width: 115px;
        margin: 0 auto;
        display: block;
    }
    .website-home-sec-8-row .subscribe-sec-wrap h3 {
        font-family: 'Kanit', Sans-serif;
        font-size: 40px;
        font-weight: 800;
        text-transform: uppercase;
        line-height: 44px;
        color: #fff;
        text-align: center;
        padding: 40px 15%;
    }
    .website-home-sec-8-row .subscribe-sec-wrap .subscribe-from-warp {
        background-color: #26114b;
        max-width: 350px;
        padding: 20px 60px 0px;
        margin: 0 auto;
        border-radius: 60px;
    }
    .website-home-sec-8-row .subscribe-sec-wrap .subscribe-from-warp input {
        background: none;
        border: none;
        padding: 5px 10px;
        margin-bottom: 16px;
        width: 100%;
        text-align: center;
        color: #fff;
    }
    .website-home-sec-8-row .subscribe-sec-wrap .subscribe-from-warp .subscribe-from-button-warp {
        text-align: center;
    }
    .website-home-sec-8-row .subscribe-sec-wrap .subscribe-from-warp .subscribe-from-button-warp button {

        font-family: 'Inter', Sans-serif; 
        font-size: 16px;
        font-weight: 600;
        line-height: 24px;
    }
    .website-home-sec-8-row
    {
        padding-bottom: 20px; 
    }

</style>
@endpush

@section('content')
<div class="website-home-main-wrap">
    
    <div class="row website-home-sec-1-row">
            <div class="col-12">
                <div class="container-lg">

                    <div class="row row-1">
                        <div class="col-md-3 box-mid-warp box-mid-warp-1">
                            <div class="box-mid box-mid-1">
                                <p>500+</p>
                                <p class="box-mid-p">Real Happy Clients</p>
                            </div>
                        </div>

                        <div class="col-md-6 box-mid-heading">
                            <h2 class="lg-heading">SIMPLIFY YOUR</h2>
                            <a href="#" class="btn btn-primary-website btn-website-round">Get in Touch!</a>
                        </div>

                        <div class="col-md-3 box-mid-warp box-mid-warp-2">
                            <div class="box-mid box-mid-2">
                                <p>999+</p>
                                <p class="box-mid-p">Successful projects</p>
                            </div>
                        </div>
                    </div>

                    <div class="row row-2">
                        <div class="col-md-4 box-mid-warp-sec-2 box-mid-warp-sec-2-1">
                            <div class="box-mid-inner-sec-2">
                                <p class="num-box">20+</p>
                                <p class="text-box">Years Experience</p>
                            </div>
                            <p class="text-box-2">Pioneering strategies, unrivaled expertise, and a commitment to excellence.</p>
                        </div>

                        <div class="col-md-4">
                            <div class="image-wrap text-center">
                                <img class="img-fluid" src="https://kit.nirmanavisual.com/digicy/wp-content/uploads/sites/31/2023/08/Full-length-portrait-of-aggressive-young-mans-shouting-using-megaphone-isolated-over-purple-studio.png" alt="Image">
                            </div>
                        </div>
                        <div class="col-md-4 box-mid-warp-sec-2 box-mid-warp-sec-2-2">
                            <div class="box-mid-inner-sec-2">
                                <p class="num-box">100+</p>
                                <p class="text-box">Winer Awwards</p>
                            </div>
                            <p class="text-box-2">Let's navigate the digital realm together</p>
                        </div>
                    </div>
            
                </div>
            </div>

    </div>

    <div class="row website-home-sec-2-row">
        <div class="col-md-12">
            <div class="container-lg">
                
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <h2 class="lg-heading">we are innovative digital agency</h2>
                                <a href="#" class="btn btn-primary-website btn-website-round">Read more</a>
                            </div>
                            <div class="col-md-4">
                                <h2 class="heading-secondary">Our Story</h2>
                                <p class="text-box-2">Born from passion and driven by results, we've grown from a humble startup to a leading digital powerhouse.</p>
                            </div>
                            <div class="col-md-4">
                                <h2 class="heading-secondary">Our Mission</h2>
                                <p class="text-box-2">To deliver innovative digital solutions that not only enhance brand recognition but drive measurable results</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <img class="img-fluid" src="https://kit.nirmanavisual.com/digicy/wp-content/uploads/sites/31/2023/08/Horizontal-portrait-of-five-peoples-express-different-emotions-stand-in-row-next-to-each-other-isol.png" alt="Image">
                    </div>


                </div>

            </div>
        </div>
    </div>


    <div class="row website-home-sec-3-row">
        <div class="col-md-12">
            <div class="container-lg">
                
                <div class="row">
                    
                    <div class="col-md-12">
                        <h2 class="sec-main-heading">Growth your businesS through digital agency</h2>
                    </div>

                    <div class="col-md-6 text-center">
                        <img class="img-fluid website-home-sec-3-img" src="https://kit.nirmanavisual.com/digicy/wp-content/uploads/sites/31/2023/08/Beautiful-surprised-redhead-young-woman-keeps-mouth-opened-sees-something-unbelievable-amazes-by-une.png" alt="Image">
                    </div>

                    <div class="col-md-6">
                        <div class="row">
                            
                            
                            <div class="col-md-6 sec-3-right-box-wrap">
                                <div class="sec-3-right-box-wrap-inner sec-3-right-box-wrap-inner-1">
                                    <div class="iocn-wrap">
                                        <img class="img-fluid" src="https://kit.nirmanavisual.com/digicy/wp-content/uploads/sites/31/2023/08/Logo-Purple1.png">
                                    </div>
                                    <div class="text-wrap">
                                        <h3>Search Engine Optimization</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 sec-3-right-box-wrap">
                                <div class="sec-3-right-box-wrap-inner sec-3-right-box-wrap-inner-2">
                                    <div class="iocn-wrap">
                                        <img class="img-fluid" src="https://kit.nirmanavisual.com/digicy/wp-content/uploads/sites/31/2023/08/Logo-Blue.png">
                                    </div>
                                    <div class="text-wrap">
                                        <h3>Filter your Customers</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 sec-3-right-box-wrap">
                                <div class="sec-3-right-box-wrap-inner sec-3-right-box-wrap-inner-3">
                                    <div class="iocn-wrap">
                                        <img class="img-fluid" src="https://kit.nirmanavisual.com/digicy/wp-content/uploads/sites/31/2023/08/Logo-Coklat.png">
                                    </div>
                                    <div class="text-wrap">
                                        <h3>Increase Your Profit</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 sec-3-right-box-wrap">
                                <div class="sec-3-right-box-wrap-inner sec-3-right-box-wrap-inner-4">
                                    <div class="iocn-wrap">
                                        <img class="img-fluid" src="https://kit.nirmanavisual.com/digicy/wp-content/uploads/sites/31/2023/08/Logo-Dark-Blue.png">
                                    </div>
                                    <div class="text-wrap">
                                        <h3>Switch to Digital Media</h3>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="row website-home-sec-4-row m-0">
        <div class="col-md-12">
            <div class="container-lg">
                
                <div class="row">
                    
                    <div class="col-md-12">
                        <h2 class="sec-main-heading">SERVICES DETAILS</h2>
                    </div>
                    
                    <div class="col-md-4 list-sec-wrap">
                        <div class="list-sec-wrap-inner">
                            <ul>
                                <li class="list-sec-li active">Amazing Stuff for Promotion</li>
                                <li class="list-sec-li">Pay-per-click Advertising</li>
                                <li class="list-sec-li">Content Marketing</li>
                                <li class="list-sec-li">Social Media Management</li>
                                <li class="list-sec-li">Web Design & Development</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-8 slider-sec-wrap">
                        <div class="slider-sec-wrap-inner">
                            <img class="img-fluid" src="https://kit.nirmanavisual.com/digicy/wp-content/uploads/sites/31/2023/08/new-female-modern-running-shoe-on-pink-purple-.jpg" alt="Image">
                        </div>
                    </div>
                    

                </div>

            </div>
        </div>
    </div>

    <div class="row website-home-sec-5-row m-0">
        <div class="col-md-12">
            <div class="container-lg">
                
                <div class="row">
                    
                    <div class="col-md-4 web-home-sec-5-box-wrap">
                        <div class="web-home-sec-5-box-wrap-inner">
                           <div class="icon-box">
                                <i class="fas fa-search"></i>
                           </div>
                           <h3>Search Marketing</h3>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                           <a href="#" class="btn btn-primary-website btn-website-round">Click here</a>
                        </div>
                    </div>

                    <div class="col-md-4 web-home-sec-5-box-wrap">
                        <div class="web-home-sec-5-box-wrap-inner">
                           <div class="icon-box">
                                <i class="fas fa-bullhorn"></i>
                           </div>
                           <h3>Better Analytics</h3>
                           <p>Phasellus mollis congue neque lacinia vehicula. Sed tincidunt feugiat lacus sit amet commodo. Ut in tortor nunc.</p>
                           <a href="#" class="btn btn-primary-website btn-website-round">Click here</a>
                        </div>
                    </div>

                    <div class="col-md-4 web-home-sec-5-box-wrap">
                        <div class="web-home-sec-5-box-wrap-inner">
                           <div class="icon-box">
                                <i class="fas fa-envelope"></i>
                           </div>
                           <h3>Email Marketing</h3>
                           <p>Proin mattis facilisis ante sed posuere. Morbi ullamcorper mauris ac lorem sagittis suscipit. In suscipit dui tortor.</p>
                           <a href="#" class="btn btn-primary-website btn-website-round">Click here</a>
                        </div>
                    </div>

                    <div class="col-md-4 web-home-sec-5-box-wrap">
                        <div class="web-home-sec-5-box-wrap-inner">
                           <div class="icon-box">
                                <i class="fas fa-rocket"></i>
                           </div>
                           <h3>Convertion Rate</h3>
                           <p>Vivamus eget mauris et nunc congue mollis vel eleifend turpis. Aenean placerat sapien odio, a feugiat dui sodales ut.</p>
                           <a href="#" class="btn btn-primary-website btn-website-round">Click here</a>
                        </div>
                    </div>

                    <div class="col-md-4 web-home-sec-5-box-wrap">
                        <div class="web-home-sec-5-box-wrap-inner">
                           <div class="icon-box">
                                <i class="fas fa-cloud"></i>
                           </div>
                           <h3>This is the heading</h3>
                           <p>Sed sit amet dictum tortor. Sed vulputate urna nec orci sodales tincidunt. Maecenas vehicula felis nec fringilla semper.</p>
                           <a href="#" class="btn btn-primary-website btn-website-round">Click here</a>
                        </div>
                    </div>

                    <div class="col-md-4 web-home-sec-5-box-wrap">
                        <div class="web-home-sec-5-box-wrap-inner">
                           <div class="icon-box">
                                <i class="fas fa-clock"></i>
                           </div>
                           <h3>Better Outcomes</h3>
                           <p>Sed lobortis suscipit molestie. Aliquam dignissim varius faucibus. Sed iaculis ipsum a eleifend volutpat.</p>
                           <a href="#" class="btn btn-primary-website btn-website-round">Click here</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="row website-home-sec-6-row m-0">
        <div class="col-md-12">
            <div class="container-lg price-plan-slider-container">
                
                @php
                    // Example image URLs from the backend
                    $imageUrls = [
                        'https://www.w3schools.com/bootstrap/la.jpg',
                        'https://www.w3schools.com/bootstrap/chicago.jpg',
                        'https://www.w3schools.com/bootstrap/ny.jpg'
                    ];
                @endphp
                <price-plan-slider ></price-plan-slider>

            </div>
        </div>
    </div>

    <div class="row website-home-sec-7-row m-0">
        <div class="col-md-12">
            <div class="container-lg">
                
                <div class="row sec-7-heading-wrap">
                    
                    <div class="col-md-12">
                        <h2 class="sec-main-heading">Highlight <br> customers say</h2>
                    </div>
                    
                </div>

                <div class="row sec-7-testimonial-wrap">
                    
                    <div class="col-md-12 testimonial-inner-wrap">
                        
                        <div class="row testimonial-box-warp">

                            <div class="col-md-6 testimonial-text-wrap">
                                <h2>Great <br> marketing <br> agency!</h2>
                                <div class="testimonial-user-sec">
                                    <div class="testimonial-user-img">
                                        <img class="img-fluid" src="https://kit.nirmanavisual.com/digicy/wp-content/uploads/sites/31/2023/08/Smiling-boy-with-red-headphones-standing-and-holding-skateboard.png" alt="Image">
                                    </div>
                                    <div class="testimonial-user-text">
                                        <h3>Indra Muliana</h3>
                                        <p>Graphic Desainer</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 testimonial-video-wrap">
                                <div class="testimonial-video-sec">
                                    <img class="img-fluid" src="https://kit.nirmanavisual.com/digicy/wp-content/uploads/sites/31/2023/08/Smiling-boy-with-red-headphones-standings-and-holding-skateboard-1-1024x571.png" alt="Image">
                                    <div class="testimonial-video-play-warp">
                                        <div class="testimonial-video-play-warp-inner">
                                            <button class="btn btn-primary-website btn-website-round"><i class="fas fa-play"></i></button>
                                            <span>Play !</span>
                                        </div>
                                    </div>
                                </div>
                                <p>" I really love to work with this team!, amazing experience, very professional, perfect team!, i would like to collaborate with them soon, Thanks</p>
                            </div>
                            
                        </div>

                        <div class="col-md-12 testimonial-divider"></div>

                        <div class="row testimonial-box-warp">

                            <div class="col-md-6 testimonial-video-wrap">
                                <div class="testimonial-video-sec">
                                    <img class="img-fluid" src="https://kit.nirmanavisual.com/digicy/wp-content/uploads/sites/31/2023/08/Teenage-girl-with-pink-skateboard-1-1024x571.png" alt="Image">
                                    <div class="testimonial-video-play-warp">
                                        <div class="testimonial-video-play-warp-inner">
                                            <button class="btn btn-primary-website btn-website-round"><i class="fas fa-play"></i></button>
                                            <span>Play !</span>
                                        </div>
                                    </div>
                                </div>
                                <p>" I really love to work with this team!, amazing experience, very professional, perfect team!, i would like to collaborate with them soon, Thanks</p>
                            </div>

                            <div class="col-md-6 testimonial-text-wrap">
                                <h2>Incredible <br> Marketing <br> team!</h2>
                                <div class="testimonial-user-sec">
                                    <div class="testimonial-user-img">
                                        <img class="img-fluid" src="https://kit.nirmanavisual.com/digicy/wp-content/uploads/sites/31/2023/08/Teenage-girl-with-pink-skateboard.png" alt="Image">
                                    </div>
                                    <div class="testimonial-user-text">
                                        <h3>Pupun Muliana</h3>
                                        <p>Website Developer</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="col-md-12 testimonial-button-warp">
                            <a href="#" class="btn btn-primary-website btn-website-round btn-website-hilight">More Testimonial</a>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="row website-home-sec-8-row m-0">
        <div class="col-md-12">
            <div class="container-lg">
                
                <div class="row sec-7-heading-wrap">
                    
                    <div class="col-md-12 subscribe-sec-wrap">
                        <div class="subscribe-sec-wrap-inner">
                            <img class="img-fluid" src="https://kit.nirmanavisual.com/digicy/wp-content/uploads/sites/31/2023/08/diamonds.png" alt="Image">
                            <h3>see how we can help your business grow with digital marketing</h3>
                            <div class="subscribe-from-warp">
                                <form action="#">
                                    <input type="text" placeholder="Enter your email">
                                    <div class="subscribe-from-button-warp">
                                        <button type="button" class="btn btn-primary-website btn-website-round">Subscribe</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>


</div>

@endsection

@push('scripts')

@endpush